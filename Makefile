start:
	cd ./docker && docker compose up -d --build
stop:
	cd ./docker && docker compose down
env:
	cd ./docker && sh create_env.sh
backup_db:
	docker exec -it mysql mysqldump -u root --password=root --databases --no-create-db modx | tail -n +2 > ./modx/_backup/$(shell date '+%Y_%m_%d_%H_%M_%S').sql
import_db:
	docker exec -i mysql mysql -u root -proot modx < ./modx/_backup/$(filename).sql