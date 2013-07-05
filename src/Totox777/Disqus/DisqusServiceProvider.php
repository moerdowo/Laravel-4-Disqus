<?php namespace Totox777\Disqus;

use Illuminate\Support\ServiceProvider;

class DisqusServiceProvider extends ServiceProvider {

	protected $defer = false;

	public function boot()
	{
		$this->package('totox777/disqus');
	}

	public function register()
	{
		$app = $this->app;

		$this->app['disqus'] = $this->app->share(function($app)
	    {
	        return new Disqus($app['config']->get('disqus::short_name', 'local8888'));
	    });

		
	}

	public function provides()
	{
		return array();
	}

}