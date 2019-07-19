<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Symfony\Component\Console\Output\ConsoleOutput;

class RegistereCustomerToNewsletter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewCustomerHasRegistered  $event
     * @return void
     */
    public function handle(NewCustomerHasRegistered $event)
    {
        $logger = new ConsoleOutput();
        $logger->writeln('メルマガに'.$event->customer->name.'様を登録しました');
    }
}
