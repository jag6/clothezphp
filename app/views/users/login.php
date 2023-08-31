<?php require APPROOT . '/views/includes/head.php'; ?>

    <?php flash('register_success'); ?></php>
    <section class="form-container">
        <form action="<?php echo URLROOT; ?>/login" method="post" id="login-form" class="form">
            <section><h1><span><i class="fa-solid fa-right-to-bracket"></i></span>LOG IN</h1></section>
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $form_data['email']; ?>">
                <span class="<?php echo (!empty($form_data['email_error'])) ? 'invalid span-invalid' : ''; ?>"><?php echo $form_data['email_error']; ?></span>
            </div>
            <div class="form-field">
                <label for="password">Password</label>
                <input type="password" name="password" value="<?php echo $form_data['password']; ?>">   
                <span class="<?php echo (!empty($form_data['password_error'])) ? 'invalid span-invalid' : ''; ?>"><?php echo $form_data['password_error']; ?></span> 
            </div>
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <button aria-label="Login Button" type="submit" class="primary">SUBMIT</button>    
            <div>
                <p>New User?</p><a href="<?php echo URLROOT; ?>/register"><span>Create your account</span></a>
            </div>
        </form>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>