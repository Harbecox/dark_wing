let mix = require('laravel-mix');

mix.sass('resources/sass/style.scss','css');
mix.sass('resources/sass/responsive.scss','css');
mix.sass('resources/sass/lib.scss','css');

mix.options({
    fileLoaderDirs:  {
        fonts: 'fonts'
    }
});
