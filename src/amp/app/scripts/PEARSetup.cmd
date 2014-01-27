@ECHO OFF

SET PHPDIRTS=C:\Users\Coil\Desktop\Now\SurfStack_WAMP_v1.0.5\amp\app\phpts
SET PHPDIRNTS=C:\Users\Coil\Desktop\Now\SurfStack_WAMP_v1.0.5\amp\app\phpnts

ECHO Installing PEAR for PHP TS:
CD "%PHPDIRTS%"
IF EXIST go-pear.phar (
ECHO File already exists.
PAUSE
EXIT
)
php -r "file_put_contents('go-pear.phar', file_get_contents('http://pear.php.net/go-pear.phar'));"

REM MKDIR ..\PEAR
REM CD ..\PEAR

"%PHPDIRTS%/php" "%PHPDIRTS%/go-pear.phar"

ECHO.
ECHO Installation complete
PAUSE