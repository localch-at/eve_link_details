<?php

class zkillboard implements fansite {
    

    // this is called to summarise the zkillboard url and returns the markdown ready to post
    public static function summarise($url) {
        // todo: all the shit that is state dependent on the URL breakdown
        $comment = reddit::hideCode(); // need to research into if possible (hoping spl_autoload puts in call stack accessible to this class)
        
        return "";
    }
}