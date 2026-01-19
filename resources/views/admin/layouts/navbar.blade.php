<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Claims Dashboard</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background: #f5f7fa;
            font-family: "Segoe UI", sans-serif;
        }

        .layout {
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 240px;
            min-height: 100vh;
            background: linear-gradient(180deg, #670647, #8b0a5c);
            color: white;
            box-shadow: 4px 0 15px rgba(0,0,0,0.25);
            flex-shrink: 0;
        }

        .sidebar ul {
            list-style: none;
            padding: 25px 15px;
            margin: 0;
        }

        .sidebar li {
            padding: 14px 16px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 14px;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
        }

        .sidebar li i {
            background: rgba(255,255,255,0.15);
            padding: 10px;
            border-radius: 10px;
            min-width: 36px;
            text-align: center;
        }

        .sidebar a,
        .sidebar span {
            color: white;
            text-decoration: none;
            font-size: 15px;
            flex: 1;
        }

        .sidebar li:hover {
            background: rgba(255,255,255,0.18);
            transform: translateX(6px);
        }

        .section-title {
            margin: 25px 0 10px;
            font-size: 13px;
            opacity: 0.8;
        }

        /* QUICK ACTION BUTTON */
        .notification {
            background: rgba(255, 255, 255, 0.12);
            border-left: 4px solid #ff4d4d;
        }

        .notification:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        .notification i {
            background: rgba(255, 77, 77, 0.85);
        }

        /* MAIN CONTENT */
        .content {
            flex: 1;
            padding: 30px;
        }

        /* CARD FIX */
        .overdue-card {
            white-space: normal;
            word-break: normal;
        }
    </style>
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <ul>
            <li>
                <i class="fa-solid fa-house"></i>   
                <span>Claims Home</span>
            </li>

            <li>
                <i class="fa-solid fa-file"></i>
                <a href="/TotalClaimsIndex">Total Claims</a>
            </li>

            <li>
                <i class="fa-solid fa-clock"></i>
                <a href="/PendingClaimsIndex">Pending Claims</a>
            </li>

            <li>
                <i class="fa-solid fa-check"></i>
                <a href="/ApprovedClaimsIndex">Approved Claims</a>
            </li>

            <li>
                <i class="fa-solid fa-xmark"></i>
                <a href="/RejectedClaimsIndex">Rejected Claims</a>
            </li>

           <!-- QUICK ACTIONS -->
<li class="section-title">Quick Actions</li>

<li class="notification">
    <i class="fa-solid fa-bell"></i>
    <a href="/OverdueLoanIndex">Overdue Loan Notification</a>
</li>

<li class="notification">
    <a href="/LodgementOfClaimIndex">Lodgement of Claim</a>
</li>
        </ul>
    </aside>

   

</div>

</body>
</html>
