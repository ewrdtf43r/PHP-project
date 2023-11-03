[RU] --------------------------------

Всем здравствуйте дорогие разработчики и кураторы.
Я написал небольшой Laravel-проект.
Если вы хотите его протестировать или клонировать и развивать его дальше, то в этом файле, будут содержаться ошибки и способы их решения - которые у меня возникли при переносе этого Laravel-проекта - на другой сервер или ПК.

Список распростаннёных ошибок или этапы настройки проекта, после клонирования репозитория:

1. После клонирования этого репозитория, убедитесь что у вас установлены основные программы - PHP, NodeJS и JavaScript.
После их проверки или установки, убедитесь что у вас установлены все зависимости, необходимые для работы с Laravel или другими модулями.
Если у вас есть Composer то можете использовать следующую команду - composer install (если у вас новая версия PHP, допустим как у нас 8.1 или выше, вам может понадобиться использовать флаг - --ignore-platform-reqs, что бы проигнорировать различия в версиях PHP, тогда полная комманда будет выглядить так - composer install --ignore-platform-reqs)

2. После установки всех зависимостей, вам понадобиться найти файл - .env.example, и удалить строчку - .example, что бы файл выглядел так, .env

3. Потом вы должны настроить создание своей БД (разумееться у вас уже должен быть установлен MySQL), делаеться это так, вы должны найти файл index.js - который находиться в папке my-laravel-app\create_database, и изменить там строки 4, 5, 6 и указать вашего пользователя и пароль (если вы хотите изменить имя БД, то вам нужно найти все строки где упоминаеться db_person - и измеить их части на своё название БД). Дальше в новосозданном файле .env - вы должны найти строку - DB_CONNECTION=mysql, под этой строкой будет вся настройка вашего подключения с БД в Laravel, изменити их под ваши параметры

4. Возможно, что при установки зависимостей Composer или PHP их установил, но не активировал. Из-за этого могут быть ошибки связанные с БД, что бы это исправить, вам надо - зайти в каталог где у вас находиться PHP, зайти в конфигурационный файл - php.ini, далее найти в этом файле строки где ваши зависимости закоменнтированы (пример ;extension=pdo_mysql) и удалить комментирование (то есть ;)  

[ENG] --------------------------------

Hello all dear developers and curators.
I have written a small Laravel project.
If you want to test it or clone it and develop it further, this file will contain errors and ways to solve them - which I encountered when moving this Laravel project to another server or PC.

The list of common errors or stages of project configuration after cloning the repository:

1. After cloning this repository, make sure that you have the basic programs installed - PHP, NodeJS and JavaScript.
After checking or installing them, make sure you have all the dependencies installed that you need to work with Laravel or other modules.
If you have Composer, you can use the following command - composer install (if you have a newer version of PHP, say like we have 8.1 or higher, you may need to use the --ignore-platform-reqs flag to ignore differences in PHP versions, then the full command will look like this - composer install --ignore-platform-reqs).

2. After installing all the dependencies, you will need to find the file - .env.example, and delete the line - .example, so that the file looks like this, .env.

3. Then you must configure the creation of your database (of course, you must already have MySQL installed), it is done so, you must find the file index.js - which is located in the folder my-laravel-app\create_database, and change there lines 4, 5, 6 and specify your user and password (if you want to change the name of the database, you need to find all the lines where db_person is mentioned - and change their parts to your database name). Further in the newly created .env file - you should find the line - DB_CONNECTION=mysql, under this line will be all the configuration of your connection to the database in Laravel, change them under your parameters.

4. It is possible that when installing dependencies Composer or PHP installed them, but did not activate. Because of this there may be errors related to the database that would fix it, you need to - go to the directory where you have PHP, go to the configuration file - php.ini, then find in this file lines where your dependencies are commented out (example ;extension=pdo_mysql) and remove the commenting (that is ;).  