git clone --depth 1 https://github.com/phpmyadmin/phpmyadmin.git
cd phpmyadmin
composer update --no-dev
yarn install
cp ../../config.inc.php .
# copy AWS RDS CA bundle
cp ../../rds-combined-ca-bundle.pem .

echo "Done"
source ~/.bashrc