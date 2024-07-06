<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RehashPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rehash:passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rehash all user passwords using Bcrypt';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            // Check if the password needs rehashing
            if (Hash::needsRehash($user->password)) {
                $user->password = Hash::make($user->password);
                $user->save();
                $this->info('Password for user ' . $user->email . ' has been rehashed.');
            } else {
                $this->info('Password for user ' . $user->email . ' is already hashed with Bcrypt.');
            }
        }

        return Command::SUCCESS;
    }
}
