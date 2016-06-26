# eagle

## Installation

### Mac OS X / Windows
- install toolbox: [https://www.docker.com/products/docker-toolbox]
- at the end of process you will get IP of your virtual machine, like this: `docker is configured to use the default machine with IP 192.168.99.100`
- set this IP in /etc/hosts for domain `eagle.wkda.dev`
- `docker-compose build`
- `docker-compose up -d`

### Linux
- For linux: install Docker [https://docs.docker.com/], Docker-compose [https://docs.docker.com/compose/install/]
- `docker-compose build`
- `docker-compose up -d`
- `docker ps`
- find `CONTAINER ID` for `web` container
- `docker inspect your_CONTAINER_ID`
- find an IP address in shown data. It is placed closer to the end in key `IPAddress`
- set this IP in /etc/hosts for domain `eagle.wkda.dev`
- ...
- PROFIT!!!