FROM sbvr/laravel-composer
WORKDIR /app
COPY . /app
EXPOSE 90
CMD ["php","artisan","serve"] 
