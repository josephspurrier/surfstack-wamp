@ECHO OFF

SET PHPDIRTS=C:\Users\Coil\Desktop\Now\SurfStack_WAMP_v1.0.5\amp\app\phpts
SET PHPDIRNTS=C:\Users\Coil\Desktop\Now\SurfStack_WAMP_v1.0.5\amp\app\phpnts

ECHO Installing PHPUnit for PHP TS:
CD "%PHPDIRTS%"
IF EXIST phpunit.phar (
ECHO File already exists.
PAUSE
EXIT
)
php -r "file_put_contents('phpunit.phar', file_get_contents('https://phar.phpunit.de/phpunit.phar'));"
php phpunit.phar --version

ECHO.
ECHO Installation complete
PAUSE