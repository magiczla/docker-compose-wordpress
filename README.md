# docker-compose-wordpress

A simplified yet refined Docker Compose workflow that sets up a LEMP network of containers for local WordPress development. If you'd like more interactive info, there's a [video tutorial](https://www.youtube.com/watch?v=kIqWxjDj4IU) that walk you through setup and usage of this environment.

## Usage

To get started, make sure you have [Docker installed](https://docs.docker.com/docker-for-mac/install/) on your system, and then clone this repository.

Next, navigate in your terminal to the directory you cloned this, and spin up the containers for the web server by running `docker-compose up -d --build site`.

After that completes, follow the steps from the [src/README.md](src/README.md) file to get your WordPress installation added in (or create a new blank one).

Bringing up the Docker Compose network with `site` instead of just using `up`, ensures that only our site's containers are brought up at the start, instead of all of the command containers as well. The following are built for our web server, with their exposed ports detailed:

- **nginx** - `:80`
- **mysql** - `:3306`
- **php** - `:9000`

An additional container is included that lets you use the wp-cli app without having to install it on your local machine. Use the following command examples from your project root, modifying them to fit your particular use case.

- `docker-compose run --rm wp user list`

## Persistent MySQL Storage

By default, whenever you bring down the Docker network, your MySQL data will be removed after the containers are destroyed. If you would like to have persistent data that remains after bringing containers down and back up, do the following:

1. Create a `mysql` folder in the project root, alongside the `nginx` and `src` folders.
2. Under the mysql service in your `docker-compose.yml` file, add the following lines:

```
volumes:
  - ./mysql:/var/lib/mysql
```

## log into server

ssh -i tuweii.wordpress.key.pem ubuntu@tuweii.com
cd /srv/data/work/docker-compose-wordpress

sudo mount /dev/xvdb ./data

sudo vi /lib/systemd/system/docker.service
ExecStart=/usr/bin/dockerd -H fd:// --containerd=/run/containerd/containerd.sock -g /srv/data/docker
sudo systemctl daemon-reload
sudo systemctl restart docker
ps -ef | grep docker

sudo docker-compose build
sudo docker-compose stop
sudo docker-compose start

## scripts to login nginx

```
sudo docker exec -it nginx /bin/sh
certbot --authenticator standalone --installer nginx -d tuweii.com

https://www.kthksgy.com/linux/alpine-certbot/
apk update && apk add certbot
apk add python3 python3-dev py3-pip build-base libressl-dev musl-dev libffi-dev rust cargo
pip install certbot-nginx
certbot --nginx

cert renew: https://certbot.org/renewal-setup
SLEEPTIME=$(awk 'BEGIN{srand(); print int(rand()*(3600+1))}'); echo "0 0,12 * * * root sleep $SLEEPTIME && certbot renew -q" | tee -a /etc/crontab > /dev/null

```

/ # certbot --nginx
Saving debug log to /var/log/letsencrypt/letsencrypt.log
Enter email address (used for urgent renewal and security notices)
(Enter 'c' to cancel): magiczla@gmail.com

---

Please read the Terms of Service at
https://letsencrypt.org/documents/LE-SA-v1.2-November-15-2017.pdf. You must
agree in order to register with the ACME server. Do you agree?

---

(Y)es/(N)o: Y

---

Would you be willing, once your first certificate is successfully issued, to
share your email address with the Electronic Frontier Foundation, a founding
partner of the Let's Encrypt project and the non-profit organization that
develops Certbot? We'd like to send you email about our work encrypting the web,
EFF news, campaigns, and ways to support digital freedom.

---

(Y)es/(N)o: Y
Account registered.

Which names would you like to activate HTTPS for?

---

1: tuweii.com

---

Select the appropriate numbers separated by commas and/or spaces, or leave input
blank to select all options shown (Enter 'c' to cancel):
Requesting a certificate for tuweii.com

Successfully received certificate.
Certificate is saved at: /etc/letsencrypt/live/tuweii.com/fullchain.pem
Key is saved at: /etc/letsencrypt/live/tuweii.com/privkey.pem
This certificate expires on 2022-09-22.
These files will be updated when the certificate renews.

Deploying certificate
Successfully deployed certificate for tuweii.com to /etc/nginx/conf.d/default.conf
Congratulations! You have successfully enabled HTTPS on https://tuweii.com

NEXT STEPS:

- The certificate will need to be renewed before it expires. Certbot can automatically renew the certificate in the background, but you may need to take steps to enable that functionality. See https://certbot.org/renewal-setup for instructions.

---

If you like Certbot, please consider supporting our work by:

- Donating to ISRG / Let's Encrypt: https://letsencrypt.org/donate
- Donating to EFF: https://eff.org/donate-le

---
