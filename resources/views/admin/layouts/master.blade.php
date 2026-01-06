<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Tahoma, sans-serif;
}

body {
    background: #eef2f7;
}

/* Header */
.topbar {
    background: #670647ff;
    color: white;
    padding: 15px 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.topbar .brand {
    font-size: 25px;
    display: flex;
    gap: 10px;
    align-items: center;
}

.top-icons i {
    margin-left: 15px;
    cursor: pointer;
}

/* Layout */
.layout {
    display: flex;
    height: calc(100vh - 60px);
}

/* Content */
.content {
    flex: 1;
    padding: 25px;
}

/* Stats Cards */
.stats {
    display: flex;
    gap: 20px;
    margin-bottom: 25px;
}

.card {
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 4px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.card h4 {
    color: #555;
    margin-bottom: 10px;
}

.number {
    font-size: 26px;
    font-weight: bold;
}

.badge {
    font-size: 12px;
    padding: 4px 8px;
    border-radius: 12px;
    margin-left: 8px;
    color: white;
}

.badge.yellow { background: #f1c40f; }
.badge.green { background: #2ecc71; }
.badge.red { background: #e74c3c; }

/* Quick Actions */
.actions {
    background: white;
    padding: 20px;
    border-radius: 4px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.actions h3 {
    margin-bottom: 15px;
    color: #333;
}

.buttons {
    display: flex;
    gap: 15px;
}

.btn {
    padding: 10px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: white;
    font-size: 14px;
}

.btn.blue { background: #670647ff; }
.btn.dark { background: #34495e; }
.btn.yellow { background: #f1c40f; color: #333; }

.btn i {
    margin-right: 6px;
}
/* Table */
.table-card {
    background: white;
    border-radius: 4px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #eee;
}

th {
    background: #f4f6f9;
}

/* Footer */
.footer {
    margin-top: 30px;
    text-align: center;
    font-size: 12px;
    color: #670647ff;
}

    </style>
    <meta charset="UTF-8">
    <title>SLEECIC APARA | Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>

<!-- Top Header -->
<header class="topbar">
    <div class="brand">
        <span><b>SLEECIC APARA Claims Management System</b></span>
    </div>






<div class="top-icons">

    <!-- Notification Button -->
    <button class="icon-btn" title="Notifications">
        <i class="fa-solid fa-bell"></i>
    </button>

    <!-- Settings Button -->
    <button class="icon-btn" title="Settings">
        <i class="fa-solid fa-gear"></i>
    </button>

    <!-- Logout Button -->
    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button type="submit" class="logout-btn">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </button>
    </form>

</div>

</header>
<div class="layout">
@include('admin.layouts.navbar')

    <!-- Main Content -->
    <main class="content">

        <!-- Stats -->
        <div class="stats">
            <div class="card blue">
                <h4>Total Claims</h4>
                <div class="number"> <span class="badge yellow"></span></div>
            </div>

            <div class="card green">
                <h4>Pending Claims</h4>
                <div class="number"> <span class="badge green"></span></div>
            </div>

            <div class="card red">
                <h4>Approved Claims</h4>
                <div class="number"> <span class="badge red"></span></div>
            </div>
             <div class="card yellow">
                <h4>Rejected Claims</h4>
                <div class="number"> <span class="badge yellow"></span></div>
            </div>
            
        </div>

        <!-- Quick Actions -->
        <div class="actions">
            <h3>Quick Actions</h3>
            <div class="buttons">
                <button class="btn blue"><i class="fa-solid fa-plus"></i> Create New Claim</button>
                <button class="btn dark"><i class="fa-solid fa-eye"></i> View Claims</button>
                <button class="btn yellow"><i class="fa-solid fa-chart-column"></i> Reports</button>
            </div>
                 <!-- Claims Table -->
        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>Claim ID</th>
                        <th>Policy No</th>
                        <th>Claimant</th>
                        <th>Amount (LKR)</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
         
            </table>
        </div>


        </div>

        <!-- Footer -->
        <footer class="footer">
            Creater Institutions | Integrity | Ministry Authorities
        </footer>

    </main>

</div>

</body>
</html>
