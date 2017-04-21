const { mix } = require('laravel-mix');

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.js([
	'node_modules/highlightjs/highlight.pack.js',
	'resources/assets/js/app.js',
	'node_modules/dropzone/dist/dropzone.js',
	'node_modules/marked/lib/marked.js',
	'node_modules/jquery-tabby/jquery.textarea.js',
	'node_modules/autosize/dist/autosize.js',
	'resources/assets/js/forum.js'
], 'public/js');

// mix.version([
//     'public/css/app.css',
//     'public/js/app.js'
// ]);

mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
