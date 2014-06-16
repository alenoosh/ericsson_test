# Enable XDebug ("0" | "1")
$use_xdebug = "0"

# Default path
Exec 
{
  path => ["/usr/bin", "/bin", "/usr/sbin", "/sbin", "/usr/local/bin", "/usr/local/sbin"]
}

exec 
{ 
    'apt-get update':
        command => '/usr/bin/apt-get update',
        require => Exec['add php55 apt-repo']
}

exec
{
    'dos2unix checks.sh':
        command => 'dos2unix /var/www/public/ericsson/checks.sh',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix unitTest.sh':
        command => 'dos2unix /var/www/public/ericsson/unitTest.sh',
        require => Exec['apt-get install dos2unix']
}

include bootstrap
include other #curl
include php55 #specific setup steps for 5.5
include php
include apache
include mysql
include phpmyadmin
include beanstalkd
include redis
include memcached
include composer
