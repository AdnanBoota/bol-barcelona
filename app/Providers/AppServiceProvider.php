<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Orders;
use App\Bowls;
use App\Ingredients;
use App\CustomIngredients;
use App\Vouchers;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(191); //Solved by increasing StringLength

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('Orders Information');
            $event->menu->add([
                'text' => 'Orders',
                'url' => 'admin/orders',
                'icon' => 'cart-arrow-down',
                'label' => Orders::count(),
                // 'label_color' => 'info',
            ]);
            $event->menu->add('Bowls Information');
            $event->menu->add([
                'text' => 'Bowls',
                'icon' => 'archive',
                'label' => Bowls::count(),
                // 'label_color' => 'info',
                'submenu' => [
                    [
                        'text' => 'All Bowls',
                        'url' => 'admin/bowls',
                        'icon' => 'plus-square',
                    ],
                    [
                        'text' => 'Create bowl',
                        'url' => 'admin/bowls/create',
                        'icon' => 'spinner',
                    ],
                ],
            ]);
            $event->menu->add([
                'text' => 'Ingredients',
                'icon' => 'cubes',
                'label' => Ingredients::count(),
                // 'label_color' => 'info',
                'submenu' => [
                    [
                        'text' => 'All Ingredients',
                        'url' => 'admin/ingredients',
                        'icon' => 'plus-square',
                    ],
                    [
                        'text' => 'Create Ingredient',
                        'url' => 'admin/ingredients/create',
                        'icon' => 'spinner',
                    ],
                ],
            ]);
            $event->menu->add([
                'text' => 'Custom Ingredients',
                'icon' => 'bolt',
                'label' => CustomIngredients::count(),
                // 'label_color' => 'info',
                'submenu' => [
                    [
                        'text' => 'All Custom Ingredients',
                        'url' => 'admin/custom-ingredients',
                        'icon' => 'plus-square',
                    ],
                    [
                        'text' => 'Create Custom Ingredient',
                        'url' => 'admin/custom-ingredients/create',
                        'icon' => 'spinner',
                    ],
                ],
            ]);
            $event->menu->add([
                'text' => 'Vouchers',
                'icon' => 'sticky-note',
                'label' => Vouchers::count(),
                // 'label_color' => 'info',
                'submenu' => [
                    [
                        'text' => 'All Vouchers',
                        'url' => 'admin/vouchers',
                        'icon' => 'plus-square',
                    ],
                    [
                        'text' => 'Create Voucher',
                        'url' => 'admin/vouchers/create',
                        'icon' => 'spinner',
                    ],
                ],
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
