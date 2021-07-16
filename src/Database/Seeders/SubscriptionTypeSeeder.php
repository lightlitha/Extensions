<?php

namespace Faceless\Extensions\Database\Seeders;

use Illuminate\Database\Seeder;
use Faceless\Extensions\Models\SubscriptionType;

class SubscriptionTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $attributes = [
        [
          'name' => "Per Month"
        ],
        [
          'name' => "Per Year"
        ],
        [
          'name' => "Free"
        ],
        [
          'name' => "Once Off"
        ]
      ];
  
      foreach ($attributes as $key => $value) {
        $attribute = new SubscriptionType();
        $attribute->name = $value['name'];
        $attribute->save();
      }
    }
}
