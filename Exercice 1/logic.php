<?php

require 'Reader.class.php';

$reader = new Reader("mail", "motdepasse");

$reader->addBookToFavorites("mon Livre");
var_dump($reader->addBookToFavorites("La Jungle"));

var_dump($reader->removeBookFromFavorites('mon Livre'));

var_dump($reader->login());
