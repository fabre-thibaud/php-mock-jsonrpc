<?php

namespace MockSockets\Requests
{
    class RequestHeader
    {
        private $name;
        private $value;
        
        public function __construct($name, $value = '')
        {
            $this->name = $name;
            $this->value = $value;
        }
        
        public function getName()
        {
            return $this->name;
        }
        
        public function getValue()
        {
            return $this->value;
        }
        
        public function setValue($value)
        {
            $this->value = $value;
        }
    }
}