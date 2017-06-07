<?php
/**
 * Author: Lohith
 */
class Save_Action extends Action_Controller {

    function process(App_Request $request) {
        $mode = $request->get("mode");
        $tableName = "movie";
        $fields = array("name", "year", "director", "rating", "movie_id", "store_id");
        if($mode == "Games") {
            $tableName = "video_game";
            $fields = array("title", "publisher", "year", "rating", "platform", "game_id", "store_id");
        }
        $db = Database_Connector::getConnection();
        $questionMarks = $fieldValues = "";
        $params = array();
        foreach($fields as $field) {
            $questionMarks .= '?, ';
            $params[] = $request->get($field);
        }
        $questionMarks = rtrim($questionMarks, ", ");
        $db->query("insert into " . $tableName . " (" . rtrim(implode(", ", $fields), ", ") . ") values (". $questionMarks .")", $params); 
        header('Location: ?view=List&mode=' . $mode);
    }

}
