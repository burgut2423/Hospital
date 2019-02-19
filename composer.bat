@echo OFF
:: in case DelayedExpansion is on and a path contains ! 
setlocal DISABLEDELAYEDEXPANSION
C:\xampp\php\php.exe "%~dp0composer.phar" %*
