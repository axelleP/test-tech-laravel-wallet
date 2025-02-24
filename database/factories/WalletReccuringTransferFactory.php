<?php

declare(strict_types=1);

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WalletReccuringTransfer>
 */
class WalletReccuringTransferFactory extends Factory
{
    public function definition(): array
    {
        return [
            'start_date' => fake()->unixTime(new DateTime('+1 day')),
            'end_date' => fake()->unixTime(new DateTime('+30 day')),
            'frequency_days' => fake()->numberBetween(5, 50),
            'amount' => fake()->numberBetween(1, 100),
            'reason' => fake()->word(),
            'source_id' => 1,
            'target_id' => 2
        ];
    }
}
