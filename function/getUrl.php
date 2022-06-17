<?php

function getUrl()
{
    $url = explode('?', $_SERVER['REQUEST_URI']);
    return $url = $url[0];
}
