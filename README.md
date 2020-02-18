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
     
 ## Initialize Docker on Local Machine
 Now we're ready to build and run our containers. Type this command in to start:
 ~$ docker-compose build
 ~$ docker-compose up -d
 
 wait...wait...wait...and Voila!
  
     Creating mysql ... done
     Creating app   ... done
     Creating nginx ... done
 
Now our Docker services (nginx,mysql,php) are running locally

