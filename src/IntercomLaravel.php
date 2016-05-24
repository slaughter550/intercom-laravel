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
        return $this->intercom->$method(...$args);
    }
}
