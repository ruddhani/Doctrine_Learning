# Doctrine_Learning
Doctrine is the most effective way of database connection for PHP projects 

What's inside?
--------------
Doctrine is a Database middleware for PHP, it uses Object Relational Mapper (ORM) and Database Abstraction Layer (DBAL) to securely and effectively interact withDatabase from your Code. This codes, which I have written, will give you the very basics of how to setup and use Doctrine in your simple PHP projects. To learn more you should refer to https://www.doctrine-project.org

1. To install run _composer install_

_packages/bin/doctrine orm:schema-tool:create_

2. you can add/modify your entities at src/ and can run
_packages/bin/doctrine orm:schema-tool:update --force_

3. to check what the sql generated
_packages/bin/doctrine orm:schema-tool:update --force --dump-sql_

4. once database structure created you need to enter some data in your DB:
_php createUser.php yourname_
and
_php createBug.php bugdesc 1_

5. once you populated data you can can now run the doctrine queries/methods
* _php findUser.php 1 _
* _php findByUser.php yourname _
* _php findAllDQL.php _
* _php findByPagination.php _
* _php findNativeQuery.php _

Read more @ courtesy : [Doctrine project|https://www.doctrine-project.org]
