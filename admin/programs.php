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
    <title>Programs - BZASA Admin</title>
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

        .card { background: var(--white); border-radius: 15px; padding: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 25px; }
        .card-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid var(--gray-medium); }
        .card-header h3 { font-size: 1.2rem; color: var(--secondary-color); }

        .programs-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; }
        .program-card { background: var(--gray-light); border-radius: 15px; overflow: hidden; transition: var(--transition); }
        .program-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .program-header { padding: 20px; background: var(--secondary-color); color: var(--white); display: flex; align-items: center; gap: 15px; }
        .program-icon { width: 50px; height: 50px; background: var(--primary-color); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; }
        .program-type { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; opacity: 0.8; }
        .program-title { font-size: 1.1rem; font-weight: 600; }
        .program-body { padding: 20px; }
        .program-info { display: flex; justify-content: space-between; margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid var(--gray-medium); }
        .program-info-item { text-align: center; }
        .program-info-item i { color: var(--primary-color); margin-bottom: 5px; }
        .program-info-item span { display: block; font-size: 0.85rem; color: var(--text-light); }
        .program-info-item strong { font-size: 1.1rem; color: var(--secondary-color); }
        .program-desc { font-size: 0.9rem; color: var(--text-light); margin-bottom: 15px; line-height: 1.6; }
        .program-actions { display: flex; gap: 10px; }
        .action-btn { flex: 1; padding: 10px; border: none; border-radius: 8px; cursor: pointer; transition: var(--transition); display: flex; align-items: center; justify-content: center; gap: 8px; font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 0.85rem; }
        .action-btn.edit { background: var(--tertiary-color); color: var(--white); }
        .action-btn.delete { background: var(--danger-color); color: var(--white); }
        .action-btn:hover { transform: scale(1.02); }

        .stats-row { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 25px; }
        .stat-item { background: var(--white); padding: 20px; border-radius: 12px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .stat-item i { font-size: 2rem; color: var(--primary-color); margin-bottom: 10px; }
        .stat-item h4 { font-size: 2rem; color: var(--secondary-color); margin-bottom: 5px; }
        .stat-item p { color: var(--text-light); font-size: 0.9rem; }

        @media (max-width: 1200px) { .programs-grid { grid-template-columns: repeat(2, 1fr); } .stats-row { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 768px) {
            .sidebar { transform: translateX(-100%); }
            .main-content { margin-left: 0; }
            .programs-grid { grid-template-columns: 1fr; }
            .stats-row { grid-template-columns: 1fr; }
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
            <li class="nav-item"><a href="students.php" class="nav-link"><i class="fas fa-user-graduate"></i> Students</a></li>
            <li class="nav-item"><a href="programs.php" class="nav-link active"><i class="fas fa-graduation-cap"></i> Programs</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-file-alt"></i> Applications</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-envelope"></i> Messages</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-cog"></i> Settings</a></li>
        </ul>
    </nav>

    <main class="main-content">
        <header class="header">
            <div class="header-left">
                <h1>Programs Management</h1>
                <p>Manage all academic programs</p>
            </div>
            <div class="header-right">
                <button class="btn btn-secondary" onclick="window.location.href='dashboard.php'">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Program
                </button>
            </div>
        </header>

        <div class="stats-row">
            <div class="stat-item">
                <i class="fas fa-graduation-cap"></i>
                <h4>12</h4>
                <p>Total Programs</p>
            </div>
            <div class="stat-item">
                <i class="fas fa-award"></i>
                <h4>3</h4>
                <p>Certificates</p>
            </div>
            <div class="stat-item">
                <i class="fas fa-certificate"></i>
                <h4>4</h4>
                <p>Diplomas</p>
            </div>
            <div class="stat-item">
                <i class="fas fa-user-graduate"></i>
                <h4>248</h4>
                <p>Enrolled Students</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-graduation-cap"></i> All Programs</h3>
            </div>

            <div class="programs-grid">
                <!-- Certificate Programs -->
                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon"><i class="fas fa-leaf"></i></div>
                        <div>
                            <div class="program-type">Certificate</div>
                            <div class="program-title">Certificate in Agriculture</div>
                        </div>
                    </div>
                    <div class="program-body">
                        <div class="program-info">
                            <div class="program-info-item">
                                <i class="fas fa-clock"></i>
                                <strong>1 Year</strong>
                                <span>Duration</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-users"></i>
                                <strong>45</strong>
                                <span>Students</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>$500</strong>
                                <span>Tuition</span>
                            </div>
                        </div>
                        <p class="program-desc">Foundation program covering essential agricultural principles, crop production, and basic farm management.</p>
                        <div class="program-actions">
                            <button class="action-btn edit"><i class="fas fa-edit"></i> Edit</button>
                            <button class="action-btn delete"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon"><i class="fas fa-seedling"></i></div>
                        <div>
                            <div class="program-type">Certificate</div>
                            <div class="program-title">Certificate in Crop Production</div>
                        </div>
                    </div>
                    <div class="program-body">
                        <div class="program-info">
                            <div class="program-info-item">
                                <i class="fas fa-clock"></i>
                                <strong>1 Year</strong>
                                <span>Duration</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-users"></i>
                                <strong>38</strong>
                                <span>Students</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>$450</strong>
                                <span>Tuition</span>
                            </div>
                        </div>
                        <p class="program-desc">Specialized program focusing on modern crop production techniques, pest management, and harvest optimization.</p>
                        <div class="program-actions">
                            <button class="action-btn edit"><i class="fas fa-edit"></i> Edit</button>
                            <button class="action-btn delete"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon"><i class="fas fa-tractor"></i></div>
                        <div>
                            <div class="program-type">Certificate</div>
                            <div class="program-title">Certificate in Farm Machinery</div>
                        </div>
                    </div>
                    <div class="program-body">
                        <div class="program-info">
                            <div class="program-info-item">
                                <i class="fas fa-clock"></i>
                                <strong>6 Months</strong>
                                <span>Duration</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-users"></i>
                                <strong>25</strong>
                                <span>Students</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>$350</strong>
                                <span>Tuition</span>
                            </div>
                        </div>
                        <p class="program-desc">Hands-on training in agricultural machinery operation, maintenance, and safety procedures.</p>
                        <div class="program-actions">
                            <button class="action-btn edit"><i class="fas fa-edit"></i> Edit</button>
                            <button class="action-btn delete"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>

                <!-- Diploma Programs -->
                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon"><i class="fas fa-seedling"></i></div>
                        <div>
                            <div class="program-type">Diploma</div>
                            <div class="program-title">Diploma in Agriculture</div>
                        </div>
                    </div>
                    <div class="program-body">
                        <div class="program-info">
                            <div class="program-info-item">
                                <i class="fas fa-clock"></i>
                                <strong>2 Years</strong>
                                <span>Duration</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-users"></i>
                                <strong>62</strong>
                                <span>Students</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>$800</strong>
                                <span>Tuition/Year</span>
                            </div>
                        </div>
                        <p class="program-desc">Comprehensive two-year program covering advanced agricultural science, animal husbandry, and farm business management.</p>
                        <div class="program-actions">
                            <button class="action-btn edit"><i class="fas fa-edit"></i> Edit</button>
                            <button class="action-btn delete"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon"><i class="fas fa-tree"></i></div>
                        <div>
                            <div class="program-type">Diploma</div>
                            <div class="program-title">Diploma in Horticulture</div>
                        </div>
                    </div>
                    <div class="program-body">
                        <div class="program-info">
                            <div class="program-info-item">
                                <i class="fas fa-clock"></i>
                                <strong>2 Years</strong>
                                <span>Duration</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-users"></i>
                                <strong>35</strong>
                                <span>Students</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>$750</strong>
                                <span>Tuition/Year</span>
                            </div>
                        </div>
                        <p class="program-desc">Study fruit and vegetable production, landscape design, nursery management, and post-harvest technology.</p>
                        <div class="program-actions">
                            <button class="action-btn edit"><i class="fas fa-edit"></i> Edit</button>
                            <button class="action-btn delete"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon"><i class="fas fa-cow"></i></div>
                        <div>
                            <div class="program-type">Diploma</div>
                            <div class="program-title">Diploma in Animal Science</div>
                        </div>
                    </div>
                    <div class="program-body">
                        <div class="program-info">
                            <div class="program-info-item">
                                <i class="fas fa-clock"></i>
                                <strong>2 Years</strong>
                                <span>Duration</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-users"></i>
                                <strong>28</strong>
                                <span>Students</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>$800</strong>
                                <span>Tuition/Year</span>
                            </div>
                        </div>
                        <p class="program-desc">Learn livestock management, animal nutrition, breeding techniques, and veterinary assistance.</p>
                        <div class="program-actions">
                            <button class="action-btn edit"><i class="fas fa-edit"></i> Edit</button>
                            <button class="action-btn delete"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>

                <!-- Degree Programs -->
                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon"><i class="fas fa-university"></i></div>
                        <div>
                            <div class="program-type">Bachelor's</div>
                            <div class="program-title">BSc in Agriculture</div>
                        </div>
                    </div>
                    <div class="program-body">
                        <div class="program-info">
                            <div class="program-info-item">
                                <i class="fas fa-clock"></i>
                                <strong>4 Years</strong>
                                <span>Duration</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-users"></i>
                                <strong>15</strong>
                                <span>Students</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>$1,200</strong>
                                <span>Tuition/Year</span>
                            </div>
                        </div>
                        <p class="program-desc">Four-year degree program with specializations in crop science, animal science, or agribusiness.</p>
                        <div class="program-actions">
                            <button class="action-btn edit"><i class="fas fa-edit"></i> Edit</button>
                            <button class="action-btn delete"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon"><i class="fas fa-chart-line"></i></div>
                        <div>
                            <div class="program-type">Bachelor's</div>
                            <div class="program-title">BSc in Agribusiness</div>
                        </div>
                    </div>
                    <div class="program-body">
                        <div class="program-info">
                            <div class="program-info-item">
                                <i class="fas fa-clock"></i>
                                <strong>4 Years</strong>
                                <span>Duration</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-users"></i>
                                <strong>12</strong>
                                <span>Students</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>$1,000</strong>
                                <span>Tuition/Year</span>
                            </div>
                        </div>
                        <p class="program-desc">Combine agricultural knowledge with business skills for careers in agricultural enterprise management.</p>
                        <div class="program-actions">
                            <button class="action-btn edit"><i class="fas fa-edit"></i> Edit</button>
                            <button class="action-btn delete"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <div class="program-icon"><i class="fas fa-flask"></i></div>
                        <div>
                            <div class="program-type">Bachelor's</div>
                            <div class="program-title">BSc in Agricultural Science</div>
                        </div>
                    </div>
                    <div class="program-body">
                        <div class="program-info">
                            <div class="program-info-item">
                                <i class="fas fa-clock"></i>
                                <strong>4 Years</strong>
                                <span>Duration</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-users"></i>
                                <strong>10</strong>
                                <span>Students</span>
                            </div>
                            <div class="program-info-item">
                                <i class="fas fa-dollar-sign"></i>
                                <strong>$1,200</strong>
                                <span>Tuition/Year</span>
                            </div>
                        </div>
                        <p class="program-desc">Research-focused degree with emphasis on agricultural biotechnology and sustainable farming research.</p>
                        <div class="program-actions">
                            <button class="action-btn edit"><i class="fas fa-edit"></i> Edit</button>
                            <button class="action-btn delete"><i class="fas fa-trash"></i> Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>