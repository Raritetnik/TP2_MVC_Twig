<?php

class ControllerHome{

    public function index(){
      twig::render('home/home-index.php');
    }

    public function error(){
      twig::render('?url=error');
    }
}