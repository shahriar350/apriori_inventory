<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A Admin can create his account';

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
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('What is your name');


        $k = true;
        $number = 0;
        while ($k){
            $number = $this->ask('Your phone number');
            if (User::where('phone_number',$number)->count() > 0) {
                $this->info('This number is already available in database');
            } else {
                $k = false;
            }
        }
        $password = $this->ask('Your password');
        $user = new User();
        $user->name = $name;
        $user->phone_number = $number;
        $user->password = bcrypt($password);
        $user->admin = true;
        $user->save();
        $this->info('Now you can login Admin panel');
        return 0;
    }
}
