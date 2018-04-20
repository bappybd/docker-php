# Docker PHP: Docker boilerplate for running latest PHP projects.

## Containers

    - php:7.2.2-fpm
    - mysql:latest(5.7+)
    - nginx:1.10
    - Composer

## Userfull docker command
    - docker exec -it [CONTAINER_ID] /bin/bash
    - docker exec -i my_mysql /usr/bin/mysql -u root --password=123456 my_database < dump.sql
    - docker exec -it my_mysql /usr/bin/mysql -u root --password=123456 my_database
    
    - docker inspect <CONTAINER ID> | grep -w "IPAddress" | awk '{ print $2 }' | head -n 1 | cut -d "," -f