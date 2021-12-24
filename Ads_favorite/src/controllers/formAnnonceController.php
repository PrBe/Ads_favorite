<?php

function index(){
    include __DIR__.'/../../templates/formAnnonce/index.php';
}

function save(){

    $Title=$_POST['Title'];
    $content=$_POST['content']; 

    include __DIR__.'/../Entity/Annonce.php';
    $annonce=new annonce();
    $annonce->Title=$Title;
    $annonce->content=$content;

    $annonce->save();
}