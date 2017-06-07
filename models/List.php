<?php

class List_Model extends Base_Model {

    protected $mode;
    protected $tableName;
    protected $listHeaders;

    public function __construct($mode = "Movies") {
        $this->mode = $mode;
        $this->tableName = "movie";
        $this->listHeaders =  array("movie_id", "name", "year", "rating", "director");
        if ($this->mode == "Games") {
            $this->tableName = "video_game";
            $this->listHeaders =  array("game_id", "title", "publisher", "year", "rating", "platform");
        }
    }

    public static function getInstanceByMode($mode) {
        return new self($mode);
    }
    
    public function getListHeaders() {
        return $this->listHeaders;
    }

    public function getAllRecords($searchKey) {
        $db = Database_Connector::getConnection();
        $sql = "select " . rtrim(implode(", ", $this->listHeaders), ",") . " from " . $this->tableName;
        if($searchKey) {
            $sql .= " where " . $this->listHeaders[1] . " like '%". $searchKey ."%'"; 
        }
        $result = $db->query($sql, array());
        return $db->fetch($result);
    }

}
