<?php require APPROOT . '/views/includes/head.php'; ?>

    <section class="form-container">
        <form action="<?php echo URLROOT; ?>/register" method="post" id="register-form" class="form">
            <section><h1><span><i class="fa-solid fa-user-plus"></i></span>Create New Account</h1></section>
            <div class="form-field">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="<?php echo (!empty($form_data['first_name_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['first_name']; ?>">
                <span class="invalid span-invalid"><?php echo $form_data['first_name_error']; ?></span>
            </div>
            <div class="form-field">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="<?php echo (!empty($form_data['last_name_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['last_name']; ?>">
                <span class="invalid span-invalid"><?php echo $form_data['last_name_error']; ?></span>
            </div>
            <div class="form-field">
                <label for="username">Username</label>
                <input type="text" name="username" class="<?php echo (!empty($form_data['username_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['username']; ?>">
                <span class="invalid span-invalid"><?php echo $form_data['username_error']; ?></span>
            </div>
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" name="email" class="<?php echo (!empty($form_data['email_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['email']; ?>">
                <span class="invalid span-invalid"><?php echo $form_data['email_error']; ?></span>
            </div>
            <div class="form-field">
                <label for="password">Password</label>
                <input type="password" name="password" class="<?php echo (!empty($form_data['password_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['password']; ?>">   
                <span class="invalid span-invalid"><?php echo $form_data['password_error']; ?></span> 
            </div>
            <input type="hidden" name="register_token" value="<?php echo $form_data['register_token']; ?>">
            <button aria-label="Login Button" type="submit" class="primary">REGISTER</button>    
            <div>
                <p>Already have an account?</p><a href="<?php echo URLROOT; ?>/login"><span>Log In</span></a>
            </div>
        </form>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>