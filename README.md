## Introduction

Laravel Ease provides a batteries-included, simple starting point for building and quickly prototyping your application Vue components. 
<br/>
<br/>
Directory based Vue routes, provides a dynamic playground to interact with your Vue components.

Powered by the amazing [Vite](https://vitejs.dev/) ⚡

## Installation

```bash
composer require cgnetwork/ease --dev
```

After installing the package, you may execute the `php artisan ease:install` Artisan command.
<br/>This command:
* Adds an `ease` script to your project `package.json`
* Publishes an `ease` directory to your project `resources/js/pages` directory.

## Usage

```bash
yarn ease
```

After running the `ease` script, you may visit the provided route at `your-project.domain/ease`

## Configuration

```bash
php artisan ease:publish
```

Laravel Ease comes pre-configured and ready to go out of the box. Customize the config file `ease.php` by publishing to your config directory.

## Directory Based Routing

Under the hood, dynamic routing is provided and powered by the Vite plugin - [Voie](https://github.com/brattonross/vite-plugin-voie)

To see all the possible route combinations, see [Voie - File System Routing](https://github.com/brattonross/vite-plugin-voie#file-system-routing)

## Contributing

Thank you for considering contributing to Laravel Ease! We welcome all pull requests.

## License

Laravel Ease is open-sourced software licensed under the [MIT license](LICENSE.md).
