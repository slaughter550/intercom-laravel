<?php

namespace Shadow\IntercomLaravel;

use Intercom\IntercomClient;

class IntercomLaravel
{
    private $intercom;

    public function __construct($id, $key)
    {
        $this->intercom = new IntercomClient($id, $key);
    }

    public function __call($method, array $args)
    {
        if (method_exists($this->intercom, $method)) {
            return $this->intercom->$method(...$args);
        }

        return $this->intercom->$method;
    }
}
