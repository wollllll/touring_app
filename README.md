## 前提条件
virtualbox 6.0  
vagrant

## インストール手順
```
git clone git@github.com:wollllll/laravel_docker.git
cd laravel_docker
vagrant up
vagrant ssh
cd /var/www
docker-compose exec app bash  
composer create-project --prefer-dist laravel/laravel src
```
## DB設定
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=local
DB_USERNAME=local
DB_PASSWORD=local
```

上記行った後、下記ローカルipにアクセスでlaravelのwelcome画面表示  
http://192.168.33.10/

