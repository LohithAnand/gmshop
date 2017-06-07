<?php

class Shop_Model extends Base_Model {
    
    public static function getInstanceById($storeId) {
        $shopInstance;
        if(!empty($storeId)) {
            $db = Database_Connector::getConnection();
            $res = $db->query("select * from gm_shop where store_id = ?", array($storeId));
            $shopInstance = new SELF($db->fetch($res)[0]);
        }
        return $shopInstance;
    } 
    
}

