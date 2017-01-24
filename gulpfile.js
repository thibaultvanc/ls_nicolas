var elixir = require('laravel-elixir');


require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */




elixir(function(mix) {

/*
    mix.sass('app.scss')
      // .less('app.less')
      ;


    mix.sass('custom_public.scss');
    mix.sass('custom_admin.scss');

    mix.copy('resources/assets/bower/font-awesome/fonts', 'public/fonts');



    mix.scripts([
        '../../assets/bower/jquery/dist/jquery.js',
        '../../assets/bower/bootstrap/dist/js/bootstrap.js',
        '../../assets/bower/moment/min/moment.min.js',
        '../../assets/bower/clipboard/dist/clipboard.js',
        '../../assets/bower/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        // '../../../node_modules/keen-ui/dist/keen-ui.js'



    ], 'public/js/vendor.js');

/home/thibault/Code/organit/resources/assets/js/Playologie
*/
    // mix.browserify('Larastrap/Larastrap_main.js')
    // mix.browserify('Middle/Middle_main.js');
    // mix.browserify('Playologie/Playologie_main.js');
    // mix.webpack('Playologie/Playologie_main.js')
    // mix.webpack('Play/Play_main.js')
    // mix.webpack('Play/Arthes_main.js')
    // mix.webpack('Zohotest/Zohotest_main.js')
// mix.webpack('Colll/Colll_main.js')
// mix.webpack('Mytest/Mytest_main.js')
// mix.webpack('Grosminet/Grosminet_main.js')
// mix.webpack('Forex/Forex_main.js')

    // mix.webpack('Playologie/Playologie_main.js')
// mix.webpack('Laluminette/Laluminette_main.js')
// mix.webpack('Moon/Moon_main.js')
// mix.webpack('Proutenlair/Proutenlair_main.js')
mix.webpack('Picaflor/Picaflor_main.js')
// mix.webpack('Locale/Locale_main.js')
    // mix.browserify('Picaflor/Picaflor_main.js')
    // mix.browserify('Picaflor/Picaflor_main.js')

    // mix.browserify('main.js');



});
