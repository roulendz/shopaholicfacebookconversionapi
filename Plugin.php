<?php namespace Logingrupa\ShopaholicFacebookConversionAPI;

use Backend;
use System\Classes\PluginBase;

/**
 * ShopaholicFacebookConversionAPI Plugin Information File
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
            'name'        => 'ShopaholicFacebookConversionAPI',
            'description' => 'No description provided yet...',
            'author'      => 'Logingrupa',
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
     * @return void
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
            'Logingrupa\ShopaholicFacebookConversionAPI\Components\MyComponent' => 'myComponent',
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
            'logingrupa.shopaholicfacebookconversionapi.some_permission' => [
                'tab' => 'ShopaholicFacebookConversionAPI',
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
            'shopaholicfacebookconversionapi' => [
                'label'       => 'ShopaholicFacebookConversionAPI',
                'url'         => Backend::url('logingrupa/shopaholicfacebookconversionapi/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['logingrupa.shopaholicfacebookconversionapi.*'],
                'order'       => 500,
            ],
        ];
    }
}
