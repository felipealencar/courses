git clone --depth 1 https://github.com/phpmyadmin/phpmyadmin.git
cd ./phpmyadmin
composer update --no-dev
yarn install
cp config.inc.php .
# Cópia da chave para autenticação SSL.
cp rds-combined-ca-bundle.pem .

echo "Done"

cd ..
sudo chmod -R 775 .
source ~/.bashrc