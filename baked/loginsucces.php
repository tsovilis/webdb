<?php
session_start();
if(!session_is_registered(emailadres)){
header("location:accountBaked.html");
}
?>