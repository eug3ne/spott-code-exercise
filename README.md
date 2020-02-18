#Welcome to my Code Exercise
 This week will be excited by writing and pushing new code in this repo... :-)
 
 ## Docket Environment Install
 A pretty simplified docker-compose workflow that sets up a LEMP network of containers for local Laravel development. You can view the full article that inspired this repo here.
 
 ## Laravel installation
 To get started, make sure you have Docker installed on your system, and then clone this repository. Add your entire Laravel project to the src folder, then open a terminal and from this cloned respository's root run docker-compose build && docker-compose up -d.
 
 Open up your browser of choice to http://localhost:8080 and you should see your Laravel app running as intended.
 
 Containers created and their ports are as follows:
 
     nginx - :8080
     mysql - :8306
     php - :9000


