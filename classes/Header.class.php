<?php

class Header extends Entity{
    public static $tableName = 'header';
    public static $keyColumn = 'header_id';
    // Remove Warning Deprecated
    public $header_id;
    public $header_href;
    public $header_img;
    public $header_alt;
    public $header_title;
    public $header_slogan;

    public function render() {
        echo '<div id="logo"><a href="' . $this->header_href .'"><img src="/images/'. $this->header_img .'" width="250" height="40" alt="'. $this->header_alt .'" title="'. $this->header_title .'"></a></div><div id="slogan"><p>'. $this->header_slogan .'<br><span id="number">DIREKTNO</span></p></div>';
    }
}