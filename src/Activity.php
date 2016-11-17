<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class Activity
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * ID of the activity
     * @var string
     */
    protected $id;

    /**
     * Project to which the activity belongs
     * @var object
     */
    protected $project;

    /**
     * Title of the activity
     * @var string
     */
    protected $title;

    /**
     * Content of the activity
     * @var string
     */
    protected $content;

    /**
     * Level of the activity
     * @var integer
     */
    protected $level;

    /**
     * Date at which the transaction was created
     * @var string
     */
    protected $createdAt;

    /**
     * Activity constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Id
     * ID of the activity
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Id
     * ID of the activity
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
     * Project to which the activity belongs
     * @return object
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set Project
     * Project to which the activity belongs
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
     * Get Title
     * Title of the activity
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set Title
     * Title of the activity
     * @param  string $value
     * @return $this
     */
    public function setTitle($value)
    {
        $this->title = $value;
        return $this;
    }
    
    /**
     * Get Content
     * Content of the activity
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set Content
     * Content of the activity
     * @param  string $value
     * @return $this
     */
    public function setContent($value)
    {
        $this->content = $value;
        return $this;
    }
    
    /**
     * Get Level
     * Level of the activity
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set Level
     * Level of the activity
     * @param  int $value
     * @return $this
     */
    public function setLevel($value)
    {
        $this->level = $value;
        return $this;
    }
    
    /**
     * Get CreatedAt
     * Date at which the transaction was created
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set CreatedAt
     * Date at which the transaction was created
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
     * @return Activity
     */
    public function fillWithData($data)
    {
        if(! empty($data['id']))
            $this->setId($data['id']);

        if(! empty($data['project']))
            $this->setProject($data['project']);

        if(! empty($data['title']))
            $this->setTitle($data['title']);

        if(! empty($data['content']))
            $this->setContent($data['content']);

        if(! empty($data['level']))
            $this->setLevel($data['level']);

        if(! empty($data['created_at']))
            $this->setCreatedAt($data['created_at']);

        return $this;
    }

    
    /**
     * Get all the project activities.
     * @param array $options
     * @return array
     */
    public function all($options = array())
    {
        $request = new Request($this->client);
        $path    = "/activities";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field activities
        $a    = array();
        $body = $response->getBody();
        foreach($body['activities'] as $v)
        {
            $tmp = new Activity($this->client);
            $tmp->fillWithData($v);
            $a[] = $tmp;
        }
        $returnValues['Activities'] = $a;
        
        return array_values($returnValues)[0];
    }
    
    /**
     * Find a specific activity and fetch its data.
	 * @param string $activityId
     * @param array $options
     * @return $this
     */
    public function find($activityId, $options = array())
    {
        $request = new Request($this->client);
        $path    = "/activities/" . urlencode($activityId) . "";

        $data = array(

        );

        $response = $request->get($path, $data, $options);
        $returnValues = array();

        
        // Handling for field activity
        $body = $response->getBody();
        $body = $body['activity'];
        $returnValues['find'] = $this->fillWithData($body);
        
        return array_values($returnValues)[0];
    }
    
}
