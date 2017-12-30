<?php

namespace Nano\Providers;

use Illuminate\Support\ServiceProvider;
use Route;

class NanoProvider extends ServiceProvider
{
	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
        Route::group([
            'middleware' => 'api',
            'namespace' => 'Nano\Http\Controllers',
            'prefix' => 'api',
        ], function ($router) {
	        require(__DIR__.'/../../../routes/api.php');
        });
	}
}
