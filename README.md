# SEO CMS

Symfony CMS designed for creating websites which meet current SEO standards.
![Panel look](https://i.ibb.co/WFJ7xL5/2023-02-13-12-38.png)

### Demo version
You can take a look at [demo version](https://bednarski.xyz/) - login with following login/password:
- redaktor
- test12

### Built with
- PHP
- Symfony
- Bootstrap
- jQuery

### CMS currently offers the following options
- Add new page with setting following parameters:
    - Name
    - Title
    - Description
    - Slug
    - Robots
    - Parent page
    - Content
- Set content of robots.txt file
- Generate Sitemap
- Reorganize menu
- Edit page logo
- Manage roles and users (only for admin)

## Getting started
```
git clone https://github.com/grzesiekdev/seo_cms.git
```

### Install dependencies
```
composer install
```

### Set up environment with docker-compose
Docker-compose will set up for you mysql database, nginx server and php, just run the following:
```
docker-compose up -d
```

Then, you will have to enter the php container and run all the migrations and upload fixtures:
```
docker-compose exec php /bin/bash
symfony console doctrine:migrations:migrate  
symfony console doctrine:fixtures:load
```

## TODO
- [x] Add Breadcrumbs
- [ ] Change page theme - with admin panel + RWD
- [ ] Improve creating sitemap - add lastmod
- [ ] Add sidebars
- [ ] Add nesting to more than just two levels
- [ ] Add nesting in menu
- [ ] Add blog