<?php

class Edit_View extends View_Controller {
    
    public function process(\App_Request $request) {
        $mode = $request->get("mode", "Movies");
        $viewer = $this->getViewer();
        $mode = $request->get("mode");
        $fields = array("name" => "Movie Name", "year" => "Year", "director" => "Director", "rating" => "Rating", "movie_id" => "Movie Identifier", "store_id" => "Store Identifier");
        if($mode == "Games") {
            $fields = array("title" => "Title", "publisher" => "Publisher", "year" => "Year", "rating" => "Rating", "platform" => "Platform", "game_id" => "Game Id", "store_id" => "Store Id");
        }
        $viewer->assign("MODE", $mode);
        $viewer->assign("FIELDS", $fields);
        $viewer->view("Edit");
    }

}