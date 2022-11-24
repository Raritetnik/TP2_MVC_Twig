<?php
$serverName = $_SERVER['SERVER_NAME'];
$nav = "https://$serverName/TP2_MVC_Twig/?url="; ?>
<header class="menu-principale">
    <h1><a href="./">Admin Panel</a></h1>
    <nav>
        <a href="<?= $nav ?>membre">Membre</a>
        <a href="<?= $nav ?>facture">Facture</a>
        <a href="<?= $nav ?>livre">Livre</a>
        <a href="<?= $nav ?>commande">Commande</a>
    </nav>
</header>