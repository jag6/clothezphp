<?php require APPROOT . '/views/includes/headAdmin.php'; ?>
    <?php require APPROOT . '/views/includes/dashboardMenu.php'; ?>

    <div id="create-edit-hidden"></div>
    <section class="dashboard">
        <section class="db-list-header">
            <h1>Banner List</h1>
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
                <tbody>
                    <?php if($data['banners']) : ?>
                        <?php foreach($data['banners'] as $banner) : ?>
                            <tr>
                                <td><?php echo $banner -> image_main; ?></td>
                                <td><?php echo $banner -> text; ?></td>
                                <td>
                                    <a href="<?php echo URLROOT; ?>/admin/banner/edit/<?php echo $banner -> id; ?>" class="edit-btn">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <section id="container-overlay" class="container-overlay">
            <section id="new-banner-container" class="dashboard-form form-animate">
                <form id="new-banner-form" class="form">
                    <button aria-label="New Banner Close Button" type="button" class="dashboard-form-close-btn">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </button>
                    <section><h2><span><i class="fa-solid fa-plus"></i></span>New Banner</h2></section>
                    <label for="image_main">Image Main (1400 x 672)</label>
                    <input type="text" name="image_main" id="image_main" value="">
                    <input type="file" name="image_file_main" id="image_file_main">
                    <label for="image_description">Image Description</label>
                    <input type="text" name="image_description" id="image_description" value="">
                    <label for="text">Text</label>
                    <input type="text" name="text" id="text" value="">
                    <button type="submit" class="primary bold" id="pes-btn">CREATE</button>
                </form>   
            </section>
        </section>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>