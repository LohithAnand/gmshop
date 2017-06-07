<?php

class Login_View extends View_Controller {
    
    public function process(\App_Request $request) {
        $viewer = $this->getViewer();
        $viewer->view("Login");
    }

}