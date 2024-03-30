<?php
session_start();

define("root", $_SERVER['DOCUMENT_ROOT']); //корень

if(isset($_SESSION['uid']) AND empty($_SESSION['uid']))
{
    unset($_SESSION['uid']);
}

//в случае, если язык не установлен - устанавливаем русский язык
if(!isset($_SESSION['lang']) OR !empty($_SESSION['lang']))
{
    $_SESSION['lang'] = "ru";
}