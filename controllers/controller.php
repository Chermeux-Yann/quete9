<?php
require ('models/model.php');

function listChampion(){
    require 'view/readViewChampion.php';
}
function listPokemon(){
    require 'view/readViewPokemon.php';
}

function home(){
    require 'view/indexView.php';
}

function addChampion(){
    require 'view/createViewChamp.php';
}
function addPokemon(){
    require 'view/createViewPoke.php';
}

function readChampion2(){
    require 'view/getReadChamp.php';
}
function readPokemon2(){
    require 'view/getReadPoke.php';
}

function updateChampion2(){
    require 'view/updateViewChamp.php';
}
function updatePokemon2(){
    require 'view/updateViewPoke.php';
}
