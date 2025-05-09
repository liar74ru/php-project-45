# Makefile
install: # установить зависимости
	composer install

validate: # проверить код на ошибки
	composer validate

run: # запустить игру
	./bin/brain-games