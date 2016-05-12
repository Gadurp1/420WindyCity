## Prerequisites

You will need the following things properly installed on your computer.

* [Git](http://git-scm.com/)

* [Laravel](https://laravel.com/)

Run "composer install" to download dependencies.

## Installation

```bash

git clone repo

cd 420windycity

composer install

php artisan vendor:publish

```
rename .env.example to .env

Generate the app key
```
php artisan key:generate
```

Here's where it gets weird....
Talk to me.  You'll have to manually run an sql dump into ur local db.  Once you've created and dumped the db set your enviroment.

in .env
<pre>

DB_HOST= UR IP
DB_DATABASE=UR db name
DB_USERNAME= UR username
DB_PASSWORD= UR password

</pre>

And in config > database.php change to this
<pre>
'mysql' => [
    'driver'    => 'mysql',
    'host'      => env('DB_HOST'),
    'database'  => env('DB_DATABASE'),
    'username'  => env('DB_USERNAME'),
    'password'  => env('DB_PASSWORD'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'strict'    => false,
],
</pre>

Should be all good
