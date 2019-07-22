<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('company:clean', function () {
    \App\Company::doesntHave('customerList')
        ->get()
        ->each(function ($company) {
            $company->delete();
            $this->warn('Company "'.$company->name.'" is removed.');
        });
    $this->info('Companies clean up has succeed.');
})->describe('Cleans Up Unused Companies');
