<?php

class Header extends Entity{
    public static $tableName = 'header';
    public static $keyColumn = 'header_id';
    public function render() {
        echo '<div id="logo"><a href="' . $this->header_href .'"><img src="/images/'. $this->header_img .'" alt="'. $this->header_alt .'" title="'. $this->header_title .'"></a></div>';
        echo    '<div id="slogan"><p>'. $this->header_paragraph .'<br><span id="number"><a href="tel:+38763734327" title="'. $this->header_tel_title .'">'. $this->header_tel ."</a></span></p></div>";
    }
}