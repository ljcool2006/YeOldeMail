<?php
if(isset($_GET['v'])){
switch ($_GET['v']) {
	case "tz":
	require "tz.php";
	break;
	case "ss":
	header('Content-Type: text/css');
	switch ($_GET['name']) {
		case "c":
		require "c.css";
		break;
		case "a":
		require "a.css";
		break;
	}
	break;
	case "mjs":
	header('Content-Type: text/javascript');
	switch ($_GET['name']) {
		case "tz":
		require "tz.js";
		break;
		case "ac":
		require "ac.js";
		break;
	}
	break;
	case "c":
	require "c.php";
	break;
	case "om":
	require "om.php";
	break;
	case "b":
	require "b.php";
	break;
	default:
	require "inbox.php";
	break;
}
} else {
require "inbox.php";
}