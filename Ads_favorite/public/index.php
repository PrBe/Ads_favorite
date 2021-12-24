<?php

if (!isset($_SERVER['PATH_INFO'])) {
    $path='';
}

if (isset($_SERVER['PATH_INFO'])) {
    $path=$_SERVER['PATH_INFO'];
}

if ($path==''){
    include __DIR__.'/../src/controllers/homeController.php';
    index();

}

else if ($path=='/pageAnnonce'){
    include __DIR__.'/../src/controllers/annonceController.php';
    index();
}

else if ($path=='/formAnnonce'){
    include __DIR__.'/../src/controllers/formAnnonceController.php';
    index();
}

else if ($path=='formAnnonce/add'){
     save();
}

else if ($path=='/favorite'){
    include __DIR__.'/../src/controllers/favoriteAnnonce.php';
    index();
}

