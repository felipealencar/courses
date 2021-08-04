FROM gitpod/workspace-mysql

USER root
# Setup Heroku CLI
RUN curl https://cli-assets.heroku.com/install.sh | sh

# Setup MongoDB
RUN apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 9DA31620334BD75D9DCB49F368818C72E52529D4
RUN echo "deb http://repo.mongodb.org/apt/ubuntu bionic/mongodb-org/4.0 multiverse" | tee /etc/apt/sources.list.d/mongodb-org-4.0.list
RUN apt-get update -y
RUN touch /etc/init.d/mongod
RUN apt-get -y install mongodb-org mongodb-org-server -y
RUN apt-get update -y
RUN apt-get -y install links

ENV APP_PASS=""
ENV ROOT_PASS=""
ENV APP_DB_PASS=""

RUN echo "phpmyadmin phpmyadmin/dbconfig-install boolean true" | debconf-set-selections
RUN echo "phpmyadmin phpmyadmin/app-password-confirm password $APP_PASS" | debconf-set-selections
RUN echo "phpmyadmin phpmyadmin/mysql/admin-pass password $ROOT_PASS" | debconf-set-selections
RUN echo "phpmyadmin phpmyadmin/mysql/app-pass password $APP_DB_PASS" | debconf-set-selections
RUN echo "phpmyadmin phpmyadmin/mysql/admin-user string root"| debconf-set-selections 
RUN echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2" | debconf-set-selections

#PHPMYADMIN
RUN sudo apt-get update && \
    sudo env="DEBIAN_FRONTEND=noninteractive" apt-get install -y phpmyadmin && \
    sudo rm -rf /var/lib/apt/lists/*

RUN sudo dpkg-reconfigure --frontend=noninteractive phpmyadmin

USER gitpod
# Local environment variables
# C9USER is temporary to allow the MySQL Gist to run
ENV C9_USER="gitpod"
ENV PORT="8080"
ENV IP="0.0.0.0"
ENV C9_HOSTNAME="localhost"


USER root
# Switch back to root to allow IDE to load
