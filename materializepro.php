<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class MaterializePro extends Theme
{
	// Materializer Pro plugin will look for this class var to know it should load
	public $load_materializerpro_plugin = true;

	public static function getSubscribedEvents()
	{
		return [
			'onThemeInitialized' => ['onThemeInitialized', 0]
		];
	}

	public function onThemeInitialized()
	{
		if ($this->isAdmin()) {
			$this->active = false;
			return;
		}

		$this->enable([
			'onPageInitialized' => ['onPageInitialized', 0]
		]);
	}

	public function onPageInitialized()
	{
		$this->config->set('plugins.pagination.built_in_css', false);
		$this->config->set('plugins.relatedpages.show_score', false);
   }

}
