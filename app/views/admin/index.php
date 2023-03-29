<?php require APPROOT . '/views/includes/headAdmin.php'; ?>
    <?php require APPROOT . '/views/includes/dashboardMenu.php'; ?>
    
    <section class="dashboard">
        <section id="dashboard-header" class="dashboard-header">
            <h1>Welcome <?php echo $_SESSION['first_name']; ?></h1>
        </section>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>