# WordPress Starter Repo

A simple Wordpress starter repo that makes use of Composer to install plugins, themes and vendor packages.

In addition it makes use of vlucas/phpdotenv to help with system configuration via .env files.

Thanks must go to Chris Sherry for his excellent tutorial on modern WordPress development.

See... https://www.phpdorset.co.uk/talks/2015/march

####Installation

Once you have pulled or cloned the git repo simply run the composer command in your CLI

```
composer install
```

Then copy the .env.example file to .env and configure the variables within...

```
cp .env.example .env
```

And configure it as you see fit...

```
vim .env
```
