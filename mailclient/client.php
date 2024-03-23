<?php
switch ($_GET['v']) {
	case "tz":
	require "tz.php";
	break;
	case "ss":
	header('Content-Type: text/css');
	require "ss.css";
	break;
	case "mjs":
	header('Content-Type: text/javascript');
	require "mjs.js";
	break;
	default:
	require "inbox.php";
	break;
}