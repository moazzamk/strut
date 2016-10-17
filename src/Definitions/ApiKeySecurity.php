<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class ApiKeySecurity extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['type' => 'apiKey'];
    
    /**
     * Allowed additional properties
     * @var array
     */
    protected static $additional_properties = false;
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = ['^x-' => []];
    
    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->setInternalData('type', $type);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->data['type'];
    }
    
    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setInternalData('name', $name);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->data['name'];
    }
    
    /**
     * @param string $in
     * @return $this
     */
    public function setIn($in)
    {
        $this->setInternalData('in', $in);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getIn()
    {
        return $this->data['in'];
    }
    
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->setInternalData('description', $description);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->data['description'];
    }

}