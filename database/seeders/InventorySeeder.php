<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */    public function run()
    {
        $inventories = [
            ['name' => 'Inventory 1'],
            ['name' => 'Inventory 2'],
        ];

        foreach ($inventories as $inventory) {
            Inventory::create($inventory);
        }
    }
}
