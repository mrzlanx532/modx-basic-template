# Описание
Базовый стартовый репозиторий для проекта на **CMS ModX 3.1.0**  
c Docker конфигурацией для локальной разработки

# Как запустить локально?

0. В `/etc/hosts` добавить строчку: `127.0.0.1   modx-test.ru`
1. `make env`
2. `make start`

# Как запустить процесс установки 
Перейдите в `http://modx-test.ru/setup`

# Выгрузка БД из докера
`docker exec -it mysql mysqldump -u root --password=root modx > ./modx.sql`