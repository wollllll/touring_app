# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
 config.vm.box = "bento/amazonlinux-2"
 config.vm.network "private_network", ip: "192.168.33.10"
 config.vm.synced_folder "./", "/var/www"
 config.vm.provision :shell, run: "always", inline: <<-SHELL
    sudo yum -y update

    sudo dd if=/dev/zero of=/swapfile bs=1M count=2048
    sudo chmod 600 /swapfile
    sudo mkswap /swapfile
    sudo swapon /swapfile

    # install docker
    sudo yum -y install docker
    sudo systemctl start docker
    sudo systemctl enable docker
    sudo usermod -aG docker vagrant

    # install docker-compose
    sudo curl -L https://github.com/docker/compose/releases/download/1.25.4/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose
    sudo chmod +x /usr/local/bin/docker-compose
    sudo ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose

    # install git
    sudo yum -y install git

    # install vim
    sudo yum -y install vim

    cd /var/www
    docker-compose up -d --build
 SHELL
end
