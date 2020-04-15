# docker-wmdsed4

Docker Files for Quick testing of Watch My Domains SED v4 on Desktop.

Use this to quickly spin up a test container for Watch My Domains SED v4 on your Windows or Mac Desktop.

## Watch My Domains SED

Watch My Domains SED is a cloud based domain name portfolio management application currently available at DomainPunch.Com. This is a set of simple docker files that will allow you to spin up a test container inyour Windows or Mac desktop.

## Prerequisites

Requires a proper working installation of Docker desktop in the system.

## Installation

Clone the project into your  desktop folder and change to the docker-wmdsed4 directory in Windows Command Line.

Edit docker-compose.yml to change the MySQL root and user passwords. You may also change the port from 8000 to whatever you want to use.

Edit wmdsed4/config.php to change the MySQL user password to the same one provided in the YML file. While there change the setup user name and password ($db_config_setup_password) too.

Change to the docker-wmdsed4 directory and run

docker-compose build

followed by

docker-compose up -d

wait for the containers to spin up and then open

http://localhost:8000

in your browser. There will be a short delay before the application starts up for the first time. Use the setup user name and password you specified in the config.php file to login.

## Limitations

This is purely for a quick test, don't use in a production environment unless you really know what you are doing and physical or remote access to your system is limited.

The application will be run without SSL.  You can modify the docker file to include SSL support and access the application over SSL.

## Problems

Contact us from

https://codepunch.com/icenter/contact.php

