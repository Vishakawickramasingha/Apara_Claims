<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>SLEECIC APARA | Dashboard</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

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

/* ================= HEADER ================= */
.topbar {
    background: linear-gradient(135deg,#670647,#8a0a5e);
    color: white;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 10px rgba(0,0,0,.15);
}

.brand {
    font-size: 22px;
    font-weight: 600;
}

.top-icons button {
    background: transparent;
    border: none;
    color: #fff;
    font-size: 18px;
    margin-left: 15px;
    cursor: pointer;
}

.logout-btn {
    background: #fff;
    color: #670647;
    border: none;
    padding: 6px 12px;
    border-radius: 20px;
    font-weight: 600;
}

/* ================= LAYOUT ================= */
.layout {
    display: flex;
}

.content {
    flex: 1;
    padding: 25px;
}

/* Container for all stats */
.stats {
    display: flex;
    gap: 20px; /* space between cards */
    justify-content: center;
    flex-wrap: wrap; /* responsive wrap on smaller screens */
    margin: 40px 0;
}

/* Individual card styling */
.stats .card {
    background: linear-gradient(135deg, #cb0a8b, #e690dc); /* gradient background */
    color: white;
    padding: 30px 20px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    text-align: center;
    flex: 1 1 150px; /* responsive sizing */
    transition: transform 0.3s, box-shadow 0.3s;
}

/* Card hover effect */
.stats .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.3);
}

/* Card title */
.stats .card h6 {
    font-size: 18px;
    margin-bottom: 10px;
    font-weight: 600;
    letter-spacing: 0.5px;
}

/* Number inside card */
.stats .card .number {
    font-size: 32px;
    font-weight: 700;
}


/* ================= ACTIONS ================= */
.actions {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0,0,0,.1);
    margin-bottom: 25px;
}

.actions h3 {
    margin-bottom: 15px;
}

.buttons {
    display: flex;
    gap: 15px;
}

.btn-primary {
    background: #970a68;
    color: #fff;
    padding: 10px 18px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 600;
}

.btn {
    padding: 10px 18px;
    border-radius: 30px;
    border: none;
    cursor: pointer;
    color: white;
}

.btn.dark { background: #2c3e50; }
.btn.yellow { background: #f1c40f; color:#333; }

/* ================= TABLE ================= */
.table-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0,0,0,.1);
    overflow: hidden;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background: #b80a7e;
    color: white;
    padding: 12px;
}

td {
    padding: 12px;
    border-bottom: 1px solid #eee;
}

/* ================= MODAL ================= */
.modal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.6);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: white;
    width: 420px;
    padding: 20px;
    border-radius: 16px;
    animation: pop .3s ease;
}

@keyframes pop {
    from { transform: scale(.8); opacity:0 }
    to { transform: scale(1); opacity:1 }
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.close {
    cursor: pointer;
    font-size: 22px;
}

label {
    font-weight: 600;
    margin-top: 10px;
    display: block;
}

input, select {
    width: 100%;
    padding: 8px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.form-actions {
    margin-top: 15px;
    display: flex;
    justify-content: space-between;
}

/* ================= FOOTER ================= */
.footer {
    margin-top: 30px;
    text-align: center;
    font-size: 13px;
    color: #670647;
}
</style>
</head>

<body>

<header class="topbar">
    <div class="brand">SLEECIC APARA Claims Management System</div>
    <div class="top-icons">
        <button><i class="fa fa-bell"></i></button>
        <button><i class="fa fa-gear"></i></button>

        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button class="logout-btn">Logout</button>
        </form>
    </div>
</header>

<div class="layout">
@include('admin.layouts.navbar')

<main class="content">

<div class="stats">
    <div class="card">
        <h4>Total Claims</h4>
        <div class="number">120</div>
    </div>
    <div class="card">
        <h4>Pending</h4>
        <div class="number">45</div>
    </div>
    <div class="card">
        <h4>Approved</h4>
        <div class="number">60</div>
    </div>
    <div class="card">
        <h4>Rejected</h4>
        <div class="number">15</div>
    </div>
</div>

<div class="actions">
    <h3>Quick Actions</h3>
    <div class="buttons">
        <button class="btn-primary" onclick="openClaimForm()">+ Create New Claim</button>
        <button class="btn dark">View Claims</button>
        <button class="btn yellow">Reports</button>
    </div>
</div>

<div class="table-card">
    <table>
        <thead>
            <tr>
                <th>Claim ID</th>
                <th>Policy No</th>
                <th>Claimant</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<footer class="footer">
    Creater Institutions | Integrity | Ministry Authorities
</footer>

</main>
</div>

<!-- MODAL -->
<div class="modal" id="claimModal">
<div class="modal-content">
<div class="modal-header">
    <h2>Create New Claim</h2>
    <span class="close" onclick="closeClaimForm()">×</span>
</div>

<form>
<label>Claim ID</label>
<input type="text">

<label>Policy No</label>
<input type="text">

<label>Claimant</label>
<input type="text">

<label>Amount</label>
<input type="number">

<label>Status</label>
<select>
<option>Pending</option>
<option>Approved</option>
<option>Rejected</option>
</select>

<div class="form-actions">
<button class="btn-primary">Save</button>
<button type="button" class="btn dark" onclick="closeClaimForm()">Cancel</button>
</div>
</form>
</div>
</div>

<script>
function openClaimForm(){ document.getElementById('claimModal').style.display='flex'; }
function closeClaimForm(){ document.getElementById('claimModal').style.display='none'; }
</script>

</body>
</html>
