@extends('layouts.admin-layout')

@section('content')
    <h4 class="mb-4">Admin Dashboard</h4>
    
    <div class="row">
        <!-- Total Users -->
        <div class="col-sm-6 col-lg-4">
            <div class="card mb-4 text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fs-4 fw-semibold">{{ $totalUsers }}</div>
                        <div>Total Users</div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-transparent text-white p-0" type="button">
                            <i class="cil-people" style="font-size: 24px;"></i>
                        </button>
                    </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    <!-- Placeholder for chart or extra design -->
                </div>
            </div>
        </div>

        <!-- Salary Growth Chart -->
        <div class="col-sm-6 col-lg-4">
            <div class="card mb-4 text-white bg-info">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fs-4 fw-semibold">Salary Growth</div>
                        <div>Monthly Trend</div>
                    </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas id="salaryChart" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>

        <!-- Average Salary -->
        <div class="col-sm-6 col-lg-4">
            <div class="card mb-4 text-white bg-warning">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fs-4 fw-semibold">RM {{ $averageSalary }}</div>
                        <div>Average Salary</div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-transparent text-white p-0" type="button">
                            <i class="cil-money" style="font-size: 24px;"></i>
                        </button>
                    </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('salaryChart');
            if (ctx) {
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: @json($labels),
                        datasets: [{
                            label: 'Total Salary',
                            data: @json($data),
                            borderColor: 'rgba(255, 255, 255, 0.8)',
                            backgroundColor: 'transparent',
                            borderWidth: 2,
                            pointBackgroundColor: 'rgba(255, 255, 255, 0.8)',
                            pointBorderColor: 'transparent',
                            tension: 0.4
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        maintainAspectRatio: false,
                        scales: {
                            x: {
                                display: false
                            },
                            y: {
                                display: false
                            }
                        },
                        elements: {
                            point: {
                                radius: 0,
                                hitRadius: 10,
                                hoverRadius: 4
                            }
                        }
                    }
                });
            }
        });
    </script>
    @endpush
@endsection