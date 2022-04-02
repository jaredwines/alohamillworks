FROM php:8.0-apache as base
FROM python:3.8-alpine

COPY ./src /var/www/html
COPY thumbnail-creater.py .

CMD ["/usr/local/bin/thumbnail-creater.py", "/var/www/html", "500"]
