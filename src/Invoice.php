<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Invoice
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the invoice
     * @var string
     */
    protected $id;

    /**
     * Project to which the invoice belongs
     * @var object
     */
    protected $project;

    /**
     * Transaction generated by the invoice
     * @var object
     */
    protected $transaction;

    /**
     * Customer linked to the invoice, if any
     * @var object
     */
    protected $customer;

    /**
     * Subscription to which the invoice is linked to, if any
     * @var object
     */
    protected $subscription;

    /**
     * URL to which you may redirect your customer to proceed with the payment
     * @var string
     */
    protected $url;

    /**
     * Name of the invoice
     * @var string
     */
    protected $name;

    /**
     * Amount to be paid
     * @var string
     */
    protected $amount;

    /**
     * Currency of the invoice
     * @var string
     */
    protected $currency;

    /**
     * Metadata related to the invoice, in the form of a dictionary (key-value pair)
     * @var dictionary
     */
    protected $metadata;

    /**
     * Choose whether or not to request the email during the checkout process
     * @var boolean
     */
    protected $requestEmail;

    /**
     * Choose whether or not to request the shipping address during the checkout process
     * @var boolean
     */
    protected $requestShipping;

    /**
     * URL where the customer will be redirected upon payment
     * @var string
     */
    protected $returnUrl;

    /**
     * URL where the customer will be redirected if the payment was canceled
     * @var string
     */
    protected $cancelUrl;

    /**
     * Define whether or not the invoice is in sandbox environment
     * @var boolean
     */
    protected $sandbox;

    /**
     * Date at which the invoice was created
     * @var string
     */
    protected $createdAt;

    /**
     * Invoice constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->setMetadata(array('_library' => 'php'));
        $this->setRequestEmail((bool) false);
        $this->setRequestShipping((bool) false);
        

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Id
     * ID of the invoice
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the invoice
     * @param  string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }
    
    /**
     * Get Project
     * Project to which the invoice belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the invoice belongs
     * @param  object $value
     * @return $this
     */
    public function setProject($value)
    {
        if (is_object($value))
            $this->project = $value;
        else
        {
            $obj = new Project($this->client);
            $obj->fillWithData($value);
            $this->project = $obj;
        }
        return $this;
    }
    
    /**
     * Get Transaction
     * Transaction generated by the invoice
     * @return object
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set Transaction
     * Transaction generated by the invoice
     * @param  object $value
     * @return $this
     */
    public function setTransaction($value)
    {
        if (is_object($value))
            $this->transaction = $value;
        else
        {
            $obj = new Transaction($this->client);
            $obj->fillWithData($value);
            $this->transaction = $obj;
        }
        return $this;
    }
    
    /**
     * Get Customer
     * Customer linked to the invoice, if any
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set Customer
     * Customer linked to the invoice, if any
     * @param  object $value
     * @return $this
     */
    public function setCustomer($value)
    {
        if (is_object($value))
            $this->customer = $value;
        else
        {
            $obj = new Customer($this->client);
            $obj->fillWithData($value);
            $this->customer = $obj;
        }
        return $this;
    }
    
    /**
     * Get Subscription
     * Subscription to which the invoice is linked to, if any
     * @return object
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Set Subscription
     * Subscription to which the invoice is linked to, if any
     * @param  object $value
     * @return $this
     */
    public function setSubscription($value)
    {
        if (is_object($value))
            $this->subscription = $value;
        else
        {
            $obj = new Subscription($this->client);
            $obj->fillWithData($value);
            $this->subscription = $obj;
        }
        return $this;
    }
    
    /**
     * Get Url
     * URL to which you may redirect your customer to proceed with the payment
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set Url
     * URL to which you may redirect your customer to proceed with the payment
     * @param  string $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->url = $value;
        return $this;
    }
    
    /**
     * Get Name
     * Name of the invoice
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name
     * Name of the invoice
     * @param  string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }
    
    /**
     * Get Amount
     * Amount to be paid
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set Amount
     * Amount to be paid
     * @param  string $value
     * @return $this
     */
    public function setAmount($value)
    {
        $this->amount = $value;
        return $this;
    }
    
    /**
     * Get Currency
     * Currency of the invoice
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     * Currency of the invoice
     * @param  string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->currency = $value;
        return $this;
    }
    
    /**
     * Get Metadata
     * Metadata related to the invoice, in the form of a dictionary (key-value pair)
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set Metadata
     * Metadata related to the invoice, in the form of a dictionary (key-value pair)
     * @param  array $value
     * @return $this
     */
    public function setMetadata($value)
    {
        $this->metadata = $value;
        return $this;
    }
    
    /**
     * Get RequestEmail
     * Choose whether or not to request the email during the checkout process
     * @return bool
     */
    public function getRequestEmail()
    {
        return $this->requestEmail;
    }

    /**
     * Set RequestEmail
     * Choose whether or not to request the email during the checkout process
     * @param  bool $value
     * @return $this
     */
    public function setRequestEmail($value)
    {
        $this->requestEmail = $value;
        return $this;
    }
    
    /**
     * Get RequestShipping
     * Choose whether or not to request the shipping address during the checkout process
     * @return bool
     */
    public function getRequestShipping()
    {
        return $this->requestShipping;
    }

    /**
     * Set RequestShipping
     * Choose whether or not to request the shipping address during the checkout process
     * @param  bool $value
     * @return $this
     */
    public function setRequestShipping($value)
    {
        $this->requestShipping = $value;
        return $this;
    }
    
    /**
     * Get ReturnUrl
     * URL where the customer will be redirected upon payment
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Set ReturnUrl
     * URL where the customer will be redirected upon payment
     * @param  string $value
     * @return $this
     */
    public function setReturnUrl($value)
    {
        $this->returnUrl = $value;
        return $this;
    }
    
    /**
     * Get CancelUrl
     * URL where the customer will be redirected if the payment was canceled
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * Set CancelUrl
     * URL where the customer will be redirected if the payment was canceled
     * @param  string $value
     * @return $this
     */
    public function setCancelUrl($value)
    {
        $this->cancelUrl = $value;
        return $this;
    }
    
    /**
     * Get Sandbox
     * Define whether or not the invoice is in sandbox environment
     * @return bool
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * Set Sandbox
     * Define whether or not the invoice is in sandbox environment
     * @param  bool $value
     * @return $this
     */
    public function setSandbox($value)
    {
        $this->sandbox = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the invoice was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the invoice was created
     * @param  string $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return Invoice
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['transaction']))
            $this->setTransaction($data['transaction']);

        if(! empty($data['customer']))
            $this->setCustomer($data['customer']);

        if(! empty($data['subscription']))
            $this->setSubscription($data['subscription']);

        if(! empty($data['url']))
            $this->setUrl($data['url']);

        if(! empty($data['name']))
            $this->setName($data['name']);

        if(! empty($data['amount']))
            $this->setAmount($data['amount']);

        if(! empty($data['currency']))
            $this->setCurrency($data['currency']);

        if(! empty($data['metadata']))
            $this->setMetadata($data['metadata']);

        if(! empty($data['request_email']))
            $this->setRequestEmail($data['request_email']);

        if(! empty($data['request_shipping']))
            $this->setRequestShipping($data['request_shipping']);

        if(! empty($data['return_url']))
            $this->setReturnUrl($data['return_url']);

        if(! empty($data['cancel_url']))
            $this->setCancelUrl($data['cancel_url']);

        if(! empty($data['sandbox']))
            $this->setSandbox($data['sandbox']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
    /**
     * Authorize the invoice using the given source (customer or token)
	 * @param string $source
     * @param array $options
     * @return Transaction
     */
    public function authorize($source, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/invoices/" . urlencode($this->getId()) . "/authorize";

        $data = array(
			"source" => $source
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field transaction
        $body = $response->getBody();
        $body = $body['transaction'];
        $transaction = new Transaction($this->client);
        $returnValues['transaction'] = $transaction->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Capture the invoice using the given source (customer or token)
	 * @param string $source
     * @param array $options
     * @return Transaction
     */
    public function capture($source, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/invoices/" . urlencode($this->getId()) . "/capture";

        $data = array(
			"source" => $source
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field transaction
        $body = $response->getBody();
        $body = $body['transaction'];
        $transaction = new Transaction($this->client);
        $returnValues['transaction'] = $transaction->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get the customer linked to the invoice.
     * @param array $options
     * @return Customer
     */
    public function fetchCustomer($options = array())
    {
        $request = new Request($this->client);
        $path    = "/invoices/" . urlencode($this->getId()) . "/customers";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field customer
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($this->client);
        $returnValues['customer'] = $customer->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Assign a customer to the invoice.
	 * @param string $customerId
     * @param array $options
     * @return Customer
     */
    public function assignCustomer($customerId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/invoices/" . urlencode($this->getId()) . "/customers";

        $data = array(
			"customer_id" => $customerId
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field customer
        $body = $response->getBody();
        $body = $body['customer'];
        $customer = new Customer($this->client);
        $returnValues['customer'] = $customer->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get the transaction of the invoice.
     * @param array $options
     * @return Transaction
     */
    public function fetchTransaction($options = array())
    {
        $request = new Request($this->client);
        $path    = "/invoices/" . urlencode($this->getId()) . "/transactions";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field transaction
        $body = $response->getBody();
        $body = $body['transaction'];
        $transaction = new Transaction($this->client);
        $returnValues['transaction'] = $transaction->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Void the invoice
     * @param array $options
     * @return Transaction
     */
    public function void($options = array())
    {
        $request = new Request($this->client);
        $path    = "/invoices/" . urlencode($this->getId()) . "/void";

        $data = array(

        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field transaction
        $body = $response->getBody();
        $body = $body['transaction'];
        $transaction = new Transaction($this->client);
        $returnValues['transaction'] = $transaction->fillWithData($body);
                
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Get all the invoices.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $request = new Request($this->client);
        $path    = "/invoices";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field invoices
        $a    = array();
        $body = $response->getBody();
        foreach($body['invoices'] as $v)
        {
            $tmp = new Invoice($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Invoices'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new invoice.
     * @param array $options
     * @return $this
     */
    public function create($options = array())
    {
        $request = new Request($this->client);
        $path    = "/invoices";

        $data = array(
			"name" => $this->getName(), 
			"amount" => $this->getAmount(), 
			"currency" => $this->getCurrency(), 
			"metadata" => $this->getMetadata(), 
			"request_email" => $this->getRequestEmail(), 
			"request_shipping" => $this->getRequestShipping(), 
			"return_url" => $this->getReturnUrl(), 
			"cancel_url" => $this->getCancelUrl()
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field invoice
        $body = $response->getBody();
        $body = $body['invoice'];
        $returnValues['create'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Create a new invoice for the given customer ID.
	 * @param string $customerId
     * @param array $options
     * @return $this
     */
    public function createForCustomer($customerId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/invoices";

        $data = array(
			"name" => $this->getName(), 
			"amount" => $this->getAmount(), 
			"currency" => $this->getCurrency(), 
			"metadata" => $this->getMetadata(), 
			"request_email" => $this->getRequestEmail(), 
			"request_shipping" => $this->getRequestShipping(), 
			"return_url" => $this->getReturnUrl(), 
			"cancel_url" => $this->getCancelUrl(), 
			"customer_id" => $customerId
        );

        $response = $request->post($path, $data, $options);
        $returnValues = array();

        
        // Handling for field invoice
        $body = $response->getBody();
        $body = $body['invoice'];
        $returnValues['createForCustomer'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find an invoice by its ID.
	 * @param string $invoiceId
     * @param array $options
     * @return $this
     */
    public function find($invoiceId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/invoices/" . urlencode($invoiceId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field invoice
        $body = $response->getBody();
        $body = $body['invoice'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
