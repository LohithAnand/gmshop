<?php
/**
 * Author: Lohith
 */
class Login_Action extends Action_Controller {

    function process(App_Request $request) {
        $db = Database_Connector::getConnection();
        $result = $db->query("select * from employee where ssn = ?", array($request->get("id")));
        if($result && $result = $db->fetch($result)) {
            if($result[0][0] == $request->get("id")) {
                //login success
                App_Session::start();
                App_Session::set("login_type", "employee");
                App_Session::set("id", $result[0][0]);
                App_Session::set("user_name", $result[0]['name']);
            }
        } else {
            $result = $db->query("select * from customer where customer_id = ?", array($request->get("id")));
            if($result && $result = $db->fetch($result)) {
                if($result[0][0] == $request->get("id")) {
                    //login success
                    App_Session::start();
                    App_Session::set("login_type", "customer");
                    App_Session::set("id", $result[0][0]);
                    App_Session::set("user_name", $result[0]['name']);
                }
            }
        }
        header('Location: ?view=List');
    }

}
