<?php require APPROOT . '/views/includes/headAdmin.php'; ?>
    <?php require APPROOT . '/views/includes/adminMenu.php'; ?>

    <?php flash('banner_success'); ?></php>
    <div id="create-edit-hidden"></div>
    <section class="admin">
        <section class="db-list-header">
            <h1>Banners List</h1>
            <div class="cpb">
                <button aria-label="Create Banner Button" id="create-btn" class="primary bold">Create Banner</button>
            </div>
        </section>
        <div class="table-small-screen">
            <p>Screen width is too small. Please flip your mobile device over to view table.<p>
        </div>
        <div class="banner-list list">
            <table>
                <thead> 
                    <tr>
                        <th>IMAGE</th>
                        <th>TEXT</th>
                        <th class="tr-action">ACTION</th>
                    </tr>
                </thead>
                <?php if($data['banners']) : ?>
                    <tbody>
                        <?php foreach($data['banners'] as $banner) : ?>
                            <tr>
                                <td><?php echo $banner -> image; ?></td>
                                <td><?php echo $banner -> text; ?></td>
                                <td>
                                    <a href="<?php echo URLROOT; ?>/admin/banner/edit/<?php echo $banner -> id; ?>" class="edit-btn">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
        <section id="container-overlay" class="container-overlay">
            <section id="new-banner-container" class="admin-form form-animate">
                <form action="<?php echo URLROOT; ?>/admin/banners-list" method="post" enctype="multipart/form-data" id="new-banner-form" class="form">
                    <button aria-label="New Banner Close Button" type="button" class="admin-form-close-btn">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </button>
                    <section><h2><span><i class="fa-solid fa-plus"></i></span>New Banner</h2></section>
                    <!-- Image -->
                    <label for="image">Image (1400 x 672)</label>
                    <input type="file" name="image" class="<?php echo (!empty($form_data['image_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['image']; ?>">
                    <!-- Image Description -->
                    <label for="image_description">Image Description</label>
                    <input type="text" name="image_description" class="<?php echo (!empty($form_data['image_description_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['image_description']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['image_description_error']; ?></span>
                    <!-- Text -->
                    <label for="text">Text</label>
                    <input type="text" name="text" class="<?php echo (!empty($form_data['text_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['text']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['text_error']; ?></span>
                    <!-- Token -->
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                    <button aria-label="New Banner Submit Button" type="submit" class="primary bold" id="pes-btn">CREATE</button>
                </form>   
            </section>
        </section>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>