<?php

namespace Calcinai\Strut\Definitions;

use Calcinai\Strut\BaseSchema;

class Operation extends BaseSchema
{
    /**
     * Array to store schema data and default values
     * @var array
     */
    protected $data = [];
    
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
     * @param string $tags
     * @return $this
     */
    public function addTag($tags)
    {
        $this->addInternalData('tags', $tags);
        return $this;
    }
    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->data['tags'];
    }
    
    /**
     * A brief summary of the operation.
     * @param string $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->setInternalData('summary', $summary);
        return $this;
    }
    
    /**
     * A brief summary of the operation.
     * @return string
     */
    public function getSummary()
    {
        return $this->data['summary'];
    }
    
    /**
     * A longer description of the operation, GitHub Flavored Markdown is allowed.
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->setInternalData('description', $description);
        return $this;
    }
    
    /**
     * A longer description of the operation, GitHub Flavored Markdown is allowed.
     * @return string
     */
    public function getDescription()
    {
        return $this->data['description'];
    }
    
    /**
     * information about external documentation
     * @param Definitions\ExternalDocs $externalDocs
     * @return $this
     */
    public function setExternalDocs(\Calcinai\Strut\Definitions\ExternalDocs $externalDocs)
    {
        $this->setInternalData('externalDocs', $externalDocs);
        return $this;
    }
    
    /**
     * information about external documentation
     * @return Definitions\ExternalDocs
     */
    public function getExternalDocs()
    {
        return $this->data['externalDocs'];
    }
    
    /**
     * A unique identifier of the operation.
     * @param string $operationId
     * @return $this
     */
    public function setOperationId($operationId)
    {
        $this->setInternalData('operationId', $operationId);
        return $this;
    }
    
    /**
     * A unique identifier of the operation.
     * @return string
     */
    public function getOperationId()
    {
        return $this->data['operationId'];
    }
    
    /**
     * A list of MIME types the API can produce.
     * @param mixed $produces
     * @return $this
     */
    public function setProduces($produces)
    {
        $this->setInternalData('produces', $produces);
        return $this;
    }
    
    /**
     * A list of MIME types the API can produce.
     * @return mixed
     */
    public function getProduces()
    {
        return $this->data['produces'];
    }
    
    /**
     * A list of MIME types the API can consume.
     * @param mixed $consumes
     * @return $this
     */
    public function setConsumes($consumes)
    {
        $this->setInternalData('consumes', $consumes);
        return $this;
    }
    
    /**
     * A list of MIME types the API can consume.
     * @return mixed
     */
    public function getConsumes()
    {
        return $this->data['consumes'];
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @param Definitions\BodyParameter|
     *        Definitions\HeaderParameterSubSchema|
     *        Definitions\FormDataParameterSubSchema|
     *        Definitions\QueryParameterSubSchema|
     *        Definitions\PathParameterSubSchema|
     *        Definitions\BodyParameter|
     *        Definitions\HeaderParameterSubSchema|
     *        Definitions\FormDataParameterSubSchema|
     *        Definitions\QueryParameterSubSchema|
     *        Definitions\PathParameterSubSchema|
     *        Definitions\JsonReference $parameters
     * @return $this
     */
    public function addParameter($parameters)
    {
        $this->addInternalData('parameters', $parameters);
        return $this;
    }
    
    /**
     * The parameters needed to send a valid API call.
     * @return Definitions\BodyParameter|
     *         Definitions\HeaderParameterSubSchema|
     *         Definitions\FormDataParameterSubSchema|
     *         Definitions\QueryParameterSubSchema|
     *         Definitions\PathParameterSubSchema|
     *         Definitions\BodyParameter|
     *         Definitions\HeaderParameterSubSchema|
     *         Definitions\FormDataParameterSubSchema|
     *         Definitions\QueryParameterSubSchema|
     *         Definitions\PathParameterSubSchema|
     *         Definitions\JsonReference[]
     */
    public function getParameters()
    {
        return $this->data['parameters'];
    }
    
    /**
     * Response objects names can either be any valid HTTP status code or 'default'.
     * @param Definitions\Responses $responses
     * @return $this
     */
    public function setResponses(\Calcinai\Strut\Definitions\Responses $responses)
    {
        $this->setInternalData('responses', $responses);
        return $this;
    }
    
    /**
     * Response objects names can either be any valid HTTP status code or 'default'.
     * @return Definitions\Responses
     */
    public function getResponses()
    {
        return $this->data['responses'];
    }
    
    /**
     * The transfer protocol of the API.
     * @param string $schemes
     * @return $this
     */
    public function addScheme($schemes)
    {
        $this->addInternalData('schemes', $schemes);
        return $this;
    }
    
    /**
     * The transfer protocol of the API.
     * @return string[]
     */
    public function getSchemes()
    {
        return $this->data['schemes'];
    }
    
    /**
     * @param bool $deprecated
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->setInternalData('deprecated', $deprecated);
        return $this;
    }
    
    /**
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->data['deprecated'];
    }
    
    /**
     * @param Definitions\SecurityRequirement $security
     * @return $this
     */
    public function addSecurity(\Calcinai\Strut\Definitions\SecurityRequirement $security)
    {
        $this->addInternalData('security', $security);
        return $this;
    }
    
    /**
     * @return Definitions\SecurityRequirement[]
     */
    public function getSecurity()
    {
        return $this->data['security'];
    }

}