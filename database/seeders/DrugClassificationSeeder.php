<?php

namespace Database\Seeders;

use App\Models\DrugClassification;
use Illuminate\Database\Seeder;

class DrugClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DrugClassification::create([
            'image' => 'images/drug-class/obat-bebas.png',
            'name' => 'Obat Bebas',
        ]);

        DrugClassification::create([
            'image' => 'images/drug-class/obat-bebas-terbatas.png',
            'name' => 'Obat Bebas Terbatas',
        ]);

        DrugClassification::create([
            'image' => 'images/drug-class/obat-keras.png',
            'name' => 'Obat Keras',
        ]);

        DrugClassification::create([
            'image' => 'images/drug-class/obat-golongan-narkotika.png',
            'name' => 'Obat Golongan Narkotika',
        ]);

        DrugClassification::create([
            'image' => 'images/drug-class/obat-fitofarmaka.png',
            'name' => 'Obat Fitofarmaka',
        ]);

        DrugClassification::create([
            'image' => 'images/drug-class/obat-oht.png',
            'name' => 'Obat Herbal Terstandar (OHT)',
        ]);

        DrugClassification::create([
            'image' => 'images/drug-class/obat-herbal.png',
            'name' => 'Obat Herbal (Jamu)',
        ]);
    }
}
