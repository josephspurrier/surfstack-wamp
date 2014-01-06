SurfStack WAMP
==============
SurfStack WAMP allows HTML websites and PHP applications to run on a Windows
computer. SurfStack WAMP is a package of open source software that includes:
- Apache (Web Server)
- Nginx (Web Server)
- MySQL (Database)
- MongoDB (Database)
- PHP (Web Language)
- Memcached (object caching system)

No installation required. Just extract and run SSWamp.exe.

The latest release is [v1.0.4](bin/SurfStack_WAMP_v1.0.4.zip).

Instructions
------------
1. Extract the contents to any folder
2. Run SSWamp.exe
3. Place a check next to each server you want to start
4. Click Turn On Server(s)
5. Test the configuration by clicking Browse Main Page

Popular Application Testing (Drupal, WordPress, SQL Buddy, phpMyAdmin, etc.)
----------------------------------------------------------------------------
1. Download the files from Drupal or WordPress
2. Delete the file: \webroot\localhost\public\index.php
3. Extract the Drupal or WordPress files to the \webroot\localhost\public directory
4. Run SSWamp.exe
5. Place a check next to the Apache and MySQL options
6. Click Turn On Server(s)
7. Test the configuration by clicking Browse Main Page

Default MySQL Database Settings
-------------------------------
- Database Name: test
- Username: root
- Password: (blank)

Folders
-------
- \amp\app: contains binaries for applications
- \amp\config: contains custom configurations for the applications
- \amp\doc: contains CHANGELOG, LICENSE, README
- \amp\src: contains C# source code for SSWamp.exe
- \webroot\localhost\public: default location for all web files 

Included Software
-----------------
- Adminer
- Apache
- AWK
- Memcached
- MongoDB
- MySQL
- Nginx
- PEAR
- PHP
- SSWamp.exe

Notes
-----
- MySQL binaries are unmodified, but exclude files to make the distribution smaller
- Nginx binaries are unmodified
- PHP binaries are unmodified, but exclude files to make the distribution smaller
- Apache binaries are unmodified, but exclude files to make the distribution smaller

Compatibility
-------------
- The \amp\app folder holds official binaries so the contents of each folder
can be replaced with binaries downloaded from original vendor (manually
configuration may need to take place after replacing the files)
- The \amp\config folder holds custom configurations for the applications
- Each configuration has variables which are replaced by values provided by
SSWamp.exe
- Any changes made to the configurations will apply the next time MySQL, Nginx,
PHP, Apache are started

Technical Notes
---------------
- Nginx uses a highly dynamic configuration which supports multiple websites

Website Simulation
------------------
To simulate a domain like www.example.com, add the domain name to your system hosts file to view it locally:

1. Copy C:\windows\system32\drivers\etc\hosts to your desktop
2. Open the hosts file in Notepad
3. Add the following lines to the bottom of the hosts file:
4. 127.0.0.1  example.com
5. 127.0.0.1  www.example.com
6. Save the modified hosts file
7. Copy the modified hosts file back to: C:\windows\system32\drivers\etc\hosts
8. Close your web browser if open
9. Run SSWamp.exe
10. Place a check next to the Apache option
11. Click Turn On Server(s)
12. Test the configuration by opening your web browser to: http://example.com

Quick Solutions
---------------
- Unblock all files on Windows Vista or Windows 7 if prompted
- Allow Apache, Nginx, MySQL, MongoDB, Memcached, and SSWamp.exe through the
firewall if prompted