<?php
require_once 'core/init.php';
$p = Page::get(1);
echo $p->render();