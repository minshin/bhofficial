<?php namespace Bohe\Service;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function registerComponents()
	{
		return [
				'Bohe\Service\Components\Boheservice'       => 'boheservice',
	
		];
	}
	public function registerFormWidgets()
	{
		return [
				'Bohe\Service\FormWidgets\Preview' => [
						'label' => 'Preview',
						'code'  => 'preview'
				]
		];
	}
    public function registerSettings()
    {
    }
}