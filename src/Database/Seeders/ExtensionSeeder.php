<?php

namespace Faceless\Extensions\Database\Seeders;

use Illuminate\Database\Seeder;
use Faceless\Extensions\Models\Extension;

class ExtensionSeeder extends Seeder
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
        'name' => "Catalog",
        'summary' => 'Deals with products, categories & their prices.',
        'description' => "Contains store products/services with prices, descriptions & allows you to create your own custom attributes for your products / services. Can be integrated with other modules/ extensions for better results & best quality performance & value.",
        'minimum_requirements' => "An active subscription",
        'recommendations' => "Can be used with a POS so that products can be checked out",
        'price' => 49.98,
        'subscription_type_id' => 1
      ],
      [
        'name' => "Point Of Sale",
        'summary' => 'Allows cashier to log customer purchases & keep track of sales made',
        'description' => "Gives the store the opportunity to keep track of sales, stock, purchases & transactions",
        'minimum_requirements' => "An active subscription, Requires Catalog installed, Employee Management is required",
        'recommendations' => "You can also add reservations & stock management for better results. especially stock management",
        'price' => 49.98,
        'subscription_type_id' => 1
      ],
      [
        'name' => "Reservations",
        'summary' => 'Allows customer to make reservations, mostly relevant for resturants, salons, car washes.',
        'description' => "Customer or Staff can make reservations to tables, if it is an adult club, it allows you to reserve dancer & a table or private room.",
        'minimum_requirements' => "none",
        'recommendations' => "You can have it with a POS & allow users to reserve a space while placing their order",
        'price' => 32.99,
        'subscription_type_id' => 1
      ],
      [
        'name' => "Employee Management",
        'summary' => 'Allows manager to manage employee data with ease.',
        'description' => "Allows Store to manage employees, employee contracts, roles & permissions",
        'minimum_requirements' => "none",
        'recommendations' => "none",
        'price' => 9.99,
        'subscription_type_id' => 1
      ],
      [
        'name' => "Roster",
        'summary' => 'Allows store managers to create employee rosters or allow system to generate roster automatcally.',
        'description' => "Allows store managers to create employee rosters or allow system to generate roster automatcally. If used with employee management & POS module/extension. It can generate roster based on employee capabilities & effeciency for busy times of the month & less busy times",
        'minimum_requirements' => "employee extension is required",
        'recommendations' => "none",
        'price' => 15.99,
        'subscription_type_id' => 1
      ],
      [
        'name' => "Stock Management",
        'summary' => 'Allows store managers to manage stock.',
        'description' => "Gives the ability to know which stock is soon to expire, stock left, automated orders, broken & damaged stock. Gives you reports on how much was lost from the damaged stock what returns are expected from the stock in the shelves.",
        'minimum_requirements' => "Catalog & POS Modules/Extension",
        'recommendations' => "For automated orders the supplier module is recommended",
        'price' => 59.99,
        'subscription_type_id' => 1
      ],
      [
        'name' => "Suppliers",
        'summary' => 'Allows store managers to manage stock suppliers.',
        'description' => "Allows Store to add, remove & update stock supplies details",
        'minimum_requirements' => "Stock Management",
        'recommendations' => "Auto Stock Order, which is included in the stock management will use the details contained int this module",
        'price' => 9.99,
        'subscription_type_id' => 1
      ],
      [
        'name' => "Invoices",
        'summary' => 'Allows user to create invoices',
        'description' => "Make invoices to supplier or add invoices given by supplier to your store",
        'minimum_requirements' => "Catalog, Stock Management",
        'recommendations' => "No recommendations",
        'price' => 0.00,
        'subscription_type_id' => 3
      ]
    ];

    foreach ($attributes as $key => $value) {
      $attribute = new Extension();
      $attribute->name = $value['name'];
      $attribute->summary = $value['summary'];
      $attribute->description = $value['description'];
      $attribute->minimum_requirements = $value['minimum_requirements'];
      $attribute->recommendations = $value['recommendations'];
      $attribute->price = $value['price'];
      $attribute->subscription_type_id = $value['subscription_type_id'];
      $attribute->save();
    }
  }
}
