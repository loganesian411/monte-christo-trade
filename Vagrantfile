# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/trusty64"

  # config.vm.box_check_update = false

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.network "forwarded_port", guest:80, host:8080

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  config.vm.synced_folder "./", "/home/vagrant/project"
  
  config.vm.provider "virtualbox" do |vb|
    # Customize the amount of memory on the VM:
    vb.memory = "1024"
  end

  # Enable provisioning with a shell script. Additional provisioners such as

  config.vm.provision "shell", inline: <<-SHELL
    apt-get update
    apt-get install -y python-pip postgresql postgresql-contrib python-dev libpq-dev

    pip install virtualenv
    cd /home/vagrant/project
    virtualenv virtualenv
    source virtualenv/bin/activate
    pip install -r requirements.txt
    
    sudo -i -u postgres -c 'createuser vagrant && createdb vagrant'

  SHELL
end
