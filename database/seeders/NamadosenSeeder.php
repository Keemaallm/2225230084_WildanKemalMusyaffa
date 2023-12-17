<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NamadosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('namadosens')->insert([
            'namadosen' => 'Ihsanudin, M.Si.',
            'nidn' => '0018027904',
            'nip' => '197902162010121001',
            'jabatan' => 'Lektor'
        ]);
    }
}
