<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['name' => 'Human Resources', 'location' => 'Level 2'],
            ['name' => 'Information Technology', 'location' => 'Level 3'],
            ['name' => 'Finance', 'location' => 'Level 2'],
            ['name' => 'Operations', 'location' => 'Ground Floor'],
        ];

        foreach ($departments as $dept) {
            Department::create($dept);
        }
    }
}
