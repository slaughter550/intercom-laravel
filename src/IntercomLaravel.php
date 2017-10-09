<?php

namespace Shadow\IntercomLaravel;

use Intercom\IntercomClient;

class IntercomLaravel
{
    private $intercom;
    public function __construct($token)
    {
        $this->intercom = new IntercomClient($token);
    }

    public function __call($method, array $args)
    {
        if (method_exists($this->intercom, $method)) {
            return $this->intercom->$method(...$args);
        }

        return $this->intercom->$method;
    }
}
