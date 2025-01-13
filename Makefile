start:
	cd ./docker && docker compose up -d --build
stop:
	cd ./docker && docker compose down
env:
	cd ./docker && sh create_env.sh