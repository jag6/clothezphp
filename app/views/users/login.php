<?php require APPROOT . '/views/includes/head.php'; ?>

    <section class="form-container">
        <?php flash('register_success'); ?></php>
        <form action="<?php echo URLROOT; ?>/login" method="post" id="login-form" class="form">
            <section><h1><span><i class="fa-solid fa-right-to-bracket"></i></span>LOG IN</h1></section>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">   
            <button type="submit" class="primary">SUBMIT</button>    
            <div>
                <p>New User?<p><a href="/users/register"><p>Create your account<p></a>
            </div>
        </form>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>