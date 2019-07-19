<?php

namespace App\Providers;

use App\Events\NewCustomerHasRegistered;
use App\Listeners\NotifyAdminViaSlack;
use App\Listeners\RegistereCustomerToNewsletter;
use App\Listeners\WelcomeNewCustomerListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        NewCustomerHasRegistered::class => [
            WelcomeNewCustomerListener::class,
            RegistereCustomerToNewsletter::class,
            NotifyAdminViaSlack::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
