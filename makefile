# Makefile
install: # установить зависимости
	composer install

validate: # проверить код на ошибки
	composer validate

run: # запустить игру
	./bin/brain-games

brain-even: # запускаем игру 2
	./bin/brain-even

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin