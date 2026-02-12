<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leave;
use App\Models\User;
use Carbon\Carbon;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employee = User::where('email', 'john@example.com')->first();
        $approver = User::where('email', 'hr@example.com')->first();

        if ($employee) {
            // Pending Leave
            Leave::create([
                'user_id' => $employee->id,
                'leave_type' => 'Holiday',
                'begin_date' => Carbon::now()->addDays(5),
                'end_date' => Carbon::now()->addDays(7),
                'number_leave' => 3,
                'is_approved' => 0, // Pending
            ]);

            // Approved Leave
            Leave::create([
                'user_id' => $employee->id,
                'leave_type' => 'Sick',
                'begin_date' => Carbon::now()->subDays(10),
                'end_date' => Carbon::now()->subDays(9),
                'number_leave' => 2,
                'is_approved' => 1, // Approved
                'approved_by' => $approver ? $approver->id : null,
            ]);
        }
    }
}
