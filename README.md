# WordPress Doctrine Mapping For Symfony

This is a set of WordPress database entities for Doctrine in Symfony.

The idea is to have a one-to-one sycronized representation of WordPress DB tables in Symfony in such a way that the resulting database structure is exactly the same as the resulting one from a fresh WP installation:

E.g. on an empty database this would create all the tables in the same way and structure as WordPress would.

```bash
$ php bin/console make:migration
...
$ php bin/console doctrine:migrations:migrate
```

If a DB already exists, `make:migration` command should certify that there are no differences between our entities and the database.

## Getting Started

This is of special interest as scaffolding for anyone who wants to write/read/manage a WordPress database using Symfony + Doctrine.

### Prerequisites

If you are planning to verify that the entities are in sync with your DB, you'll need to install Doctrine support via the `orm` Symfony pack. 

```bash
$ composer require symfony/orm-pack

$ composer require --dev symfony/maker-bundle
```

### Installing

All you need to do is cloning this repository or download the source. Classes are located at `src/Entity` and `src/Repository` (default destination used by the `maker-bundle`). You can copy them inside the `src` directory of your project.

At the moment I'm using **Symfony v5.4**. That might change in the future, but for now this version works just fine. Symfony 5.4 works well with PHP7.4, which seems to me to be the most common version of PHP in lots of hosting companies currently serving WordPress sites (you want any code derived from this being able to interact with WP in the same environment).

## Built With

* [Symfony](symfony.com/) - Symfony Framework 
* [Doctrine](https://www.doctrine-project.org/) - The Doctrine Project
* [WordPress](wordpress.org/) - WordPress

## Versioning

I'm planning to use [SemVer](http://semver.org/) for versioning at some point.

## Authors

* **Pavel E.** - [Website](pavelespinal.com/about-me/)

List of [contributors](https://github.com/jespinal/wp-doctrine-typemapping/contributors).

## License

This project is licensed under the BSD License - see the [LICENSE.md](LICENSE.md) file for details
