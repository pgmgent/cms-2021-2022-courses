let mix = require('laravel-mix');

mix
    .js('assets/scripts/app.js', 'dist/main.js')
    .sass('assets/styles/app.scss', 'dist/main.css');