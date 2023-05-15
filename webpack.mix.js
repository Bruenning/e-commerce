let mix = require('laravel-mix');

// Path: webpack.config.js

const path = require('path');

mix
    .js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')

max.webpackConfig({
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            '@sass': path.resolve('resources/sass'),
        },
    },
})
