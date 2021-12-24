<?php

include_once __DIR__."/../../vendor/SimpleOrm.class.php";

class annonce extends SimpleOrm {
    public $id;
    public $Title;
    public $content;
}