let mix = require('laravel-mix');

mix
    .js('assets/scripts/app.js', 'dist/main.js')
    .js('assets/scripts/blocks.js', 'dist/blocks.js')
    .sass('assets/styles/app.scss', 'dist/main.css')
    .sass('assets/styles/blocks.scss', 'dist/blocks.css');