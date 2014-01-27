@ECHO OFF

REM SET WEBDIR=C:\Users\Coil\Desktop\Now\Scribblev1.0.4\webroot\localhost\public
REM SET PHPDIR=C:\Users\Coil\Desktop\Now\Scribblev1.0.4\amp\app\phpts
SET WEBDIR=C:\Users\Coil\Desktop\Now\SurfStack_WAMP_v1.0.5\webroot\localhost\public
SET PHPDIRTS=C:\Users\Coil\Desktop\Now\SurfStack_WAMP_v1.0.5\amp\app\phpts
SET PHPDIRNTS=C:\Users\Coil\Desktop\Now\SurfStack_WAMP_v1.0.5\amp\app\phpnts

CD "%WEBDIR%"

IF EXIST "%WEBDIR%\composer.lock" ( DEL "%WEBDIR%\composer.lock" /F /Q )

"%PHPDIRTS%\php.exe" "%PHPDIRTS%\composer.phar" install --no-dev --prefer-dist
REM "%PHPDIRNTS%\php.exe" "%PHPDIRNTS%\composer.phar" install --no-dev --prefer-dist

ECHO.
ECHO Done

PAUSE