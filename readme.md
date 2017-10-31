add wiz\cms\CmsServiceProvider::class, to config/app
php artisan migrate
php artisan db:seed --class=wiz\\cms\\seeds\\AdminUsersTableSeeder
php artisan db:seed --class=wiz\\cms\\seeds\\AdminRolesTableSeeder
php artisan make:cms

In config/auth change 'model' => App\User::class, to model' => wiz\cms\Models\AdminUser::class,