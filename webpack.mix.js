const mix = require('laravel-mix');
mix
    .js('src/main.js', 'mypackage.js')
    .vue()
    .sourceMaps()
    .version()
    .setPublicPath('dist')
    .webpackConfig({
        externals: {
            vue: ['Vue']
        },
    })
