<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tag::factory(5)->create();

        Tag::create([
            'id' => 1,
            'name' => 'Dewasa',
        ]);

        Tag::create([
            'id' => 2,
            'name' => 'Anak Anak',
        ]);

        Tag::create([
            'id' => 3,
            'name' => 'Batuk',
        ]);

        Tag::create([
            'id' => 4,
            'name' => 'Perawatan Kulit',
        ]);

        Tag::create([
            'id' => 5,
            'name' => 'Perawatan Wajah',
        ]);

        Tag::create([
            'id' => 6,
            'name' => 'Diet dan Nutrisi',
        ]);

        Tag::create([
            'id' => 7,
            'name' => 'Jerawat',
        ]);

        Tag::create([
            'id' => 8,
            'name' => 'Asma',
        ]);

        Tag::create([
            'id' => 9,
            'name' => 'Kesehatan Bayi',
        ]);

        Tag::create([
            'id' => 10,
            'name' => 'MPASI',
        ]);

        Tag::create([
            'id' => 11,
            'name' => 'Kehamilan',
        ]);

        Tag::create([
            'id' => 12,
            'name' => 'Kecantikan',
        ]);

        Tag::create([
            'id' => 13,
            'name' => 'Vitamin D',
        ]);
    }
}
