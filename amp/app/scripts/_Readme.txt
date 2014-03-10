The .script files in this folder are converted to .cmd files (batch scripts)
before every run. If you want to make changes, make the changes to the .script
files.

The .script files use variables which are surrounded by number signs (#) which
are replaced by absolute paths.

The following variables are available for use so you don't have to hard code
folder paths:

#APACHEBINDIR#		\amp\app\apache\bin
#APPDIR#		\amp\app
#CONFDIR#		\amp\config
#LOCALHOSTDIR#		\webroot\localhost
