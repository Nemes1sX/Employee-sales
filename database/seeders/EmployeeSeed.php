<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
          ['name' => 'Petras', 'surname' => 'Petraitis'],
          ['name' => 'Jonas', 'surname' => 'Jonaitis'],
          ['name' => 'Vardenis', 'surname' => 'Pavardenis']
        ];

        foreach ($employees as $employee) {
            \App\Models\Employee::create($employee);
        }
    }
}
