<?php
function send_alert($msg)
{
    echo "<script>alert('$msg')</script>";
}
function change_window($path)
{
    echo "<script>window.location = '$path';</script>";
}