git clone --depth 1 https://github.com/phpmyadmin/phpmyadmin.git
cd ./phpmyadmin
composer update --no-dev
yarn install
cp /workspace/courses/.gp/config.inc.php .
# Cópia da chave para autenticação SSL.
cp /workspace/courses/.gp/rds-combined-ca-bundle.pem .

echo "Done"

cd ..
sudo chmod -R 775 .
source ~/.bashrc