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
 `~$ docker-compose build && docker-compose up -d`
 
 wait...wait...wait...and Voila!
  
     Creating mysql ... done
     Creating app   ... done
     Creating nginx ... done
 
Now our Docker services (nginx,mysql,php) are running locally, let's check the status and running port by typing
`~$ docker ps`

     CONTAINER ID        IMAGE                 COMMAND                  CREATED             STATUS              PORTS                    NAMES
     804962a15939        nginx:stable-alpine   "nginx -g 'daemon of…"   20 seconds ago      Up 17 seconds       0.0.0.0:8080->80/tcp     nginx
     bb4259587954        sportradar_php        "docker-php-entrypoi…"   27 seconds ago      Up 23 seconds       0.0.0.0:9000->9000/tcp   app
     fd1bf423101d        sportradar_mysql      "docker-entrypoint.s…"   30 seconds ago      Up 1 second         0.0.0.0:8306->3306/tcp   mysql
                            mysql

 

