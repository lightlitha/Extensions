<?php

namespace Faceless\Extensions\Database\Seeders;

use Illuminate\Database\Seeder;
use Faceless\Extensions\Models\ExtensionType;

class ExtensionTypeSeeder extends Seeder
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
          'name' => "Retail"
        ],
        [
          'name' => "Resturant"
        ],
        [
          'name' => "Salon"
        ],
        [
          'name' => "Car Wash"
        ],
        [
          'name' => "Club"
        ],
        [
          'name' => "Adult Club"
        ]
      ];
  
      foreach ($attributes as $key => $value) {
        $attribute = new ExtensionType();
        $attribute->name = $value['name'];
        $attribute->save();
      }
    }
}
