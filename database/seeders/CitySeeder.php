<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder {

  public function run(): void {
    $cities = ['Anaco', 'Barcelona', 'Barinas', 'Barquisimeto', 'Caracas', 'Ciudad Bolívar', 'Cumaná', 'El Tigre', 'Maracaibo', 'Maracay', 'Mérida', 'Porlamar', 'Puerto La Cruz', 'Puerto Ordaz', 'Valencia'];

    foreach ($cities as $city) {
      City::create(['name' => $city]);
    }
  }
}
