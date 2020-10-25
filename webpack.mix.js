// const mix = require('laravel-mix');
let mix = require(__dirname + '/node_modules/laravel-mix/src/index');
let webpack = require('webpack');

let directory_asset = 'public';
mix.setPublicPath(path.normalize(directory_asset));

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.sass('resources/sass/admin/pages/global.scss','public/admin/css')
mix.js('resources/js/admin/pages/profile.js','public/admin/js')
mix.js('resources/js/admin/pages/global.js','public/admin/js').autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
});

let build_js = [
    {
        from: 'resources/js/frontend/pages/home/index.js',
        to: 'js/home.js'
    },
    {
        from: 'resources/js/frontend/pages/menu/index.js',
        to: 'js/menu.js'
    },
    {
        from: 'resources/js/user/pages/dashboard.js',
        to: 'js/user_dashboard.js'
    },
    {
        from: 'resources/js/user/pages/bank.js',
        to: 'js/user_bank.js'
    },
    {
        from: 'resources/js/user/pages/estate.js',
        to: 'js/user_estate.js'
    },
];

let build_scss = [
    {
        from: 'resources/sass/frontend/pages/home/index.scss',
        to: 'css/home.css'
    },
    {
        from: 'resources/sass/frontend/pages/menu/index.scss',
        to: 'css/menu.css'
    },
    {
        from: 'resources/sass/frontend/pages/article_detail/index.scss',
        to: 'css/article_detail.css'
    },
    {
        from: 'resources/sass/user/pages/dashboard.scss',
        to: 'css/user_dashboard.css'
    },
    {
        from: 'resources/sass/user/pages/bank.scss',
        to: 'css/user_bank.css'
    },
    {
        from: 'resources/sass/user/pages/estate.scss',
        to: 'css/user_estate.css'
    },
];

build_js.map((file) => {
    mix.js(file.from, file.to);
});

build_scss.map((file) => {
    mix.sass(file.from, file.to).minify(directory_asset + '/' + file.to);
});

mix.webpackConfig({
    plugins: [
        new webpack.ContextReplacementPlugin(/\.\/locale$/, 'empty-module', false, /js$/),
        new webpack.IgnorePlugin(/^codemirror$/),
    ],
    node: {
        fs: "empty"
    },
    module: {
        rules: [
            {
                test: /\.modernizrrc.js$/,
                use: ['modernizr-loader']
            },
            {
                test: /\.modernizrrc(\.json)?$/,
                use: ['modernizr-loader', 'json-loader']
            }
        ]
    },
    resolve: {
        alias: {
            "handlebars": "handlebars/dist/handlebars.js",
            modernizr$: path.resolve(__dirname, "resources/assets/js/.modernizrrc"),
        }
    },
});

mix.version();
