<?php

use App\Models\Offering;
use App\Models\Purchase;
use Illuminate\Database\Seeder;

class OfferingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Offering::class, 50)->create()->each(function ($offering) {
            $offering->purchase()->save(factory(Purchase::class)->make());
        });
    }
}
