let mix = require('laravel-mix');

// Path: webpack.config.js

const path = require('path');
const { rule } = require('postcss');

mix
    .js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')

mix.extend('vue', (mix) => {
    const vueLoaderConfig = {
        transformToRequire : {
            video : ['src', 'poster'],
            source : 'src',
            img : 'src',
            image : 'xlink:href',
        },
    }

    mix.webpackConfig({
        resolve: {
            extensions: ['.js', '.vue', '.json'],
            alias: {
                '@': path.resolve('resources/js'),
            },
            modules: {
                rules: [
                    {
                        test: /\.vue$/,
                        loader: 'vue-loader',
                        options: vueLoaderConfig,
                    },
                ],
            },
        },
    })
})

