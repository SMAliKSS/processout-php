<?php
namespace ProcessOut\Networking;

use ProcessOut\ProcessOut;

class Request
{
    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Request's constructor
     * @param ProcessOut\ProcessOut $client
     */
    public function __construct(ProcessOut $client)
    {
        $this->client = $client;
    }

    /**
     * Prepare the request
     * @param  array $options
     * @return $request
     */
    protected function prepare($options, $len = null)
    {
        $request = curl_init(); 
        $headers = array(
            'API-Version: 1.3.0.0',
            'Content-Type: application/json'
        );
        if (! empty($options['idempotency_key']))
            $headers[] = 'Idempotency-Key: ' . $options['idempotency_key'];
        if (! empty($options['disable_logging']))
            $headers[] = 'Disable-Logging' . $options['disable_logging'] ? 'true' : '';
        if ($len != null)
            $headers[] = 'Content-Length' . ((string) $len);
        
        curl_setopt($request, CURLOPT_USERPWD, $this->client->getProjectID().':'.
            $this->client->getProjectSecret());
        curl_setopt($request, CURLOPT_HTTPHEADER, $headers); 

        curl_setopt($request, CURLOPT_TIMEOUT, 30); 
        curl_setopt($request, CURLOPT_MAXREDIRS, 4); 
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($request, CURLOPT_FOLLOWLOCATION, true); 

        return $request;
    }

    /**
     * Prepare the request data
     * @param  array $data
     * @param  array $options
     * @return array $data
     */
    protected function getData($data, $options)
    {
        if (! empty($options['expand']))
            $data['expand'] = $options['expand'];
        if (! empty($options['filter']))
            $data['filter'] = $options['filter'];
        if (! empty($options['limit']))
            $data['limit'] = $options['limit'];
        if (! empty($options['page']))
            $data['page'] = $options['page'];
        if (! empty($options['end_before']))
            $data['end_before'] = $options['end_before'];
        if (! empty($options['start_after']))
            $data['start_after'] = $options['start_after'];

        return $data;
    }

    /**
     * Generate a get request
     * @param  string $path
     * @param  array  $data
     * @param  array  $options
     * @return return Response
     */
    public function get($path, $data, $options)
    {
        $req = $this->prepare($options);
        curl_setopt($req, CURLOPT_URL, $this->client->getHost() . $path . '?' .
            http_build_query($this->getData($data, $options))); 
        $r = curl_exec($req); 
        if (!$r)
            throw new \Exception('curl exception: '.curl_error($req).
                ', code: '.curl_errno($req));

        $status = curl_getinfo($req, CURLINFO_HTTP_CODE); 
        curl_close($req);

        return new Response($r, $status);
    }

    /**
     * Generate a POST request
     * @param  string $path
     * @param  array  $data
     * @param  array  $options
     * @return return Response
     */
    public function post($path, $data, $options)
    {
        $body = json_encode($this->getData($data, $options));

        $req = $this->prepare($options, strlen($body));
        curl_setopt($req, CURLOPT_POST, true);
        curl_setopt($req, CURLOPT_POSTFIELDS, $body);

        curl_setopt($req, CURLOPT_URL, $this->client->getHost() . $path); 
        $r = curl_exec($req); 
        if (!$r)
            throw new \Exception('curl exception: '.curl_error($req).
                ', code: '.curl_errno($req));

        $status = curl_getinfo($req, CURLINFO_HTTP_CODE); 
        curl_close($req);

        return new Response($r, $status);
    }

    /**
     * Generate a PUT request
     * @param  string $path
     * @param  array  $data
     * @param  array  $options
     * @return return Response
     */
    public function put($path, $data, $options)
    {
        $body = json_encode($this->getData($data, $options));

        $req = $this->prepare($options, strlen($body));
        curl_setopt($req, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($req, CURLOPT_POSTFIELDS, $body);

        curl_setopt($req, CURLOPT_URL, $this->client->getHost() . $path); 
        $r = curl_exec($req); 
        if (!$r)
            throw new \Exception('curl exception: '.curl_error($req).
                ', code: '.curl_errno($req));

        $status = curl_getinfo($req, CURLINFO_HTTP_CODE); 
        curl_close($req);

        return new Response($r, $status);
    }

    /**
     * Generate a DELETE request
     * @param  string $path
     * @param  array  $data
     * @param  array  $options
     * @return return Response
     */
    public function delete($path, $data, $options)
    {
        $req = $this->prepare($options);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($req, CURLOPT_URL, $this->client->getHost() . $path . '?' .
            http_build_query($this->getData($data, $options))); 
        $r = curl_exec($req); 
        if (!$r)
            throw new \Exception('curl exception: '.curl_error($req).
                ', code: '.curl_errno($req));

        $status = curl_getinfo($req, CURLINFO_HTTP_CODE); 
        curl_close($req);

        return new Response($r, $status);
    }
}
