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
    'apt-get install dos2unix':
        command => '/usr/bin/apt-get install dos2unix'
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

exec
{
    'dos2unix callRpc.php':
        command => 'dos2unix /var/www/public/ericsson/callRpc.php',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix dbConfig.php':
        command => 'dos2unix /var/www/public/ericsson/dbConfig.php',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix DbModel.php':
        command => 'dos2unix /var/www/public/ericsson/DbModel.php',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix NumberLookup.php':
        command => 'dos2unix /var/www/public/ericsson/NumberLookup.php',
        require => Exec['apt-get install dos2unix']
}

exec
{
    'dos2unix rpcIndex.php':
        command => 'dos2unix /var/www/public/ericsson/rpcIndex.php',
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
