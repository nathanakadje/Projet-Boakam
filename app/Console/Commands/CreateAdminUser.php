<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

     protected $signature = 'admin:create 
        {email=admin2@example.com : Email of the admin user}
        {name=Admin : Name of the admin user}
    {password? : Password for the admin user (optional, default = random)}';
    
    protected $description = 'Create an admin user';

    public function handle()
    {
        $email = $this->argument('email');
        $name = $this->argument('name');
        $password = $this->argument('password') ?: $this->generateRandomPassword();

        $user = User::firstOrNew(['email' => $email]);
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->is_admin = true;
        $user->save();

        $this->info("Admin user created successfully!");
        $this->info("Email: $email");
        $this->info("Password: $password");
    }

    protected function generateRandomPassword($length = 12)
    {
        return bin2hex(random_bytes($length / 2));
    }
    // protected $signature = 'app:create-admin-user';

    // /**
    //  * The console command description.
    //  *
    //  * @var string
    //  */
    // protected $description = 'Command description';

    // /**
    //  * Execute the console command.
    //  */
    // public function handle()
    // {
    //     //
    // }
}
