### Simple-IMS

This project was developed with Laravel Framework 6.2.

### Documentaion URLs

https://laravel.com/docs/6.x

### Development Server Requirements

- `PHP` Version `^7.2`
- `MySQL ^5.7` or `MariaDB ^10.2`

### Installation Instructions

This project is dependent on the `composer` PHP package manager. Be sure the `composer` is available at your local development computer.

Resource: https://getcomposer.org/

Step 01: Clone the repository to your local development computer (Clone with HTTPS):
```
git clone https://github.com/RiazHossainFahad/simple-ims.git
```

Step 02: Install composer dependencies

Run at the command line

`composer install`

For a check, if there are any package updates available:

`composer update`

By running this command, the composer will install the required packages to your local development PC.

Step 03: Replace `.env` file information as per requirements

`cp .env.example .env`

Step 04: To generate Application key run: 

`php artisan key:generate`

Step 04: If the composer installs all the required packages, the project is ready for the run.

Step 05: Migrate the database files and seed the information

The project is dependent on some `pre-exists database tables` and information. Therefore you need to `migrate` and` seed` first.

Run at Command Prompt:

`php artisan migrate --seed`

### Node.js / Yarn Package Manager

If want to update the assets, the project is dependent on Node.js or Yarn Package Manager. 

Run at the command prompt at the root of the project:

For NPM:
```
npm install
```

```
npm update
```

For Yarn:
```
yarn install
```

```
yarn update
```

#### After that

To compile the assets

For Development:

```
npm run dev
```

For Production

```
npm run prod
```