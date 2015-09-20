<?php defined('SYSPATH') or die('No direct script access.');

require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
require SYSPATH.'classes/Kohana'.EXT;
}
require(APPPATH.'vendor/autoload.php');

date_default_timezone_set('Europe/Kiev');

setlocale(LC_ALL, 'en_US.utf-8');

spl_autoload_register(array('Kohana', 'auto_load'));


ini_set('unserialize_callback_func', 'spl_autoload_call');

mb_substitute_character('none');

I18n::lang('en-us');

if (isset($_SERVER['SERVER_PROTOCOL']))
{
	HTTP::$protocol = $_SERVER['SERVER_PROTOCOL'];
}

if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */

Kohana::init(array(
	'base_url'   => '/',
	'index_file' => FALSE,
));


Kohana::$log->attach(new Log_File(APPPATH.'logs'));


Kohana::$config->attach(new Config_File);

Kohana::modules(array(
	'auth'       => MODPATH.'auth',       // Basic authentication
	//'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	));


Cookie::$salt = "hhihijojokpokpok";

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'profile',
		'action'     => 'info',
	));
