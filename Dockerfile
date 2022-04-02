FROM php:8.0-apache as base
COPY ./src /var/www/html

FROM python:3.8
COPY thumbnail-creater.py .
CMD ["thumbnail-creater.py", "/var/www/html", "500"]
