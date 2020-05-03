# My-Docker-Project
# INTRODUCTION
I have completed my Docker Training under IIEC RISE 1.0 by Vimal Daga Sir.  This is my project where after running my docker compose file in the system, you can access the Web Pages and Database in 1-2 seconds using docker.
------------------------------------------------------------------------------------------------------------ 
# REQUIREMENTS
-	Virtualisation tool- I have used **Oracle VirtualBox 6.0**
-	Linux- I have used **RHEL8  (REDHAT ENTERPRISE LINUX VERSION 8)** 
## On top of Redhat I’ve used:
-	Docker community version : 19.03.8
-	Centos:latest
-	MySql version: 8.0.13-1
# DOING THE SETUP
## 1)	Pulling images-
Start docker services by **systemctl start docker** command. 
I have pulled images of **mysql: 8.0.13-1 ,  centos:latest and php:latest** for my project. 
## 2)	Start services-
Start the **database server** and **web server**. For web server, we configure Apache httpd server. **Start httpd services** and **stop firewalld.**
## 3)	Starting the docker-compose file-
Install docker compose and then place the compose file in the default root directory and check by **ls** command if the file is there or not. Then to run the file do – **docker-compose up –d** 
Then check by **docker ps** command that the web container and db container are running.

## version:
There are several versions of Compose file format. We have to specify the version we are using as all the keywords are not supported by every versions. Here we are using the latest version '3'.
## services:
It list outs all the services we are running in the infrastructure.
## container_name:
Gives the container any name we want.
## volumes:
Mounts the host paths or named volumes to the services, so the data inside container becomes persistent.
## ports:
Exposes the server port through a free host port, HOST:CONTAINER.
## depends_on:
Express dependencies between services eg. here web service depends on dbos service.
## environment:
Here we specify environment variables.

## 4)	Placing the web pages in the web volume storage-
Place the web pages ( that I’ve uploaded ) in the volume that is created for webos by **docker compose file**.
## 5)	Accessing the web pages-
Check your redhat’s IP by **ifconfig** command.
Access the first page- SignUp.html by your Redhat’s IP: Port no 1234
- Ex-  192.168.43.210:1234

# SCOPE OF IMPROVEMENT
-	Currently only Local Networks can access the project. I’m trying to improve the IP to a public IP.
# ACKNOWLEDGEMENT
- I would like to thank **Vimal Daga Sir** for teaching the concepts so clearly and deeply that I’ve been able to make a project on my own.

