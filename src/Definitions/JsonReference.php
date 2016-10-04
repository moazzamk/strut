<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;
class JsonReference extends BaseSchema
{
    
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = [];
    
    /**
     * Array to store any allowed pattern properties
     * @var array
     */
    protected static $pattern_properties = [];
    
    /**
     * If the schema allows arbitrary properties
     * @var bool
     */
    protected static $allow_additional_properties = false;
    
    /**
     * @param string $ref
     * @return $this
     */
    public function setRef($ref)
    {
        $this->data['$ref'] = $ref;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getRef()
    {
        return $this->data['$ref'];
    }
}