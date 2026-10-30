# Company Website CMS (Laravel)

![tests](https://github.com/Kritimandal/mitsolution/actions/workflows/tests.yml/badge.svg)

A company website with an admin panel, built with Laravel 10. Admins manage all public content, and visitors can read posts and apply for jobs online.

## Features

- **Admin panel** (login required) to create, edit and delete:
  posts, categories and sub-categories, banners, projects, technologies and tags, clients, board members, testimonials and site settings
- **SEO fields** (meta title, description and keywords, plus URL slugs) on posts and categories
- **Public website**: home, about, services, team, clients, careers and contact pages
- **Job applications**: visitors apply with their CV, and admins view and download applications
- **Contact form** with messages saved for admins

## Security

Uploads are handled in one place, [`app/Services/FileUploader.php`](app/Services/FileUploader.php):

| Risk | How it is handled |
|---|---|
| Anyone signing up through `/register` and getting admin access | Public registration is turned off; admins are created on the server with `php artisan admin:create` |
| Uploading a PHP file and running it from `public/` | Images must be real JPG, PNG, GIF or WebP files (checked by content, not name), max 2 MB |
| File names chosen by the user | Files are saved under a random 40-character name with an extension taken from the real file type |
| SVG files with scripts | SVG is not accepted |
| Applicants' CVs open to anyone | CVs are stored in private storage (`storage/app/resumes`), not `public/`, and can only be downloaded by a logged-in admin |
| Path tricks in download links (`../`) | Only the base file name is used, and missing files return 404 |

## Tech stack

PHP 8.1, Laravel 10, MySQL (SQLite for tests), Blade, Bootstrap, jQuery, CKEditor, PHPUnit, GitHub Actions

## Run locally

```bash
git clone https://github.com/Kritimandal/mitsolution.git
cd mitsolution
composer install
cp .env.example .env
php artisan key:generate
```

Set your MySQL details in `.env`, then:

```bash
php artisan migrate
php artisan admin:create you@example.com --name="Your Name"
php artisan serve
```

The `admin:create` command asks for a password. Log in at http://127.0.0.1:8000/login and add site settings, categories and banners. The public pages need this content before they can show anything.

## Tests

```bash
vendor/bin/phpunit
```

20 feature tests cover admin access (registration turned off, the `admin:create` command, login-only pages), image and CV uploads (including a PHP file renamed to `.png`), private CV downloads, deleting applications and validation. They run on every push with GitHub Actions.
