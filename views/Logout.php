<?php
/**
 * Author: Lohith
 */
class Logout_View extends View_Controller {

    function process(App_Request $request) {
        App_Session::start();
        App_Session::end();
        header('Location: ?view=List');
    }

}
