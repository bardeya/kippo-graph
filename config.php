﻿<?php
#Package: Kippo-Graph
#Version: 0.7
#Author: ikoniaris
#Website: bruteforce.gr/kippo-graph

#You will have to change the following four definitions 
#from the default values to the correct ones, according
#to your MySQL server instance. When you installed Kippo
#and configured MySQL logging, you should have created 
#a new MySQL server user just for this job.
define('DB_HOST', 'localhost');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'database');

#The following value determines whether Kippo-Graph would
#automatically check if a newer version is available for download.
#You can inspect the function at include/misc/versionCheck.php.
#It works by comparing the latest version number that resides 
#in a text file uploaded on Kippo-Graph's website against the 
#'VERSION' definition inside versionCheck.php. If the local
#number is lower than the online/remote one, you get the message.
#While in theory you can trust the remote website, I realise that
#you might think this procedure poses a risk to the privacy of 
#your honeypot's IP address, because it is being transmitted and 
#logged while retrieving the remote text file. For this reason,
#the following value ensures that having the update checking 
#feature enabled is your choice and not forced.
#Change NO to YES if you want to enable it.
define('UPDATE_CHECK', 'NO');
?>