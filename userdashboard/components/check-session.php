<?php
set_include_path("./");
session_start();
if(!isset($_SESSION['username']))
{
    echo "<script>alert('welcome')</script>";
    echo("<script>window.location = '../';</script>");
}