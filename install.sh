#!/bin/bash

apt-get install -y openvpn iptables easy-rsa mysql-server mysql-client
apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

mkdir /etc/openvpn/easy-rsa
cp -r /usr/share/easy-rsa/* /etc/openvpn/easy-rsa