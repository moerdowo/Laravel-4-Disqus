Laravel-4-Disqus
================

A laravel 4 package to embed disqus comment to your application.

----------------------
add this line to your composer.json

    "totox777/disqus": "dev-master"

and then, Run :

`composer update` to pull down the latest version of Twitter.



add this line to your app.php provider array:

    'Totox777\Disqus\DisqusServiceProvider',


and add this line to app.php aliases array:

    'Disqus' => 'Totox777\Disqus\Facades\Profiler',



config:
don't forget to chage the disqus short_name in src/config/config.php


Usage:

    Disqus::getHtml();
