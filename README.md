## 前提条件
virtualbox 6.1.34
vagrant 2.2.19

## インストール手順
```
git clone git@github.com:wollllll/laravel_vagrant_docker.git
cd laravel_vagrant_docker
vagrant up && vagrant ssh
cd /var/www
make laravel-i
```
## DB設定
```
DB_CONNECTION=mysql
DB_HOST=192.168.33.10
DB_PORT=3306
DB_DATABASE=local
DB_USERNAME=local
DB_PASSWORD=local
```

http://192.168.33.10/

