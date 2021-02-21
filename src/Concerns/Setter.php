<?php

namespace ShahBurhan\PayloadStruct\Concerns;

trait Setter
{
    /**
     * Magic setter
     * @param $key
     * @param $value
     */
    public function __set($key, $value)
    {
        $this->payload[$key] = $value;
    }
    /**
     * Set items using setter notation
     * @param string $key   Key for the item
     * @param string|array|object $value
     * @return self
     */
    public function setOnCall($key, $value)
    {
        $this->payload[$this->sKey($key)] = array_shift($value);

        return $this;
    }
    /**
     * Get the setter key & lowercase the initial
     * @param  $key
     * @return string
     */
    public function sKey($key)
    {
        return lcfirst(ltrim($key, 'set'));
    }
}
