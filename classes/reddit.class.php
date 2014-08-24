<?php

// http://www.reddit.com/dev/api
class reddit {
    private $cookie;
    private $modhash;
    
    public function login($username, $password) {
        // todo
    }
    
    public function getNewPosts($subreddit) {
        // todo
    }
    
    public function getPost($post_id) {
        // todo
    }
    
    public function postComment($post_id) {
        // todo
    }
    
    // used to note items destroyed
    public static function strikeThrough($text) {
        return "~~" . $text . "~~";
    }
    
    // used to make the number counts on the end of the text
    public static function superBubble($text) {
        return "^((" . $text . ")^)";
    }
    
    // used for the last line
    public static function superAll($text) {
        return str_replace(" ", " ^", $text);
    }
    
    // reddit markdown link
    public static function link($url, $text) {
        return "[" . $text . "](" . $url . ")";
    }
    
    // to be attached to front of all reddit posts (unless undesired)
    public static function hideCode() {
        return "#####&#009;\n\n######&#009;\n\n####&#009;\n\n";
    }
    
    // used for each slot row (best of 1 table per row, for mobile users)
    public static function table($header, $rows = array(), $cols = 1) {
        $table = "";
        
        if (is_array($header)) {
            if (count($header) != $cols) {
                throw new Exception("Ill-formed makeTable request");
            }
            
            $row = "";
            for ($x = 0; $x < $cols; $x++) {
                $table .= $header[$x] . ($x != ($cols - 1) ? " | " : " \n");
                $row .= ($x != ($cols - 1) ? "--- | " : "--- \n");
            }
            
            $table .= $row;
        } else {
            $table .= $header . " | \n-------|-------";
        }

        if (count($rows) > 0) {
            foreach ($rows as &$row) {
                if (is_array($row)) {
                    for ($i = 0; $i < $cols; $i++) {
                        $table .= $row[$i] . ($i != ($cols - 1) ? " | " : " \n");
                    }
                } else {
                    $table .= $row . " | \n";
                }
            }
        }
        
        for ($y = 0; $y < $cols; $y++) {
            $table .= ($y != ($cols - 1) ? " | " : "\n\n");
        }

        return $table;
    }
    
    private function curl($url, $post = false, $post_data = null) {
        if ($post && !is_array($post_data)) {
            throw new Exception("Ill-formed curl POST");
        }
        
        // todo
    }
}