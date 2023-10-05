#!/bin/sh
set -e

for host in 'domain1.test.com' 'domain2.test.com';
do
  hostLine="127.0.0.1 $host"
  grep -qxF "$hostLine" /etc/hosts || echo $hostLine >> /etc/hosts
done
