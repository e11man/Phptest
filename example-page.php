<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Page - Landio Template</title>
    <meta name="description" content="Example page showing how to use the modular Landio navbar component">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/css/global.css">
    
    <!-- jQuery 3.x from CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Include the modular navbar component -->
    <?php include 'assets/components/navbar.php'; ?>

    <!-- Example content -->
    <main style="padding: 120px 20px 40px; min-height: 100vh;">
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <h1 style="margin-bottom: 2rem;">Example Page</h1>
            <p style="color: var(--text-secondary); font-size: 1.125rem; line-height: 1.6;">
                This is an example page demonstrating how to use the modular Landio navbar component. 
                The navbar is loaded from <code>assets/components/navbar.php</code> and can be easily 
                included in any page.
            </p>
            
            <div style="background: var(--secondary-bg); padding: 2rem; border-radius: 12px; margin: 2rem 0; border: 1px solid var(--border-color);">
                <h2 style="color: var(--text-primary); margin-bottom: 1rem;">How to use the modular navbar:</h2>
                <div style="text-align: left; background: var(--primary-bg); padding: 1.5rem; border-radius: 8px; border: 1px solid var(--border-color);">
                    <code style="color: var(--accent-color); font-size: 0.9rem;">
                        &lt;?php include 'assets/components/navbar.php'; ?&gt;
                    </code>
                </div>
            </div>
            
            <p style="color: var(--text-secondary); margin-top: 2rem;">
                The navbar is an exact replica of the original Landio design with GitHub icon, 
                navigation menu, and "Get Template" button.
            </p>
        </div>
    </main>

    <!-- Global JavaScript -->
    <script src="assets/js/global.js"></script>
</body>
</html> 