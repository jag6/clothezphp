<?php require APPROOT . '/views/includes/headAdmin.php'; ?>
    <?php require APPROOT . '/views/includes/adminMenu.php'; ?>
    
    <section class="admin">
        <section id="admin-header" class="admin-header">
            <h1>Welcome Admin <?php echo $_SESSION['user_username']; ?></h1>
        </section>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>