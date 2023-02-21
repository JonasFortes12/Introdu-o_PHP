<?php

//Show all errors that perhaps happen (NOTICES etc..)
error_reporting(E_ALL);

//Standard value is '1'. Show the errors immediately. If value 0, don´t show it.
ini_set('display_errors', 1);

//If didn´t show the errors immediately, save on file log e define de path to the file.
ini_set('log_errors', 1);
ini_set('error_log', '"path to the saved file with the errors log"');

