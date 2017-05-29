@echo off
:loop
color 7 
cls
echo welcome to my site opener
echo. 
echo Type in a url below 
echo------------------------------------------
set  /p sitename= 

start %sitename%
pause 
goto loop
