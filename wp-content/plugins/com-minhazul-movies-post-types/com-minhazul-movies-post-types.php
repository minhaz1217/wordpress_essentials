<?php

/*
Plugin Name: Movies post types
Plugin URI: minhazul.com
Description: A simple plugin to learn about custom post types
Author: Minhazul Hayat Khan
Version: 1.0.0
Author URI: minhazul.com
*/


class MHK_Movies_Post_Type{
    public function __construct(){
        $this->register_post_type();
    }

    public function register_post_type(){
        
        $args = array(
            'labels' => array(
                'name' => 'Movies',
                'singular_name' => 'Movie',
                'add_new' => 'Add New Movie',
                'add_new_item' => "Add new Movie Item",
                "edit_item" => "Edit Movie Item",
                "new_item" => "Add new Item",
                "view_item" => "View Movie",
                "search_items" => "Serach Movies",
                "not_found" => "No movies found",
                "not_found_in_trash" => "No movies found in trash"
            ),
            "query_var" => "movies",
            "rewrite"=> array(
                "slug" => "movies/",
            ),
            "public" => true,
            // "menu_position" => 25,
            "menu_icon" => admin_url() ."images/media-button-video.gif",
        );
        register_post_type(
            'mhk_movie',
            $args
        );
    }
}
add_action('init', function(){
    new MHK_Movies_Post_Type();
});