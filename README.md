# Test Assignment - Symfony Subdomains

## Assignment specifications:

https://github.com/AntonAcc/symfony_subdomains/blob/master/specifications.md

## Setup:

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `docker compose build --no-cache` to build fresh images
3. Run `docker compose up --pull --wait -d` to start the project
4. Run `sudo bash add_hosts.sh` to set up required hosts 

### Test

Open in your web browser:
- http://domain1.test.com
- http://domain2.test.com
