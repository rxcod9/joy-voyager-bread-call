<?php

namespace Joy\VoyagerBreadCall\Database\Seeders;

use Joy\VoyagerBreadCall\Models\Call;
use Illuminate\Database\Seeder;

class CallsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Call::query()->count() > 0) {
            return false;
        }

        $count = 20;
        Call::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Call ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Call Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
