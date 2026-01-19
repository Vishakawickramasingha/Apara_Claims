<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Overdue Loans</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .page-title {
            font-weight: 600;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }
        .table thead {
            background-color: #dc3545;
            color: #fff;
        }
        .badge-overdue {
            background-color: #dc3545;
        }
        .search-box {
            max-width: 300px;
        }
    </style>
</head>

<body>

<div class="container-fluid p-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="page-title text-danger">
            <i class="fa-solid fa-triangle-exclamation me-2"></i> Overdue Loans
        </h3>
        <input type="text" class="form-control search-box" placeholder="Search Loan ID / Name">
    </div>

    <!-- Overdue Loans Table -->
    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Loan ID</th>
                            <th>Customer Name</th>
                            <th>Loan Amount</th>
                            <th>Due Date</th>
                            <th>Overdue Days</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>LN-10021</td>
                            <td>Kasun Perera</td>
                            <td>Rs. 250,000</td>
                            <td>2025-12-15</td>
                            <td class="text-danger fw-bold">30 Days</td>
                            <td>
                                <span class="badge badge-overdue">Overdue</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-warning">
                                    <i class="fa fa-bell"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>LN-10035</td>
                            <td>Saman Fernando</td>
                            <td>Rs. 180,000</td>
                            <td>2025-12-20</td>
                            <td class="text-danger fw-bold">18 Days</td>
                            <td>
                                <span class="badge badge-overdue">Overdue</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-warning">
                                    <i class="fa fa-bell"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>LN-10052</td>
                            <td>Nimali Silva</td>
                            <td>Rs. 320,000</td>
                            <td>2025-12-10</td>
                            <td class="text-danger fw-bold">45 Days</td>
                            <td>
                                <span class="badge badge-overdue">Overdue</span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-warning">
                                    <i class="fa fa-bell"></i>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
