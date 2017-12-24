<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement("SET foreign_key_checks = 0");
        DB::table('users')->truncate();
        DB::table('messages')->truncate();
        factory(App\User::class,50)->create();
        factory(App\Message::class,50)->create();
    }
}
