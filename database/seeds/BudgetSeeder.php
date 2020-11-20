<?php

use Illuminate\Database\Seeder;
use App\Budget;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Budget::class, 20)->create();
    }
}
