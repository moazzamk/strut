<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class FormDataParameterSubSchema extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = ['in' => 'formData'];
    
    /**
     * Any enums that exist on this object
     * @var array
     */
    protected static $enums = ['in' => ['formData'], 'type' => ['string', 'number', 'boolean', 'integer', 'array', 'file'], 'collectionFormat' => ['csv', 'ssv', 'tsv', 'pipes', 'multi']];
    
    /**
     * Properties and types
     * @var array
     */
    protected static $properties = ['required' => [], 'in' => [], 'description' => [], 'name' => [], 'allowEmptyValue' => [], 'type' => [], 'format' => [], 'items' => ['Definitions\\PrimitivesItems'], 'collectionFormat' => [], 'default' => [], 'maximum' => [], 'exclusiveMaximum' => [], 'minimum' => [], 'exclusiveMinimum' => [], 'maxLength' => [], 'minLength' => [], 'pattern' => [], 'maxItems' => [], 'minItems' => [], 'uniqueItems' => [], 'enum' => [], 'multipleOf' => []];
    
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
     * Determines whether or not this parameter is required or optional.
     * @param bool $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->set('required', $required);
        return $this;
    }
    
    /**
     * Determines whether or not this parameter is required or optional.
     * @return bool
     */
    public function getRequired()
    {
        return $this->get('required');
    }
    
    /**
     * Determines the location of the parameter.
     * @param string $in
     * @return $this
     */
    public function setIn($in)
    {
        $this->set('in', $in);
        return $this;
    }
    
    /**
     * Determines the location of the parameter.
     * @return string
     */
    public function getIn()
    {
        return $this->get('in');
    }
    
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->set('description', $description);
        return $this;
    }
    
    /**
     * A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
     * @return string
     */
    public function getDescription()
    {
        return $this->get('description');
    }
    
    /**
     * The name of the parameter.
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->set('name', $name);
        return $this;
    }
    
    /**
     * The name of the parameter.
     * @return string
     */
    public function getName()
    {
        return $this->get('name');
    }
    
    /**
     * allows sending a parameter by name only or with an empty value.
     * @param bool $allowEmptyValue
     * @return $this
     */
    public function setAllowEmptyValue($allowEmptyValue)
    {
        $this->set('allowEmptyValue', $allowEmptyValue);
        return $this;
    }
    
    /**
     * allows sending a parameter by name only or with an empty value.
     * @return bool
     */
    public function getAllowEmptyValue()
    {
        return $this->get('allowEmptyValue');
    }
    
    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->set('type', $type);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->get('type');
    }
    
    /**
     * @param string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->set('format', $format);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->get('format');
    }
    
    /**
     * @param PrimitivesItems $items
     * @return $this
     */
    public function setItems(PrimitivesItems $items)
    {
        $this->set('items', $items);
        return $this;
    }
    
    /**
     * @return PrimitivesItems
     */
    public function getItems()
    {
        return $this->get('items');
    }
    
    /**
     * @param string $collectionFormat
     * @return $this
     */
    public function setCollectionFormat($collectionFormat)
    {
        $this->set('collectionFormat', $collectionFormat);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCollectionFormat()
    {
        return $this->get('collectionFormat');
    }
    
    /**
     * @param mixed $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->set('default', $default);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->get('default');
    }
    
    /**
     * @param int $maximum
     * @return $this
     */
    public function setMaximum($maximum)
    {
        $this->set('maximum', $maximum);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaximum()
    {
        return $this->get('maximum');
    }
    
    /**
     * @param bool $exclusiveMaximum
     * @return $this
     */
    public function setExclusiveMaximum($exclusiveMaximum)
    {
        $this->set('exclusiveMaximum', $exclusiveMaximum);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getExclusiveMaximum()
    {
        return $this->get('exclusiveMaximum');
    }
    
    /**
     * @param int $minimum
     * @return $this
     */
    public function setMinimum($minimum)
    {
        $this->set('minimum', $minimum);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMinimum()
    {
        return $this->get('minimum');
    }
    
    /**
     * @param bool $exclusiveMinimum
     * @return $this
     */
    public function setExclusiveMinimum($exclusiveMinimum)
    {
        $this->set('exclusiveMinimum', $exclusiveMinimum);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getExclusiveMinimum()
    {
        return $this->get('exclusiveMinimum');
    }
    
    /**
     * @param int $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->set('maxLength', $maxLength);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->get('maxLength');
    }
    
    /**
     * @param mixed $minLength
     * @return $this
     */
    public function setMinLength($minLength)
    {
        $this->set('minLength', $minLength);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getMinLength()
    {
        return $this->get('minLength');
    }
    
    /**
     * @param string $pattern
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->set('pattern', $pattern);
        return $this;
    }
    
    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->get('pattern');
    }
    
    /**
     * @param int $maxItems
     * @return $this
     */
    public function setMaxItems($maxItems)
    {
        $this->set('maxItems', $maxItems);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMaxItems()
    {
        return $this->get('maxItems');
    }
    
    /**
     * @param mixed $minItems
     * @return $this
     */
    public function setMinItems($minItems)
    {
        $this->set('minItems', $minItems);
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getMinItems()
    {
        return $this->get('minItems');
    }
    
    /**
     * @param bool $uniqueItems
     * @return $this
     */
    public function setUniqueItems($uniqueItems)
    {
        $this->set('uniqueItems', $uniqueItems);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getUniqueItems()
    {
        return $this->get('uniqueItems');
    }
    
    /**
     * @param mixed $enum
     * @return $this
     */
    public function addEnum($enum)
    {
        $this->add('enum', $enum);
        return $this;
    }
    
    /**
     * @return mixed[]
     */
    public function getEnum()
    {
        return $this->get('enum');
    }
    
    /**
     * @param int $multipleOf
     * @return $this
     */
    public function setMultipleOf($multipleOf)
    {
        $this->set('multipleOf', $multipleOf);
        return $this;
    }
    
    /**
     * @return int
     */
    public function getMultipleOf()
    {
        return $this->get('multipleOf');
    }

}