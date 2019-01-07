<?php namespace Prismify\Industry;

use Backend;
use System\Classes\PluginBase;

/**
 * Industry Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'prismify.industry::lang.details.name',
            'description' => 'prismify.industry::lang.details.description',
            'author'      => 'prismify.industry::lang.details.author',
            'icon'        => 'icon-industry',
            'homepage'    => 'https://github.com/prismify/oc-industry-plugin'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Prismify\Industry\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'prismify.industry.access_industries' => [
                'tab' => 'prismify.industry::lang.details.name',
                'label' => 'prismify.industry::lang.permissions.access_industries'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'industry' => [
                'label'       => 'prismify.industry::lang.details.name',
                'url'         => Backend::url('prismify/industry/industries'),
                'icon'        => 'icon-industry',
                'iconSvg'     => 'plugins/prismify/industry/assets/images/industry-icon.svg',
                'permissions' => ['prismify.industry.access_industries'],
                'order'       => 500,
            ],
        ];
    }

    /**
     * Registers back-end settings items for this plugin.
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'industries' => [
                'label'       => 'prismify.industry::lang.settings.menu.label',
                'description' => 'prismify.industry::lang.settings.menu.description',
                'icon'        => 'icon-industry',
                'url'         => Backend::url('prismify/industry/industries'),
                'order'       => 500,
                'permissions' => ['prismify.industry.access_industries'],
                'keywords'    => 'industries',
            ],
        ];
    }
}
