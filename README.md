# boom-demo

> Demo of the Boom project

## Getting started

```bash
# Clone this repo
git clone git@github.com:cednore/boom-demo.git
cd boom-demo

# Install composer dependencies
composer install

# Prepare dotenv file
cp .env.example .env # Configure your dotenv file with your own properties after this

# Generate encryption key
php artisan key:generate

# Install boom-server
npm install --global boom-server

# Start boom-server
boom-server start

# Start php development server
php artisan serve
```

Then, open two or more duplicate tabs of [`http://localhost:8000`](http://localhost:8000) and type your message in the
input box on the bottom of the screen. It will be broadcasted to all tabs.
