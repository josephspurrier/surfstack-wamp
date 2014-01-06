@ECHO OFF

ECHO Press enter to remove phpDocumentor for PHP
PAUSE

cmd /C pear update-channels
cmd /C pear upgrade
cmd /C pear channel-discover pear.phpdoc.org
cmd /C pear clear-cache
cmd /C pear uninstall phpdoc/phpDocumentor-alpha

ECHO Uninstallation complete
PAUSE