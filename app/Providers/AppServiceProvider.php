<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('frontend.layouts.footer', function ($view) {
            // Services
            $allServices = DB::table('services')
                ->select('id', 'service_name')
                ->get();

            // Insights
            $allInsights = DB::table('insights')
                ->select('id', 'insights_name')
                ->get();

            // Industries
            $allIndustries = DB::table('industries')
                ->select('id', 'industries_name')
                ->get();

            // Share all data
            $view->with([
                'allServices' => $allServices,
                'allInsights' => $allInsights,
                'allIndustries' => $allIndustries
            ]);
        });
    }
}