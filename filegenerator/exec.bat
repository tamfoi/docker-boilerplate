@echo off

FOR /F %%i in ('docker build ./ -q') do set IMAGE_ID=%%i
FOR /F %%i in ('docker run %IMAGE_ID% hostname') do set CONTAINER_ID=%%i
docker cp %CONTAINER_ID%:/workspace ./output
docker rm %CONTAINER_ID% > nul
docker rmi %IMAGE_ID% > nul
