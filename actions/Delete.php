<?php
/**
 * Author: Lohith
 */
class Delete_Action extends Action_Controller {

    function process(App_Request $request) {
        $tableName = 'movie';
        $fieldName = 'movie_id';
        if($request->get("mode") == "Games") {
            $tableName = 'video_game';
            $fieldName = 'game_id';
        }
        $db = Database_Connector::getConnection();
        $db->query("delete from " . $tableName . " where " . $fieldName . " = ?", array($request->get("id")));
        $response = new App_Response();
        $response->setResult(array('status'=>'success'));
        $response->emit();
    }

}
