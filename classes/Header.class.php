<?php

class Header extends Entity{
    public static $tableName = 'header';
    public static $keyColumn = 'header_id';
    public function render() {
        echo '<div id="logo"><a href="' . $this->header_href .'"><img src="/images/'. $this->header_img .'" width="250px" height="40px" alt="'. $this->header_alt .'" title="'. $this->header_title .'"></a></div><div id="slogan"><p>'. $this->header_slogan .'<br><span id="number"><a href="tel:".$this->header_tel\"">'.$this->header_tel .'</span></p></div>';
    }
}