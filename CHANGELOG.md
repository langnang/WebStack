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

# 填充数据库
# php artisan migrate:fresh --seed
```

```sh
php artisan make:model WebStackMeta

php artisan make:model WebStackContent

php artisan make:model WebStackRelationShip
```


```sh
# 安装 dcat-admin
composer require dcat/laravel-admin:"2.*" -vvv
# 发布资源
php artisan admin:publish
# 安装
php artisan admin:install
```

```yml
# .env

ASSET_URL=/public
```
