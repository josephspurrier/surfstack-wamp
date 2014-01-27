@ECHO OFF

SET PHPDIRTS=C:\Users\Coil\Desktop\Now\SurfStack_WAMP_v1.0.5\amp\app\phpts
SET PHPDIRNTS=C:\Users\Coil\Desktop\Now\SurfStack_WAMP_v1.0.5\amp\app\phpnts

ECHO Installing phpDocumentor for PHP TS:
CD "%PHPDIRTS%"
IF EXIST phpDocumentor.phar (
ECHO File already exists.
PAUSE
EXIT
)
php -r "file_put_contents('phpDocumentor.phar', file_get_contents('http://phpdoc.org/phpDocumentor.phar'));

ECHO.
ECHO Installation complete
PAUSE