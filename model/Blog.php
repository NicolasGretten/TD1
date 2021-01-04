<?php

$articles = array(
    0 => array(
        'id' => 1,
        'titre' => 'un article'

    ),
    1 => array(
        'id' => 2,
        'titre' => 'un deuxième article'
    ),
);

function getAll()
{
    return $GLOBALS['articles'];
}

function get($id)
{
    return $GLOBALS['articles'][$id-1];
}

function set($array)
{

}