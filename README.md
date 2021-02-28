# docker-nginx-php-mysql

For testing purposes only. Use at your own risk

## Usage

* Bring up with `./run.sh`
* Database will init with the the db/docker-entrypoint-initdb.d/*
* Recreate by `sudo rm -rf db/data/*`

Based on ubuntu 18:04, because that's what I was trying to replicate at the time.

Bring up mysql admin with: 
`docker run --name myadmin -d --network docker-nginx-php-mysql_your-site-net --link db:db -p 8080:80 phpmyadmin`

* Your network name can be found with `docker network ls`