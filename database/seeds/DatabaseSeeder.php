<?php

use Illuminate\Database\Seeder;
use App\sysuser;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        sysuser::insert([
            'uname' =>  'admin',
            'namalengkap' => 'Administrator',
            'email' => 'admin@pbo3app',
            'upass' => sha1('admin')
        ]);
    }
}
