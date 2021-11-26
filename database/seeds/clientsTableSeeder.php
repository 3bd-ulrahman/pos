<?php

use App\Client;
use Illuminate\Database\Seeder;

class clientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = ['ahmed', 'mohammed'];
        foreach ($clients as $client) {
            Client::create([
                'name' => $client,
                'phone' => '010' . rand(111111111 ,999999999),
                'address' => 'Damitta'
            ]);
        }
    }
}
