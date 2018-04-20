# doctrine
The doctrine methods described with sample codes from https://www.doctrine-project.org

What's inside?
--------------
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

Also find the doument and API : [Doctrine project|https://www.doctrine-project.org]
