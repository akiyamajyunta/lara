# usage

## 1回目

```:shell
docker compose up -d
```

```:shell
docker compose exec stduy-laravel-server bash
```

コンテナの中に入っていることを確認

```:shell
composer create-project laravel/laravel --prefer-dist .
```

```:shell
php artisan serve --host=0.0.0.0 --port=8000
```

localhost:8000

## 2回目

```:shell
docker compose up -d
```

```:shell
docker compose exec stduy-laravel-server bash
```

コンテナの中に入っていることを確認

```:shell
php artisan serve --host=0.0.0.0 --port=8000
```