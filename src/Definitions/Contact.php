<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

/**
 * Contact information for the owners of the API.
 */
class Contact extends BaseSchema
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
    protected static $pattern_properties = ['^x-' => []];
    
    /**
     * If the schema allows arbitrary properties
     * @var bool
     */
    protected static $allow_additional_properties = false;
    
    /**
     * The identifying name of the contact person/organization.
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->data['name'] = $name;
        return $this;
    }
    
    /**
     * The identifying name of the contact person/organization.
     * @return string
     */
    public function getName()
    {
        return $this->data['name'];
    }
    
    /**
     * The URL pointing to the contact information.
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->data['url'] = $url;
        return $this;
    }
    
    /**
     * The URL pointing to the contact information.
     * @return string
     */
    public function getUrl()
    {
        return $this->data['url'];
    }
    
    /**
     * The email address of the contact person/organization.
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->data['email'] = $email;
        return $this;
    }
    
    /**
     * The email address of the contact person/organization.
     * @return string
     */
    public function getEmail()
    {
        return $this->data['email'];
    }
}