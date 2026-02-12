<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Department;
use App\Models\EmploymentDetail;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get Departments
        $hrDept = Department::where('name', 'Human Resources')->first();
        $itDept = Department::where('name', 'Information Technology')->first();
        $financeDept = Department::where('name', 'Finance')->first();

        // 1. Admin User
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'gender' => 'male',
            'dob' => '1990-01-01',
            'race' => 'Malay',
            'religion' => 'Islam',
            'address' => '123 Admin St, Admin City',
            'phone' => '0123456789',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'user_type' => 1,
        ]);

        // 2. HR Manager
        $hrManager = User::create([
            'first_name' => 'HR',
            'last_name' => 'Manager',
            'gender' => 'female',
            'dob' => '1985-05-15',
            'race' => 'Chinese',
            'religion' => 'Christian',
            'address' => '456 HR Ave, HR City',
            'phone' => '0198765432',
            'email' => 'hr@example.com',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        // Add Employment Detail for HR Manager
        if ($hrDept) {
            EmploymentDetail::create([
                'user_id' => $hrManager->id,
                'department_id' => $hrDept->id,
                'salary' => 5000,
                'epf_no' => 'EPF123456',
                'socso_nu' => 'SOCSO123456',
                'taxid' => 'TAX123456',
                'number_holiday_leave' => 20,
                'number_sick_leave' => 14,
            ]);
        }

        // 3. Employees
        $employees = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@example.com',
                'dept' => $itDept,
                'salary' => 3500,
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane@example.com',
                'dept' => $financeDept,
                'salary' => 3800,
            ],
            [
                'first_name' => 'Alice',
                'last_name' => 'Johnson',
                'email' => 'alice@example.com',
                'dept' => $itDept,
                'salary' => 3200,
            ],
        ];

        foreach ($employees as $empData) {
            $user = User::create([
                'first_name' => $empData['first_name'],
                'last_name' => $empData['last_name'],
                'gender' => 'male', // Simplified for seeding
                'dob' => '1995-01-01',
                'race' => 'Indian',
                'religion' => 'Hindu',
                'address' => '789 Employee Rd, Work City',
                'phone' => '01122334455',
                'email' => $empData['email'],
                'password' => Hash::make('password'),
                'user_type' => 3,
            ]);

            if ($empData['dept']) {
                EmploymentDetail::create([
                    'user_id' => $user->id,
                    'department_id' => $empData['dept']->id,
                    'salary' => $empData['salary'],
                    'epf_no' => 'EPF' . rand(100000, 999999),
                    'socso_nu' => 'SOCSO' . rand(100000, 999999),
                    'taxid' => 'TAX' . rand(100000, 999999),
                    'number_holiday_leave' => 14,
                    'number_sick_leave' => 14,
                ]);
            }
        }
    }
}
