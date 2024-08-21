# CodeIgniter 4 Auto-CRUD Application Boilerplate

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## How to use for new project (Clone/Download This Repo)

```bash
$ git clone https://github.com/helmianto/codeigniter-4-autocrud-boilerplate.git or Download Zip File from this Repo
$ cd codeigniter-4-autocrud-boilerplate
$ cp env .env
$ composer update
```

After Copying `env` to `.env`, setting your `.env` specifically the baseURL and any database settings.

## How to use for existing project

To implement this auto-crud library you can follow the following steps.

<!-- ```bash
$ git clone https://github.com/helmianto/codeigniter-4-autocrud-boilerplate.git or Download Zip File from this Repo
$ cd codeigniter-4-autocrud-boilerplate
$ cp env .env
$ composer update
``` -->

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## Credits

Thanks to Alex Lancer (https://github.com/alexlancer) who has created an awesome project that has really helped many developers speed up the application development process. 

For details, you can see more about this project via the link (https://github.com/alexlancer/CodeIgniter4-CRUD-Library-Tutorial-files) and YouTube Tutorial (https://www.youtube.com/watch?v=q39sfK1gOGE&list=PLYogo31AXFBNdfzh5Vkw-AWKDflRBSSIh)