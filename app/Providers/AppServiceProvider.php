<?php

namespace App\Providers;

use App\Models\Bill;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        view()->composer('Admin.pages.product.add',function($view){
            $cate= Category::all();
            $view->with('category',$cate);
        });
        view()->composer('Customer.components.header',function($view){
            $cate= Category::all();
            $view->with('category',$cate);
            if(session('cart')){
                $cart=session('cart');
                $view->with('cart',$cart);
            }

        });
        view()->composer('Customer.components.sidebar',function($view){
            $cate= Category::all();
            $view->with('category',$cate);
        });
        view()->composer('Admin.pages.home',function($view){
            $bills= DB::table('bills')->join('customer', 'bills.customer_id', '=', 'customer.customer_id')->get();
            
            $view->with('bills',$bills);
        });
        
    }
}
