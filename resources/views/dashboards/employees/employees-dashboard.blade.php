@extends('layouts.employee-layout')

@section('content')
    <div class="mb-4">
        <h2 class="fw-bold">My Dashboard</h2>
        <p class="text-secondary">Track your reports, applications, and results here.</p>
    </div>

    <div class="row g-4">
        <div class="col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 text-center">
                    <div class="avatar avatar-xl bg-primary-subtle text-primary mb-3 mx-auto d-flex align-items-center justify-content-center">
                        <i class="cil-chart fs-4"></i>
                    </div>
                    <div class="fs-4 fw-bold mb-1">My Reports</div>
                    <p class="text-secondary small mb-3">View and update your monthly reports.</p>
                    <button class="btn btn-primary btn-sm px-4">Open Reports</button>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 text-center">
                    <div class="avatar avatar-xl bg-success-subtle text-success mb-3 mx-auto d-flex align-items-center justify-content-center">
                        <i class="cil-paper-plane fs-4"></i>
                    </div>
                    <div class="fs-4 fw-bold mb-1">New Application</div>
                    <p class="text-secondary small mb-3">Apply for leaves or reimbursements.</p>
                    <button class="btn btn-success btn-sm text-white px-4">Apply Now</button>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 text-center">
                    <div class="avatar avatar-xl bg-info-subtle text-info mb-3 mx-auto d-flex align-items-center justify-content-center">
                        <i class="cil-task fs-4"></i>
                    </div>
                    <div class="fs-4 fw-bold mb-1">My Results</div>
                    <p class="text-secondary small mb-3">Check the status of your requests.</p>
                    <button class="btn btn-info btn-sm text-white px-4">View Results</button>
                </div>
            </div>
        </div>
    </div>
@endsection