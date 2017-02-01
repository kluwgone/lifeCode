<?php
// Connects to Our Database
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("teacher") or die(mysql_error());
