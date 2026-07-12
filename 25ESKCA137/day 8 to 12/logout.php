<?php
//logout.php
session_start();
//step1:clear all session data
$_Session=array();
session