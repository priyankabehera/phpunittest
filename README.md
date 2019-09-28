# phpunittest

This project is the test project to learn the unit test. Below listed test are done till now:

- Sample test
- assertEquals


# Configuration

To run this test you must have the composer install in the project and you can run the test.

use below code to check the unit test

composer require phpunit/phpunit

create app folder
create tests folder

go to composer.json file
{
    "require": {
        "phpunit/phpunit": "^6.5"
    },
    "autoload":{
        "psr-4":{
            "App\\":"app"
        }
    }
}

composer dump-autoload -o

create phpunit.xml file in root

<?xml version="1.0" encoding="UTF-8" ?>
<phpunit bootstrap="vendor/autoload.php"
         colors="true"
         verbase="true"
         stopOnFailure="false">
    <testsuites>
        <testsuite name="Test Suite">
            <directory>tests</directory>
        </testsuite>
    </testsuites>

</phpunit>

now go to ./vendor/bin/phpunit 



