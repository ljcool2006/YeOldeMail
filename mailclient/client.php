<?php
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
	require "mjs.js";
	break;
	default:
	require "inbox.php";
	break;
}