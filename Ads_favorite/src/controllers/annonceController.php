<?php

function index(){
    include __DIR__.'/../Entity/Annonce.php';
    $annonces = annonce::all();
    include __DIR__.'/../../templates/pageAnnonce/index.php';
}
