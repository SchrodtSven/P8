phphttpd:
php -S localhost:8080 -t public router.php > /dev/null  2>&1 &
check:
./unitcheck.php
test:
phpunit
check_test
./unitcheck.php; phpunit
