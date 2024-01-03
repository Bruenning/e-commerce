const webpack = require('webpack')

module.exports = {
    configureWebpack: {
        plugins: [
            new webpack.DefinePlugin({
                __VUE_OPTIONS_API__: true,
                __VUE_PROD_DEVTOOLS__: false,
                'process.env': {
                    APP_URL: JSON.stringify(process.env.APP_URL),
                    APP_NAME: JSON.stringify(process.env.APP_NAME),
                },
            })
        ]
    }
}
  