<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            [
                'name' => 'PT Universal Big Data',
                'phone' => '082345678901',
                'address' => 'Jl. Jawa No. 25, Malang',
            ],
            [
                'name' => 'PT HUmma Teknologi Indonesia',
                'phone' => '083456789012',
                'address' => 'Jl. Kalimantan No. 15, Malang',
            ],
            [
                'name' => 'PT Amazon Web Service',
                'phone' => '084567890123',
                'address' => 'Jl. Mastrip No. 30, Jember',
            ],
        ];

        DB::table('suppliers')->insert($suppliers);
    }
}
