# LEMP for Docker
Docker running Nginx cluster with PHP and MySQL served by Traefik proxy/LB.

## Install
Run docker-compose up -d. This will boot Docker and build the containers.

## Update a Container
Run docker-compose up -d --build --no-deps \<service>

## Uninstall
Run docker-compose down will stop running containers and delete them. 
