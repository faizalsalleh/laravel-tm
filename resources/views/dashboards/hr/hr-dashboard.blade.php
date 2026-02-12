@extends('layouts.hr-layout')

@section('content')
    <div class="mb-4">
        <h2 class="fw-bold">HR Overview</h2>
        <p class="text-secondary">Welcome back to the Human Resources management portal.</p>
    </div>

    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-secondary small text-uppercase fw-semibold mb-3">Total Employees</div>
                    <div class="fs-2 fw-bold mb-1">124</div>
                    <div class="progress progress-thin mt-2" style="height: 4px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-secondary small text-uppercase fw-semibold mb-3">Active Users</div>
                    <div class="fs-2 fw-bold mb-1">86</div>
                    <div class="progress progress-thin mt-2" style="height: 4px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-secondary small text-uppercase fw-semibold mb-3">Reports Generated</div>
                    <div class="fs-2 fw-bold mb-1">12</div>
                    <div class="progress progress-thin mt-2" style="height: 4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-secondary small text-uppercase fw-semibold mb-3">Pending Leaves</div>
                    <div class="fs-2 fw-bold mb-1">15</div>
                    <div class="progress progress-thin mt-2" style="height: 4px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection