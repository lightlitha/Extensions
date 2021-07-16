<?php

namespace Faceless\Extensions\Database\Seeders;

use Illuminate\Database\Seeder;
use Faceless\Extensions\Models\ExtensionTypeExtension;

class ExtensionTypeExtensionSeeder extends Seeder
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
          'extension_id' => 1,
          'extension_type_id' => 1
        ],
        [
          'extension_id' => 1,
          'extension_type_id' => 2
        ],
        [
          'extension_id' => 1,
          'extension_type_id' => 3
        ],
        [
          'extension_id' => 1,
          'extension_type_id' => 4
        ],
        [
          'extension_id' => 1,
          'extension_type_id' => 5
        ],
        [
          'extension_id' => 1,
          'extension_type_id' => 6
        ],
        [
          'extension_id' => 2,
          'extension_type_id' => 1
        ],
        [
          'extension_id' => 2,
          'extension_type_id' => 2
        ],
        [
          'extension_id' => 2,
          'extension_type_id' => 3
        ],
        [
          'extension_id' => 2,
          'extension_type_id' => 4
        ],
        [
          'extension_id' => 2,
          'extension_type_id' => 5
        ],
        [
          'extension_id' => 2,
          'extension_type_id' => 6
        ],
        [
          'extension_id' => 3,
          'extension_type_id' => 1
        ],
        [
          'extension_id' => 3,
          'extension_type_id' => 2
        ],
        [
          'extension_id' => 3,
          'extension_type_id' => 3
        ],
        [
          'extension_id' => 3,
          'extension_type_id' => 4
        ],
        [
          'extension_id' => 3,
          'extension_type_id' => 5
        ],
        [
          'extension_id' => 3,
          'extension_type_id' => 6
        ],
        [
          'extension_id' => 4,
          'extension_type_id' => 1
        ],
        [
          'extension_id' => 4,
          'extension_type_id' => 2
        ],
        [
          'extension_id' => 4,
          'extension_type_id' => 3
        ],
        [
          'extension_id' => 4,
          'extension_type_id' => 4
        ],
        [
          'extension_id' => 4,
          'extension_type_id' => 5
        ],
        [
          'extension_id' => 4,
          'extension_type_id' => 6
        ],
        [
          'extension_id' => 5,
          'extension_type_id' => 1
        ],
        [
          'extension_id' => 5,
          'extension_type_id' => 2
        ],
        [
          'extension_id' => 5,
          'extension_type_id' => 3
        ],
        [
          'extension_id' => 5,
          'extension_type_id' => 4
        ],
        [
          'extension_id' => 5,
          'extension_type_id' => 5
        ],
        [
          'extension_id' => 5,
          'extension_type_id' => 6
        ],
        [
          'extension_id' => 6,
          'extension_type_id' => 1
        ],
        [
          'extension_id' => 6,
          'extension_type_id' => 2
        ],
        [
          'extension_id' => 6,
          'extension_type_id' => 3
        ],
        [
          'extension_id' => 6,
          'extension_type_id' => 4
        ],
        [
          'extension_id' => 6,
          'extension_type_id' => 5
        ],
        [
          'extension_id' => 6,
          'extension_type_id' => 6
        ],
        [
          'extension_id' => 7,
          'extension_type_id' => 1
        ],
        [
          'extension_id' => 7,
          'extension_type_id' => 2
        ],
        [
          'extension_id' => 7,
          'extension_type_id' => 3
        ],
        [
          'extension_id' => 7,
          'extension_type_id' => 4
        ],
        [
          'extension_id' => 7,
          'extension_type_id' => 5
        ],
        [
          'extension_id' => 7,
          'extension_type_id' => 6
        ],
        [
          'extension_id' => 8,
          'extension_type_id' => 1
        ],
        [
          'extension_id' => 8,
          'extension_type_id' => 2
        ],
        [
          'extension_id' => 8,
          'extension_type_id' => 3
        ],
        [
          'extension_id' => 8,
          'extension_type_id' => 4
        ],
        [
          'extension_id' => 8,
          'extension_type_id' => 5
        ],
        [
          'extension_id' => 8,
          'extension_type_id' => 6
        ]
      ];
  
      foreach ($attributes as $key => $value) {
        $attribute = new ExtensionTypeExtension();
        $attribute->extension_type_id = $value['extension_type_id'];
        $attribute->extension_id = $value['extension_id'];
        $attribute->save();
      }
    }
}
