<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WalletReccuringTransfer;

class WalletReccuringTransfersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WalletReccuringTransfer::factory()->count(5)->create();
    }
}
