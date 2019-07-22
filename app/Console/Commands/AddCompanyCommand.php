<?php

namespace App\Console\Commands;

use App\Company;
use Illuminate\Console\Command;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'company:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add Company to Database.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask('What is the company name?');
        $phone = $this->ask('What is the company\'s phone number?') ?? 'N/A';

        if ($this->confirm('Are you ready to insert "'.$name.'"?')) {
            $company = Company::create([
                'name' => $name,
                'phone' => $phone,
            ]);

            return $this->info('[Success] Company added : '.$company->name.'('.$company->phone.')');
        }

        $this->warn('No company added');
    }
}
