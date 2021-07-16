<?php

namespace Faceless\Extensions\Database\Seeders;

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
        $this->call(SubscriptionTypeSeeder::class);
        $this->call(ExtensionTypeSeeder::class);
        $this->call(ExtensionSeeder::class);
        $this->call(ExtensionTypeExtensionSeeder::class);
    }
}
