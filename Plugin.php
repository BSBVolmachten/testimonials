<?php namespace Bsbvolmachten\Testimonials;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Bsbvolmachten\Testimonials\Components\Testimonials' => 'testimonials',
        ];
    }

    public function registerSettings()
    {
    }
}
