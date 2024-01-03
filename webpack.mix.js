let mix = require("laravel-mix")
const path = require("path")

// const EventEmitter = require('events');
// EventEmitter.defaultMaxListeners = 15;

// Path: webpack.config.js

const path = require('path');
const fs =  require('fs');

const package = JSON.parse(fs.readFileSync('./package.json'));

mix.js("resources/js/app.js", "public/js")
    .vue()
    .sass("resources/sass/app.scss", "public/css")
    .copy("resources/images", "public/images")
    .copy('node_modules/@mdi/font/fonts/', 'public/fonts/')
    .babelConfig({
        presets: ['@babel/preset-env'],
    })

mix.webpackConfig({
    resolve: {
        extensions: [".js", ".vue", ".json"],
        fallback: {
            os: require.resolve("os-browserify/browser"),
            path: require.resolve("path-browserify"),
            fs: false,
        },
        alias: {
            "@": path.resolve(__dirname, "resources/js"),
        },
    },
    //     module: {
    //         rules: [
    //             {
    //                 test: /\.vue$/,
    //                 loader: 'vue-loader',
    //             },
    //         ]
    // }
})

mix.disableNotifications()

mix.version()

mix.disableNotifications()

mix.version()