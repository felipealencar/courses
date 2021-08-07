FROM gitpod/workspace-full

USER root

RUN apt-get update && apt-get install -y apt-transport-https\
 && apt-get install -y php-fpm php-cli php-bz2 php-bcmath php-gmp php-imap php-shmop php-soap php-xmlrpc php-xsl php-ldap \
 && apt-get install -y php-amqp php-apcu php-imagick php-memcached php-mongodb php-oauth php-redis\
 && apt-get install -y mysql-server \
 && apt-get clean -y \
 && rm -rf /var/cache/apt/* /var/lib/apt/lists/* /tmp/* \
 && mkdir /var/run/mysqld \
 && chown -R gitpod:gitpod /etc/mysql /var/run/mysqld /var/log/mysql /var/lib/mysql /var/lib/mysql-files /var/lib/mysql-keyring /var/lib/mysql-upgrade


RUN a2enmod rewrite

RUN echo 'worker_processes auto;\n\
pid /var/run/nginx/nginx.pid;\n\
include /etc/nginx/modules-enabled/*.conf;\n\
env NGINX_DOCROOT_IN_REPO;\n\
env GITPOD_REPO_ROOT;\n\
events {\n\
	worker_connections 768;\n\
	multi_accept on;\n\
}\n\
http {\n\
	sendfile on;\n\
	tcp_nopush on;\n\
	tcp_nodelay on;\n\
	keepalive_timeout 65;\n\
	types_hash_max_size 2048;\n\
	include /etc/nginx/mime.types;\n\
	access_log /var/log/nginx/access.log;\n\
	error_log /var/log/nginx/error.log;\n\
	gzip on;\n\
	include /etc/nginx/conf.d/*.conf;\n\
    server {\n\
        set_by_lua $nginx_docroot_in_repo   '"'"'return os.getenv("NGINX_DOCROOT_IN_REPO")'"'"';\n\
        set_by_lua $gitpod_repo_root        '"'"'return os.getenv("GITPOD_REPO_ROOT")'"'"';\n\
        listen         0.0.0.0:8002;\n\
        location / {\n\
            root $gitpod_repo_root/$nginx_docroot_in_repo;\n\
            index index.html index.htm index.php;\n\
        }\n\
    }\n\
}' > /etc/nginx/nginx.conf

COPY apache.conf /etc/apache2/apache2.conf

COPY mysql.cnf /etc/mysql/mysql.conf.d/mysqld.cnf

COPY client.cnf /etc/mysql/mysql.conf.d/client.cnf

COPY mysql-bashrc-launch.sh /etc/mysql/mysql-bashrc-launch.sh

USER gitpod

RUN echo ". /etc/mysql/mysql-bashrc-launch.sh" >> ~/.bashrc

# Local environment variables
# C9USER is temporary to allow the MySQL Gist to run
ENV C9_USER="root"
ENV PORT="8080"
ENV IP="0.0.0.0"
ENV C9_HOSTNAME="localhost"