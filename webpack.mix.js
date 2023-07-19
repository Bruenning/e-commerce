let mix = require('laravel-mix');
const path = require('path');

// Path: webpack.config.js

mix
    .js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/images', 'public/images')
    // .babelConfig({
    //     presets: ['@babel/preset-env'],
    // })


mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue', '.json'],
        fallback: {
            os: require.resolve('os-browserify/browser'),
            path: require.resolve('path-browserify'),
            fs: false,
        },
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        }
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

// mix.version()