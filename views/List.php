<?php

class List_View extends View_Controller {
    
    public function process(\App_Request $request) {
        $mode = $request->get("mode", "Movies");
        $listModel = List_Model::getInstanceByMode($mode);
        $listHeaders = $listModel->getListHeaders();
        $listRecords = $listModel->getAllRecords($request->get("searchkey"));
        $viewer = $this->getViewer();
        $viewer->assign("MODE", $mode);
        if($request->has("searchkey")) {
            $viewer->assign("SEARCH_KEY", $request->get("searchkey"));
        }
        $viewer->assign("LIST_HEADERS", $listHeaders);
        $viewer->assign("LIST_RECORDS", $listRecords);
        
        App_Session::start();
        
        $profile = "";
        if(App_Session::get("user_name")) {
            $viewer->assign("USER_NAME", App_Session::get("user_name"));
            $profile = App_Session::get("login_type");
        }
        
        $viewer->assign("PROFILE", $profile);
        $viewer->view("List");
    }
    
    public function getScripts() {
        return array("layouts/basic/js/List.js");
    }

}