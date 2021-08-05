git clone --depth 1 https://github.com/phpmyadmin/phpmyadmin.git
cd phpmyadmin
composer update --no-dev
yarn install
cp ../.gp/config.inc.php .
# copy AWS RDS CA bundle
cp ../.gp/rds-combined-ca-bundle.pem .

echo "Done"

cd ..
sudo chown -R 775 .
source ~/.bashrc