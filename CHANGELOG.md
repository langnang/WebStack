# CHANGELOG

```sh
composer create-project --prefer-dist laravel/laravel WebStack
```

```sh
npm install
```

```sh
git clone git@github.com:WebStackPage/WebStackPage.github.io.git
```

```sh
# 创建迁移
php artisan make:migration create_webstack_table

# 执行迁移
php artisan migrate
```

```sh
# 生成 Seeder
php artisan make:seeder WebStackSeeder

# 运行 Seeders
php artisan db:seed --class=WebStackSeeder
```

```sh
php artisan make:model WebStackMeta

php artisan make:model WebStackContent

php artisan make:model WebStackRelationShip
```
