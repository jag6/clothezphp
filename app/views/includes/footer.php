</main>
    <?php if(isset($_SESSION['user_id']) && $_SESSION['user_status'] == 'admin') : ?>
    <?php else : ?>
        <button class="open-popup" id="open-popup"><i class="fas fa-phone"></i></button>
        <div id="chat-popup" class="chat-popup">
            <ul class="contact-icons">
                <li><a href=""><i class="fas fa-phone"></i></a></li>
                <li><a href=""><i class="fas fa-envelope"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-discord"></i></a></li>
            </ul>
            <button type="button" class="chat-cancel" id="close-popup">CLOSE</button>
        </div>
    <?php endif; ?>
    <footer>
        <div><p>Clothez&copy; 2023</p></div>
        <nav class="nav">
            <ul class="page-links">
                <li>
                    <a href="<?php echo URLROOT; ?>/about">ABOUT</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/contact">CONTACT</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/privacy-policy">PRIVACY POLICY</a>
                </li>
            </ul>
        </nav>
    </footer>
</body>
</html>