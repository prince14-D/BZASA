<?php
session_start();
if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BZASA Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF6B00;
            --secondary-color: #333333;
            --tertiary-color: #0066CC;
            --white: #FFFFFF;
            --gray-light: #f5f5f5;
            --gray-medium: #ddd;
            --text-dark: #333333;
            --text-light: #666666;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--gray-light);
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 260px;
            height: 100vh;
            background: var(--secondary-color);
            padding: 30px 20px;
            transition: var(--transition);
            z-index: 1000;
        }

        .sidebar-logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .sidebar-logo i {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .sidebar-logo h2 {
            color: var(--white);
            font-size: 1.2rem;
            font-weight: 700;
        }

        .sidebar-logo span {
            color: var(--primary-color);
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            margin-bottom: 8px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 14px 18px;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            border-radius: 10px;
            transition: var(--transition);
        }

        .nav-link:hover, .nav-link.active {
            background: var(--primary-color);
            color: var(--white);
        }

        .nav-link i {
            width: 30px;
            font-size: 1.1rem;
        }

        /* Main Content */
        .main-content {
            margin-left: 260px;
            padding: 30px;
        }

        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background: var(--white);
            padding: 20px 30px;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .header-left h1 {
            font-size: 1.8rem;
            color: var(--secondary-color);
        }

        .header-left p {
            color: var(--text-light);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
        }

        .user-details h4 {
            font-size: 0.95rem;
            color: var(--secondary-color);
        }

        .user-details span {
            font-size: 0.8rem;
            color: var(--text-light);
        }

        .btn-logout {
            padding: 10px 20px;
            background: var(--danger-color);
            color: var(--white);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-logout:hover {
            background: #c82333;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .stat-icon.students {
            background: rgba(255, 107, 0, 0.1);
            color: var(--primary-color);
        }

        .stat-icon.programs {
            background: rgba(0, 102, 204, 0.1);
            color: var(--tertiary-color);
        }

        .stat-icon.applications {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }

        .stat-icon.messages {
            background: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
        }

        .stat-card h3 {
            font-size: 2rem;
            color: var(--secondary-color);
            margin-bottom: 5px;
        }

        .stat-card p {
            color: var(--text-light);
        }

        /* Content Grid */
        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 25px;
        }

        .card {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--gray-medium);
        }

        .card-header h3 {
            font-size: 1.2rem;
            color: var(--secondary-color);
        }

        .card-header a {
            color: var(--tertiary-color);
            text-decoration: none;
            font-size: 0.9rem;
        }

        /* Recent Applications */
        .application-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 12px;
            background: var(--gray-light);
        }

        .application-avatar {
            width: 45px;
            height: 45px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            margin-right: 15px;
        }

        .application-info {
            flex: 1;
        }

        .application-info h4 {
            font-size: 0.95rem;
            color: var(--secondary-color);
            margin-bottom: 3px;
        }

        .application-info p {
            font-size: 0.85rem;
            color: var(--text-light);
        }

        .application-status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status-pending {
            background: rgba(255, 193, 7, 0.1);
            color: #856404;
        }

        .status-approved {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }

        .status-new {
            background: rgba(0, 102, 204, 0.1);
            color: var(--tertiary-color);
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            gap: 12px;
        }

        .action-btn {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            background: var(--gray-light);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: var(--transition);
            text-align: left;
            font-family: 'Poppins', sans-serif;
        }

        .action-btn:hover {
            background: var(--primary-color);
            color: var(--white);
        }

        .action-btn i {
            width: 35px;
            height: 35px;
            background: var(--white);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary-color);
        }

        .action-btn:hover i {
            background: rgba(255,255,255,0.2);
            color: var(--white);
        }

        .action-btn span {
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .main-content {
                margin-left: 0;
            }
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="sidebar-logo">
            <i class="fas fa-seedling"></i>
            <h2>BZASA <span>Admin</span></h2>
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link active">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="students.php" class="nav-link">
                    <i class="fas fa-user-graduate"></i>
                    Students
                </a>
            </li>
            <li class="nav-item">
                <a href="programs.php" class="nav-link">
                    <i class="fas fa-graduation-cap"></i>
                    Programs
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-file-alt"></i>
                    Applications
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    Messages
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-cog"></i>
                    Settings
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="header">
            <div class="header-left">
                <h1>Dashboard</h1>
                <p>Welcome back! Here's what's happening at BZASA.</p>
            </div>
            <div class="header-right">
                <div class="user-info">
                    <div class="user-avatar">AD</div>
                    <div class="user-details">
                        <h4>Admin User</h4>
                        <span>Administrator</span>
                    </div>
                </div>
                <button class="btn-logout" onclick="window.location.href='logout.php'">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </div>
        </header>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon students">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>248</h3>
                <p>Total Students</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon programs">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>12</h3>
                <p>Active Programs</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon applications">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3>45</h3>
                <p>New Applications</p>
            </div>
            <div class="stat-card">
                <div class="stat-icon messages">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>18</h3>
                <p>Unread Messages</p>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="content-grid">
            <!-- Recent Applications -->
            <div class="card">
                <div class="card-header">
                    <h3><i class="fas fa-clock"></i> Recent Applications</h3>
                    <a href="#">View All <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="application-item">
                    <div class="application-avatar">AK</div>
                    <div class="application-info">
                        <h4>Alpha Kallon</h4>
                        <p>Diploma in Agriculture • Applied 2 days ago</p>
                    </div>
                    <span class="application-status status-new">New</span>
                </div>
                <div class="application-item">
                    <div class="application-avatar">MJ</div>
                    <div class="application-info">
                        <h4>Mary Johnson</h4>
                        <p>Certificate in Crop Production • Applied 3 days ago</p>
                    </div>
                    <span class="application-status status-pending">Pending</span>
                </div>
                <div class="application-item">
                    <div class="application-avatar">SB</div>
                    <div class="application-info">
                        <h4>Sulaiman Bangura</h4>
                        <p>BSc in Agribusiness • Applied 5 days ago</p>
                    </div>
                    <span class="application-status status-approved">Approved</span>
                </div>
                <div class="application-item">
                    <div class="application-avatar">FK</div>
                    <div class="application-info">
                        <h4>Fatmata Kargbo</h4>
                        <p>Diploma in Horticulture • Applied 1 week ago</p>
                    </div>
                    <span class="application-status status-pending">Pending</span>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card">
                <div class="card-header">
                    <h3><i class="fas fa-bolt"></i> Quick Actions</h3>
                </div>
                <div class="quick-actions">
                    <button class="action-btn" onclick="window.location.href='students.php'">
                        <i class="fas fa-user-plus"></i>
                        <span>Add New Student</span>
                    </button>
                    <button class="action-btn" onclick="window.location.href='programs.php'">
                        <i class="fas fa-plus-circle"></i>
                        <span>Add New Program</span>
                    </button>
                    <button class="action-btn">
                        <i class="fas fa-file-upload"></i>
                        <span>Process Applications</span>
                    </button>
                    <button class="action-btn">
                        <i class="fas fa-chart-line"></i>
                        <span>View Reports</span>
                    </button>
                    <button class="action-btn" onclick="window.location.href='../index.php'">
                        <i class="fas fa-external-link-alt"></i>
                        <span>View Website</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>