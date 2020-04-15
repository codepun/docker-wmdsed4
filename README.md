# docker-wmdsed4

Docker Files for Quick Testing of Watch My Domains SED v4 on Desktop.

Use this to quickly spin up a test container for Watch My Domains SED v4 on your Windows or Mac Desktop.

## Watch My Domains SED

Watch My Domains SED is a cloud based domain name portfolio management application currently available at DomainPunch.Com. This is a set of simple docker files that will allow you to spin up a test container in your Windows or Mac desktop.

This doesn't include any of the application files. The evaluation version of Watch My Domains SED is downloaded from domainpunch.com when you build the container.

## Prerequisites

Requires a proper working installation of Docker desktop in the system.

## Installation

Clone the project into a convenient folder.

Edit docker-compose.yml to change the MySQL root and user passwords. You may also change the port from 8000 to whatever you want to use.

Edit wmdsed4/config.php to change the MySQL user password to the same one you setup in the YML file. While there, change the setup user name and password ($db_config_setup_name, $db_config_setup_password) too.

Open a terminal or Windows command-line and change to the docker-wmdsed4 directory. Now run

docker-compose build

followed by

docker-compose up -d

wait for the containers to spin up and then open

http://localhost:8000

in your browser. There will be a short delay before the Watch My Domains application starts up for the first time. Use the setup username and password you specified in the config.php file to login.

## Notes

This is purely for a quick test of Watch My Domains SED, don't use in a production environment unless:

1. Physical or remote access to your system is restricted AND                   
2. You really know what you are doing

The application will be run without SSL.  You can modify the docker file to include SSL support and access the application over SSL.

The database files are stored in a host folder (wmdsed4/mysql), so you can safely stop the containers without losing data.

## Problems

Contact us from

https://codepunch.com/icenter/contact.php

