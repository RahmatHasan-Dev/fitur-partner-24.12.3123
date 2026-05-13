<?php
namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            Partner::create([
                'name'     => $faker->company . ' ' . $faker->word,
                'logo_url' => 'https://placehold.co/200x200?text=' . urlencode($faker->word),
            ]);
        }
    }
}
