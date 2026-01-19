<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pending Claims | APARA</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
        }

        /* Layout */
        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* Content area */
        .page-content {
            flex: 1;
            padding: 20px 30px;
        }

        .card {
            border-radius: 12px;
        }

        /* Status badges */
        .badge-pending {
            background-color: #ffc107;
            color: #000;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        /* Purple Navbar */
        .navbar-purple {
            background-color: #670647;
        }

        /* Summary card style */
        .summary-card {
            background: linear-gradient(135deg, #ffc107, #e7f065);
            color: white;
            text-align: center;
            padding: 25px 15px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .summary-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.3);
        }

        .summary-card h6 {
            font-size: 16px;
            font-weight: 500;
        }

        .summary-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<!-- ================= TOP NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-purple">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">APARA Claims</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-sm btn-light">Logout</button>
        </form>
    </div>
</nav>

<!-- ================= MAIN LAYOUT ================= -->
<div class="layout">

    <!-- SIDEBAR -->
    @include('admin.layouts.navbar')

    <!-- PAGE CONTENT -->
    <div class="page-content">

        <h3 class="mb-4">Pending Claims</h3>

        <!-- SUMMARY CARD -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="summary-card">
                    <h6>Total Pending Claims</h6>
                    <h3>30</h3>
                </div>
            </div>
        </div>

        <!-- FILTER -->
        <div class="card shadow-sm p-3 mb-3">
            <div class="row g-2">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Search by Claim ID or Customer">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>Claim Type</option>
                        <option>Medical</option>
                        <option>Vehicle</option>
                        <option>Life</option>
                        <option>Property</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-warning w-100">Filter</button>
                </div>
            </div>
        </div>

        <!-- PENDING CLAIMS TABLE -->
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Claim ID</th>
                            <th>Customer Name</th>
                            <th>Policy No</th>
                            <th>Claim Type</th>
                            <th>Claim Amount</th>
                            <th>Status</th>
                            <th>Submitted Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#CLM010</td>
                            <td>Nimal Perera</td>
                            <td>POL78901</td>
                            <td>Medical</td>
                            <td>LKR 120,000</td>
                            <td><span class="badge-pending">Pending</span></td>
                            <td>2026-01-05</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                                <button class="btn btn-sm btn-outline-success">Approve</button>
                                <button class="btn btn-sm btn-outline-danger">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#CLM011</td>
                            <td>Saman Silva</td>
                            <td>POL45678</td>
                            <td>Vehicle</td>
                            <td>LKR 300,000</td>
                            <td><span class="badge-pending">Pending</span></td>
                            <td>2026-01-06</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                                <button class="btn btn-sm btn-outline-success">Approve</button>
                                <button class="btn btn-sm btn-outline-danger">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#CLM012</td>
                            <td>Kamal Fernando</td>
                            <td>POL11223</td>
                            <td>Life</td>
                            <td>LKR 500,000</td>
                            <td><span class="badge-pending">Pending</span></td>
                            <td>2026-01-07</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                                <button class="btn btn-sm btn-outline-success">Approve</button>
                                <button class="btn btn-sm btn-outline-danger">Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- PAGINATION -->
                <nav>
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link">Previous</a></li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">Next</a></li>
                    </ul>
                </nav>

            </div>
        </div>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
