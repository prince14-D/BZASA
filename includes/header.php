<?php
/**
 * BZASA - Bendu Zinnah International School of Agriculture
 * Header Template
 */

if (!defined('BZASA_DOCUMENT_STARTED')) {
    define('BZASA_DOCUMENT_STARTED', true);
    $page_title = $page_title ?? 'BZASA - Bendu Zinnah International School of Agriculture';
    $page_description = $page_description ?? 'Bendu Zinnah International School of Agriculture provides practical agricultural training, entrepreneurship education, and student support.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php } ?>

<header>
    <div class="header-container">
        <a href="index.php" class="logo">
            <div class="logo-icon">
                <i class="fas fa-seedling"></i>
            </div>
            <div class="logo-text">
                <h1>BZASA</h1>
                <span>Bendu Zinnah School of Agriculture</span>
            </div>
        </a>
        
        <button class="mobile-menu-btn" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
        
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="programs.php">Programs</a></li>
                <li><a href="admissions.php">Admissions</a></li>
                <li><a href="student-life.php">Student Life</a></li>
                <li><a href="ai-assistant.php">AI Assistant</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        
        <div class="header-cta">
            <a href="admissions.php" class="btn-primary">Apply Now</a>
        </div>
    </div>
</header>
