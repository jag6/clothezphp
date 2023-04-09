<?php require APPROOT . '/views/includes/head.php'; ?>

    <?php flash('register_success'); ?></php>
    <section class="form-container">
        <form action="<?php echo URLROOT; ?>/login" method="post" id="login-form" class="form">
            <section><h1><span><i class="fa-solid fa-right-to-bracket"></i></span>LOG IN</h1></section>
            <label for="email">Email</label>
            <input type="email" name="email" class="<?php echo (!empty($form_data['email_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['email']; ?>">
            <span class="invalid span-invalid"><?php echo $form_data['email_error']; ?></span>
            <label for="password">Password</label>
            <input type="password" name="password" class="<?php echo (!empty($form_data['password_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['password']; ?>">   
            <span class="invalid span-invalid"><?php echo $form_data['password_error']; ?></span> 
            <input type="hidden" name="login_token" value="<?php echo $_SESSION['login_token']; ?>">
            <button aria-label="Login Button" type="submit" class="primary">SUBMIT</button>    
            <div>
                <p>New User?</p><a href="<?php echo URLROOT; ?>/register"><span>Create your account</span></a>
            </div>
        </form>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>