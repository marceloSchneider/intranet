Intranet
======================================

Install

1) Setup
----------------------------------

Clone the repository and issue composer install command,

    php composer.phar install --prefer-dist

Create tables,

    php app/console doctrine:schema:update --force

In `hwi_oauth` section of `app/config/config.yml` file add  `client_id` and `client_secret` infos of resources you want to setup. Also uncomment your required `resource_owners` section in `app/config/security.yml`. After configuration go to `/security_area/hello/world` url of the site.

To setup admin create admin user first,

    php app/console fos:user:create adminuser
    php app/console fos:user:promote adminuser ROLE_ADMIN

Then go to `/admin/dashboard` of the site.
