default:
	docker build -t my-php-app .
	docker run -p 8000:80 my-php-app

