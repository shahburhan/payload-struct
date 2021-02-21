<?php

namespace ShahBurhan\PayloadStruct\Concerns;

trait Getter
{
    /**
     * magic getter to return set items or null
     * @param  string $key
     * @return
     */
    public function __get($key)
    {
        return $this->payload[$key] ?? null;
    }
    /**
     * Method to get items using getItem notation
     * @param  $key
     * @return 
     */
    public function getOnCall($key)
    {
        return $this->payload[$this->gKey($key)] ?? null;
    }
    /**
     * Get the access key & lowercase the initial
     * @param  $key
     * @return string
     */
    public function gKey($key)
    {
        return lcfirst(ltrim($key, 'get'));
    }
}
