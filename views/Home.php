<?php
/**
 * Author: Lohith
 */
class Home_View extends View_Controller {
    
    public function process(App_Request $request) {
        $viewer = $this->getViewer();
        $currentStoreID = 12345;
        $shopInstance = Shop_Model::getInstanceById($currentStoreID);
        $viewer->assign("SHOP_NAME", $shopInstance->get("name"));
        $viewer->view('Home');
    }
    
}

