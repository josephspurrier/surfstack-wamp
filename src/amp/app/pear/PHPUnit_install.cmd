@ECHO OFF

ECHO Press enter to install PHPUnit for PHP
PAUSE

cmd /C pear update-channels
cmd /C pear upgrade
cmd /C pear channel-discover pear.phpunit.de
cmd /C pear channel-discover pear.symfony.com
cmd /C pear clear-cache
cmd /C pear install --alldeps phpunit/PHPUnit

ECHO Installation complete
PAUSE