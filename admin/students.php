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
    <title>Students - BZASA Admin</title>
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

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background: var(--gray-light); min-height: 100vh; }

        .sidebar { position: fixed; left: 0; top: 0; width: 260px; height: 100vh; background: var(--secondary-color); padding: 30px 20px; z-index: 1000; }
        .sidebar-logo { text-align: center; margin-bottom: 40px; }
        .sidebar-logo i { font-size: 2.5rem; color: var(--primary-color); margin-bottom: 10px; }
        .sidebar-logo h2 { color: var(--white); font-size: 1.2rem; font-weight: 700; }
        .sidebar-logo span { color: var(--primary-color); }
        .nav-menu { list-style: none; }
        .nav-item { margin-bottom: 8px; }
        .nav-link { display: flex; align-items: center; padding: 14px 18px; color: rgba(255,255,255,0.7); text-decoration: none; border-radius: 10px; transition: var(--transition); }
        .nav-link:hover, .nav-link.active { background: var(--primary-color); color: var(--white); }
        .nav-link i { width: 30px; font-size: 1.1rem; }

        .main-content { margin-left: 260px; padding: 30px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; background: var(--white); padding: 20px 30px; border-radius: 15px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .header-left h1 { font-size: 1.8rem; color: var(--secondary-color); }
        .header-left p { color: var(--text-light); }
        .header-right { display: flex; align-items: center; gap: 20px; }
        .btn { padding: 12px 25px; border: none; border-radius: 10px; font-family: 'Poppins', sans-serif; font-weight: 600; cursor: pointer; transition: var(--transition); display: inline-flex; align-items: center; gap: 8px; }
        .btn-primary { background: var(--primary-color); color: var(--white); }
        .btn-primary:hover { background: #e65c00; }
        .btn-secondary { background: var(--gray-medium); color: var(--secondary-color); }
        .btn-secondary:hover { background: #ccc; }
        .btn-danger { background: var(--danger-color); color: var(--white); }
        .btn-danger:hover { background: #c82333; }

        .card { background: var(--white); border-radius: 15px; padding: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 25px; }
        .card-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid var(--gray-medium); }
        .card-header h3 { font-size: 1.2rem; color: var(--secondary-color); }

        .search-bar { display: flex; gap: 15px; margin-bottom: 20px; }
        .search-input { flex: 1; padding: 12px 20px; border: 2px solid var(--gray-medium); border-radius: 10px; font-size: 0.95rem; font-family: 'Poppins', sans-serif; }
        .search-input:focus { outline: none; border-color: var(--primary-color); }
        .filter-select { padding: 12px 20px; border: 2px solid var(--gray-medium); border-radius: 10px; font-family: 'Poppins', sans-serif; background: var(--white); cursor: pointer; }

        .table-wrapper { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid var(--gray-medium); }
        th { background: var(--gray-light); font-weight: 600; color: var(--secondary-color); }
        td { color: var(--text-dark); }
        tr:hover { background: var(--gray-light); }
        .student-avatar { width: 40px; height: 40px; background: var(--primary-color); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: var(--white); font-weight: 600; margin-right: 10px; }
        .status-badge { padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 500; }
        .status-active { background: rgba(40, 167, 69, 0.1); color: var(--success-color); }
        .status-pending { background: rgba(255, 193, 7, 0.1); color: #856404; }
        .status-graduated { background: rgba(0, 102, 204, 0.1); color: var(--tertiary-color); }
        .action-btns { display: flex; gap: 8px; }
        .action-btn { width: 35px; height: 35px; border: none; border-radius: 8px; cursor: pointer; transition: var(--transition); display: flex; align-items: center; justify-content: center; }
        .action-btn.view { background: rgba(0, 102, 204, 0.1); color: var(--tertiary-color); }
        .action-btn.edit { background: rgba(255, 193, 7, 0.1); color: #856404; }
        .action-btn.delete { background: rgba(220, 53, 69, 0.1); color: var(--danger-color); }
        .action-btn:hover { transform: scale(1.1); }

        .pagination { display: flex; justify-content: center; align-items: center; gap: 10px; margin-top: 25px; }
        .page-btn { width: 40px; height: 40px; border: 2px solid var(--gray-medium); background: var(--white); border-radius: 8px; cursor: pointer; transition: var(--transition); font-weight: 600; }
        .page-btn:hover, .page-btn.active { background: var(--primary-color); color: var(--white); border-color: var(--primary-color); }

        @media (max-width: 768px) {
            .sidebar { transform: translateX(-100%); }
            .main-content { margin-left: 0; }
            .search-bar { flex-direction: column; }
        }
    </style>
</head>
<body>
    <nav class="sidebar">
        <div class="sidebar-logo">
            <i class="fas fa-seedling"></i>
            <h2>BZASA <span>Admin</span></h2>
        </div>
        <ul class="nav-menu">
            <li class="nav-item"><a href="dashboard.php" class="nav-link"><i class="fas fa-home"></i> Dashboard</a></li>
            <li class="nav-item"><a href="students.php" class="nav-link active"><i class="fas fa-user-graduate"></i> Students</a></li>
            <li class="nav-item"><a href="programs.php" class="nav-link"><i class="fas fa-graduation-cap"></i> Programs</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-file-alt"></i> Applications</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-envelope"></i> Messages</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-cog"></i> Settings</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <header class="header">
            <div class="header-left">
                <h1>Students Management</h1>
                <p>Manage all registered students</p>
            </div>
            <div class="header-right">
                <button class="btn btn-secondary" onclick="window.location.href='dashboard.php'">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
                <button class="btn btn-primary" onclick="window.location.href='logout.php'">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </div>
        </header>

        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-users"></i> All Students (248)</h3>
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Student
                </button>
            </div>

            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search by name, ID, or email...">
                <select class="filter-select">
                    <option>All Programs</option>
                    <option>Certificate in Agriculture</option>
                    <option>Diploma in Agriculture</option>
                    <option>BSc in Agriculture</option>
                </select>
                <select class="filter-select">
                    <option>All Status</option>
                    <option>Active</option>
                    <option>Pending</option>
                    <option>Graduated</option>
                </select>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Student</th>
                            <th>ID</th>
                            <th>Program</th>
                            <th>Year</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="student-avatar">AK</span>
                                Alpha Kallon
                            </td>
                            <td>BZASA-2024-001</td>
                            <td>Diploma in Agriculture</td>
                            <td>Year 2</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn view" title="View"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn edit" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete" title="Delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="student-avatar">MJ</span>
                                Mary Johnson
                            </td>
                            <td>BZASA-2024-002</td>
                            <td>Certificate in Crop Production</td>
                            <td>Year 1</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn view" title="View"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn edit" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete" title="Delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="student-avatar">SB</span>
                                Sulaiman Bangura
                            </td>
                            <td>BZASA-2023-015</td>
                            <td>BSc in Agribusiness</td>
                            <td>Year 3</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn view" title="View"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn edit" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete" title="Delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="student-avatar">FK</span>
                                Fatmata Kargbo
                            </td>
                            <td>BZASA-2024-003</td>
                            <td>Diploma in Horticulture</td>
                            <td>Year 1</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn view" title="View"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn edit" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete" title="Delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="student-avatar">TK</span>
                                Thomas Koroma
                            </td>
                            <td>BZASA-2021-008</td>
                            <td>BSc in Agriculture</td>
                            <td>Graduated</td>
                            <td><span class="status-badge status-graduated">Graduated</span></td>
                            <td>
                                <div class="action-btns">
                                    <button class="action-btn view" title="View"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn edit" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn delete" title="Delete"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">...</button>
                <button class="page-btn">12</button>
                <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </main>
</body>
</html>