<?php
###############################################################################
# config-sample.php
#
# @author Anil Kumar <akumar@codepunch.com>
# @link   https://codepunch.com
#
# Installation instructions are available at
#
# https://domainpunch.com/sed/guidev4/install/
#
###############################################################################

# Specify your DB settings

$db_config_database 		= 'wmdsed';
$db_config_username 		= 'wmdsed';
$db_config_password 		= 'mspivs314opwYnq';
$db_config_host     		= 'wmdsed_db';

###############################################################################
# Choose from pdo_mysql, mysqli (MySQL), oci8 (oracle), pdo_sqlsrv (MS SQL), 
# pdo_pgsql (PostgreSQL) or pdo_sqlite (SQLite 3). 
# Ensure that the required PHP extensions are installed.
# If you are using SQLite, provide only the database name as an an absolute 
# file path (eg.: /home/softnik/db/db.sqlite). The database will be created 
# on first run. The containing folder should have proper access rights.

$db_config_driver   		= 'pdo_mysql';

###############################################################################
# The default user who can configure the system for the first time. You have
# to specify a valid username and password here to get started. You can delete
# this user after you have created at least one administrative user using the 
# interface. The password should have minimum 8 letters. The default password
# shown here is only a placeholder and will not work.

$db_config_setup_name		= "setup";
$db_config_setup_password	= "mysecret";

###############################################################################
# Specify a common prefix for all the database tables that will be created. 
# Please avoid using a blank prefix entry. It is better to just leave this 
# entry as it is ("wmdsed_"). You can use a different prefix if you are 
# using the same database for multiple installations.

$db_config_table_prefix		= "wmdsed_";

###############################################################################
# Specify a log folder path. For example, "/home/wmdsed/logs"
# If this is left blank the logs folder at the application root will be used. 
# If you specify a folder here, please make sure that it is writable from both 
# Apache (Web Server) and PHP command line. You will have to use extra commands 
# to write enable this folder for Apache if you are installing under SELinux.

$cfg_log_folder_path		= "/path/to/logs/";

###############################################################################
# A unique name for this installation. Do not change this if you are setting 
# up a single server installation. This should be set to blank ("") on 
# secondary installations in a multi-server setup with a central database
# Only professional edition supports multi server setup.

$this_server_id				= "master";

###############################################################################
# This key is unique to each installation and is set by the download script.
# The key is used to encrypt some of the important settings before saving
# to DB. This encryption is purely to protect sensitive information like   
# passwords and API keys should a database dump be made public.
# If you change this key, the existing settings will have to be re-applied
# It would be a good idea to change the key if you didn't use the download 
# script to obtain the application.
# Use something like 
# base64_encode(openssl_random_pseudo_bytes(64)); 
# to get a random string.

$db_config_publickey		= 'hJ9BcUi1WBQR+RKU6s+G44ETKuy5hKjyNFYz1atshXrYL9IdleZqnLJL6Mc8TXQ+y46TFwVGfqNo/ft3Q5sAvA==';

