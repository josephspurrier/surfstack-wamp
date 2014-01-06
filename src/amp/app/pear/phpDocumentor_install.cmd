@ECHO OFF

ECHO Press enter to install phpDocumentor for PHP
PAUSE

cmd /C pear update-channels
cmd /C pear upgrade
cmd /C pear channel-discover pear.phpdoc.org
cmd /C pear clear-cache
cmd /C pear install phpdoc/phpDocumentor-alpha

ECHO Installation complete
PAUSE