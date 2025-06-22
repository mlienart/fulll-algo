FROM php:8.4-cli

RUN apt-get update && apt-get install -y --no-install-recommends \
	git \
    unzip \
	&& rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app


COPY --link composer.* ./

RUN set -eux; \
	composer install --no-interaction --prefer-dist

COPY --link . ./

CMD ["vendor/bin/phpunit", "tests"]
