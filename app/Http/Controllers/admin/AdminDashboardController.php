<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Department;
use App\Models\EmploymentDetail;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalDepartments = Department::count();
        $averageSalary = EmploymentDetail::avg('salary');

        // Format average salary to 2 decimal places
        $averageSalary = number_format($averageSalary, 2);

        // Prepare chart data (Last 6 months salary accumulation)
        $chartData = EmploymentDetail::selectRaw('MONTH(created_at) as month, SUM(salary) as total_salary')
            ->where('created_at', '>=', now()->subMonths(6))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $labels = [];
        $data = [];
        // Map month numbers to names
        $monthNames = [1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec'];

        foreach ($chartData as $row) {
            $labels[] = $monthNames[$row->month];
            $data[] = $row->total_salary;
        }

        return view('dashboards.admin.admin-dashboard', compact('totalUsers', 'totalDepartments', 'averageSalary', 'labels', 'data'));
    }
}
