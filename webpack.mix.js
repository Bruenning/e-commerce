let mix = require('laravel-mix');

// Path: webpack.config.js

const path = require('path');
const fs =  require('fs');

const package = JSON.parse(fs.readFileSync('./package.json'));

mix
    .js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .babelConfig({
        presets: ['@babel/preset-env'],
    })


mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue', '.json'],
        alias: {
            '@': path.resolve('resources/js'),
        },
        fallback: {
            os: require.resolve('os-browserify/browser'),
            https: false,
            http: false,
            crypto: false,
            stream: false,
            path: require.resolve('path-browserify'),
            fs: false,
        }
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader',
            },
        ]
    }
    
})

mix.disableNotifications()

mix.version()