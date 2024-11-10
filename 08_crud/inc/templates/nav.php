<?php
session_start(); // Ensure the session is started
$base_url = 'http://localhost/project-h/08_crud/';
?>


<div>
    <div class="float-left">
        <p style="display:flex; justify-content: space-evenly;">
            <a href="<?php echo $base_url . 'index.php?task=report'; ?>">All Students</a> |
            <a href="<?php echo $base_url . 'index.php?task=add'; ?>">Add New Student</a> |
            <a href="<?php echo $base_url . 'index.php?task=seed'; ?>">Seed</a>
        </p>
    </div>
    <div class="float-right">   
        <?php if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']): ?>
            <a href="<?php echo htmlspecialchars($base_url); ?>auth.php">Log In</a>
        <?php else: ?>
            <a href="<?php echo htmlspecialchars($base_url); ?>auth.php?logout=1">Log Out</a>
        <?php endif; ?>
    </div>
</div>