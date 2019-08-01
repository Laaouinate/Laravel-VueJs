<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\User;
use App\service\UserService;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Create:User';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(UserService $UserService)
    {
        parent::__construct();
        $this->UserService = $UserService;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask('Name');
        $email = $this->ask('Email');
        $password = $this->secret('Password');
        
        $user = new User;
        $user->name =  $name;
        $user->email = $email;
        $user->password = $password;
        $this->UserService->createUser($user);

        $this->info('User '. $name .' ('. $email .') has been created!');
        return true;
    }
}
