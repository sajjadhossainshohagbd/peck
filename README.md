
<p align="center">
    <img src="https://raw.githubusercontent.com/peckphp/peck/main/docs/logo.png" alt="Peck example" height="300">
    <p align="center">
        <a href="https://github.com/peckphp/peck/actions"><img alt="GitHub Workflow Status (master)" src="https://img.shields.io/github/actions/workflow/status/peckphp/peck/tests.yml"></a>
        <a href="https://packagist.org/packages/peckphp/peck"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/peckphp/peck"></a>
        <a href="https://packagist.org/packages/peckphp/peck"><img alt="Latest Version" src="https://img.shields.io/packagist/v/peckphp/peck"></a>
        <a href="https://packagist.org/packages/peckphp/peck"><img alt="License" src="https://img.shields.io/packagist/l/peckphp/peck"></a>
    </p>
</p>

------
**Peck** is a CLI tool that detects wording / or spelling mistakes in your codebase. It is designed to be fast, easy to use and integrate into your workflow - just like pint or pest.

It relies on the [github.com/tigitz/php-spellchecker](https://github.com/tigitz/php-spellchecker) to detect spelling mistakes in your codebase, the goal to make it work with Folder names, file names, method names, comments, and more.

> **Note:** This project is still in development and not ready for production use. At the moment, only the filesystem checker is implemented and only detects spelling mistakes in file and folder names.

## Installation

> **Requires [PHP 8.3+](https://php.net/releases/)**

Require Peck using [Composer](https://getcomposer.org):

```bash
composer require peckphp/peck
```

## Usage

To check your project for spelling mistakes, run the following command:

```bash
./vendor/bin/peck
```

---

Peck is an open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**.
