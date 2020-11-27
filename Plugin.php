<?php namespace OCStream\HRM;

use Backend;
use System\Classes\PluginBase;

/**
 * HRM Plugin Information File
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
            'name'        => 'HRM',
            'description' => 'No description provided yet...',
            'author'      => 'OCStream',
            'icon'        => 'icon-leaf'
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
            'OCStream\HRM\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'ocstream.hrm.some_permission' => [
                'tab' => 'HRM',
                'label' => 'Some permission'
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
            'hrm' => [
                'label'       => 'HRM',
                'url'         => Backend::url('ocstream/hrm/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ocstream.hrm.*'],
                'order'       => 500,
            ],
        ];
    }
}
