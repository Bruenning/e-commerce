let mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')

// Path: webpack.config.js

const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            '@sass': path.resolve('resources/sass'),
        },
    },
};
