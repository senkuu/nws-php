<?php

$page = isset($_GET['page']) ? $_GET['page'] : "accueil";

$page = './includes/' . $page . '.hentai.php';

$fichier = glob('./includes/*.hentai.php') ?? array();

if (in_array($page, $fichier)) {
    include $page;
} else {
    include './includes/accueil.hentai.php';
}
