var elixir = require('laravel-elixir');

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
    mix.sass([
    	'app.scss',
    	'_animated.scss',
    	'_bordered-pulled.scss',
    	'_core.scss',
    	'_larger.scss',
		'_stacked.scss',
		'_list.scss',
		'_variables.scss',
		'_fixed-width.scss',
		'_mixins.scss'
    	]);

    
    mix.styles([
		'libs/bootstrap.css',
    	'libs/bootstrap.min.css',
		'libs/stylish-portfolio.css',
		'libs/font-awesome/css/font-awesome.css',
		'libs/font-awesome/css/font-awesome.min.css',
		'libs/font-awesome/css/font-awesome.min.css',
		'libs/select2.min.css'      	

   ],null,'./resources/css');

	mix.scripts([
	    'libs/jquery.js',
	 	'libs/bootstrap.min.js',
	 	'libs/bootstrap.js',
	 	'libs/jquery.js',
	 	'libs/select2.min.js'
   ],null,'./resources/js');


});
