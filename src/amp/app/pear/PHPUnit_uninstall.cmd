@ECHO OFF

ECHO Press enter to remove PHPUnit for PHP
PAUSE

cmd /C pear update-channels
cmd /C pear upgrade
cmd /C pear channel-discover pear.phpunit.de
cmd /C pear channel-discover pear.symfony-project.com
cmd /C pear clear-cache
cmd /C pear uninstall phpunit/PHPUnit

ECHO Uninstallation complete
PAUSE