## 前提条件
virtualbox 6.0  
vagrant

## インストール内容
ホストos centos-7.4  
docker latest    
docker-compose latest  
git latest  
vim latest  

## インストール手順
```
git clone git@github.com:wollllll/laravel_docker.git
cd laravel_docker
vagrant up
vagrant ssh
cd /var/www
docker-compose exec app bash  
laravel new
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

