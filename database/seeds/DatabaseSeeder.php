<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BanksTableSeeder::class);
         $this->call(BankTransfersTableSeeder::class);
         $this->call(PensionsTableSeeder::class);
    }
}
