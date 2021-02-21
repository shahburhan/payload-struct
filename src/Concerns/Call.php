<?php

namespace ShahBurhan\PayloadStruct\Concerns;

trait Call
{
    /**
     * Magic method to handle setter and getter calls
     * @param  string $key
     * @param  array $args Method arguments
     * @return Setter or getter
     */
    public function __call($key, $args)
    {
        $type = $this->type($key, $args);

        return $this->{$type . 'OnCall'}($key, $args);
    }
    /**
     * Get the nature of the call viz. setter or getter based on method prefix
     * @param  string $key
     * @param  array $args Arguments
     * @return string
     */
    public function type($key, $args)
    {
        switch (substr($key, 0, 3)) {
            case 'set':

                $this->validateSet($args);
                return 'set';

                break;
            case 'get':
                return 'get';
                break;

            default:
                throw new \Exception("Call to undefined method: $key");

                break;
        }
    }
    /**
     * Validation for setter type
     * @param  array $args
     */
    public function validateSet($args)
    {
        if (count($args)) {
            if (count($args) > 1) {
                throw new \ArgumentCountError("Only 1 agrument expected, " . count($args) . " passed");
            }
        } else {
            throw new \ArgumentCountError("Missing value for the set item");
        }
    }
}
