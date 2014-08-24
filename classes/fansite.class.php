<?php

interface fansite {

    /**
     * Abstracts should return a Reddit Markdown response. 
     * @param  string   The URL to be summarised
     * @return string   The Reddit ready markdown response
     */
    public static function summarise($url);
}

?>