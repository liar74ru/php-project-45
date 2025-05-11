# Makefile
install: # установить зависимости
	composer install

validate: # проверить код на ошибки
	composer validate

run: # запустить игру
	./bin/brain-games

brain-even: # запускаем игру 1 четное не четное
	./bin/brain-even

brain-calc: # запускаем игру 2 Калькулятор
	./bin/brain-calc

brain-gcd: # Запускаем игру 3 наибольший общий делитель
	./bin/brain-gcd

brain-progression: # Запускаем игру 4 прогрессия
	./bin/brain-progression

lint: # проверка кода на коректность
	composer exec --verbose phpcs -- --standard=PSR12 src bin