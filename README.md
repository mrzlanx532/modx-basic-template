# Описание
Базовый стартовый репозиторий для проекта на **CMS ModX 3.1.0**  
c Docker конфигурацией для локальной разработки

Что добавлено в MODX:
1. Установлен модуль `translit`, настроена конфигурация `ЧПУ`
2. Установлен `Gitify` (в php контейнер)

# Как запустить локально?

0. В `/etc/hosts` добавить строчку: `127.0.0.1   modx-test.ru`
1. `make env`
2. `make start`

# Как запустить процесс установки 
Перейдите в `http://modx-test.ru/setup`

# Нюансы по Gitify
Команда `gitify backup` && `gitify restore` не работает.

Для бекапа используем: `make backup_db`  
Для импорта используем: `make import_db filename=2025_01_17_21_45_49`

# Выгрузка БД из докера (без Gitify)
`docker exec -it mysql mysqldump -u root --password=root modx > ./modx.sql`

# Сохраненные решения ошибок
1. https://community.modx.com/t/modx3-gitify-problem-mediasources/7542