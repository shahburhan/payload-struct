<?php

namespace ShahBurhan\PayloadStruct;

use ShahBurhan\PayloadStruct\Concerns\Call;
use ShahBurhan\PayloadStruct\Concerns\Getter;
use ShahBurhan\PayloadStruct\Concerns\Setter;

class PayloadStruct
{
    use Setter, Getter, Call;
    /**
     * Placeholder for payload items
     * @var array
     */
    protected $payload;

    public function __construct($payload = [])
    {
        $this->payload = $payload;
    }
    /**
     * Method to return payload as array
     * @return array
     */
    public function getArray()
    {
        return $this->payload;
    }
    /**
     * Method to return payload as json
     * @return string
     */
    public function getJson()
    {
        return json_encode($this->payload);
    }
    /**
     * Method to return payload as object
     * @return object
     */
    public function getObject()
    {
        return (object) $this->payload;
    }
    /**
     * Reset Payload data
     * @return self
     */
    public function flush()
    {
        $this->payload = [];
        return $this;
    }
}
