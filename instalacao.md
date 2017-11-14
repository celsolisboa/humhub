# Preparando o Servidor
===========================

## Requisitos necessários

- Acesso ao Shell (e.g. ssh) do Servidor
- PHP 5.6 ou mais atual
- MySQL (5.1 ou mais atual) ou MariaDB com InnoDB storage engine instalado
- Mínimo de 500 MB de espaço livre
- Minimo de 64 MB de memoria alocada para o PHP
- Minimo de 50 MB de espaço para o database

## Extensões Requeridas em PHP
Os exemplos de instalação são os que foram feitos em uma máquina Ubuntu
- [PHP CUrl Extension (w/ SSL Support)](http://de1.php.net/manual/en/curl.setup.php)
```
sudo apt-get install php-curl
```
- [PHP Multibyte String Support] (http://php.net/manual/en/mbstring.setup.php)
```
sudo apt-get install php7.0-mbstring
```
- [PHP PDO MySQL Extension] (http://www.php.net/manual/en/ref.pdo-mysql.php)
- [PHP Zip Extension] (http://php.net/manual/en/book.zip.php)
- [PHP EXIF Extension] (http://php.net/manual/en/book.exif.php)
- [PHP INTL Extension] (http://php.net/manual/en/intro.intl.php)
- [PHP FileInfo Extension] (http://php.net/manual/en/fileinfo.installation.php)

## Algumas Extensões Opcionais

- ImageMagick
- PHP LDAP Support
- PHP APC
- PHP Memcached 

## Permissões do Database

Garanta que o database que você irá apontar para que o humhub use tenha privilégio de:

- SELECT
- INSERT
- DELETE
- UPDATE
- CREATE
- ALTER
- INDEX
- DROP
- REFERENCES
