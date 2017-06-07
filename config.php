<?php
/**
 * Author: Lohith
 */

//All global configurations
$CONFIG = array(
    
    'APP_NAME' => 'GM Shop',
    
    //DB Configurations
    'SERVER' => 'localhost',
    
    'DB_TYPE' => 'mysql',
    
    'DB_USERNAME' => 'root',
    
    'DB_PASSWORD' => '',
    
    'DB_NAME' => 'shop',
);

class Config {
    static function get($key) {
        global $CONFIG;
        if(isset($CONFIG[$key])) {
            return $CONFIG[$key];
        }
        return FALSE;
    }
}

