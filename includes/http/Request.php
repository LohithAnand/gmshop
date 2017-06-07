<?php
/**
 * Author: Lohith
 */
class App_Request {
    
    protected $valuemap = array();
    
    public function __construct($values) {
        $this->valuemap = $values;
    }
    
    public function get($key, $default = "") {
        if(isset($this->valuemap[$key])) {
            return $this->valuemap[$key];
        }
        return $default;
    }
    
    public function has($key) {
        return array_key_exists($key, $this->valuemap);
    }
    
}

