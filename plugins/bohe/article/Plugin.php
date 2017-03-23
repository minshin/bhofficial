<?php namespace Bohe\Article;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function registerComponents()
	{
		return [
				'Bohe\Article\Components\Bohelist'       => 'articlebohelist',
	
		];
	}

    public function registerSettings()
    {
    }
}