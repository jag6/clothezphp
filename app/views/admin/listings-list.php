<?php require APPROOT . '/views/includes/headAdmin.php'; ?>
    <?php require APPROOT . '/views/includes/adminMenu.php'; ?>
    
    <?php flash('listing_success'); ?></php>
    <div id="create-edit-hidden"></div>
    <section class="admin">
        <section class="db-list-header">
            <h1>Listings List</h1>
            <div class="cpb">
                <button aria-label="Create Listing Button" id="create-btn" class="primary bold">Create Listing</button>
            </div>
        </section>
        <div class="table-small-screen">
            <p>Screen width is too small. Please flip your mobile device over to view table.<p>
        </div>
        <section class="listings-list list">
            <section><h2>Men's</h2></section>
            <table>
                <thead> 
                    <tr>
                        <th>NAME</th>
                        <th>GENDER</th>
                        <th>CATEGORY</th>
                        <th>TYPE</th>
                        <th>PRICE</th>
                        <th>COUNT</th>
                        <th class="tr-action">ACTION</th>
                    </tr>
                </thead>
                <?php if($data['mListings']) : ?>
                    <tbody>
                        <?php foreach($data['mListings'] as $listing) : ?>
                            <tr>
                                <td><?php echo $listing -> name; ?></td>
                                <td><?php echo $listing -> gender; ?></td>
                                <td><?php echo $listing -> category; ?></td>
                                <td><?php echo $listing -> type; ?></td>
                                <td><?php echo $listing -> price; ?></td>
                                <td><?php echo $listing -> count_in_stock; ?></td>
                                <td>
                                    <a href="<?php echo URLROOT; ?>/admin/listing/edit/<?php echo $listing -> _id; ?>" class="edit-btn">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php endif ;?>
            </table>
        </section>
        <section class="listing-list list">
            <section><h2>Women's</h2></section>
            <table>
                <thead> 
                    <tr>
                        <th>NAME</th>
                        <th>GENDER</th>
                        <th>CATEGORY</th>
                        <th>TYPE</th>
                        <th>PRICE</th>
                        <th>COUNT</th>
                        <th class="tr-action">ACTION</th>
                    </tr>
                </thead>
                <?php if($data['wListings']) : ?>
                    <tbody>
                        <?php foreach($data['wListings'] as $listing) : ?>
                            <tr>
                                <td><?php echo $listing -> name; ?></td>
                                <td><?php echo $listing -> gender; ?></td>
                                <td><?php echo $listing -> category; ?></td>
                                <td><?php echo $listing -> type; ?></td>
                                <td><?php echo $listing -> price; ?></td>
                                <td><?php echo $listing -> count_in_stock; ?></td>
                                <td>
                                    <a href="<?php echo URLROOT; ?>/admin/listing/edit/<?php echo $listing -> _id; ?>" class="edit-btn">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php endif; ?>
            </table>
        </section>
        <section class="listing-list list">
            <section><h2>Unisex</h2></section>
            <table>
                <thead> 
                    <tr>
                        <th>NAME</th>
                        <th>GENDER</th>
                        <th>CATEGORY</th>
                        <th>TYPE</th>
                        <th>PRICE</th>
                        <th>COUNT</th>
                        <th class="tr-action">ACTION</th>
                    </tr>
                </thead>
                <?php if($data['uListings']) : ?>
                    <tbody>
                        <?php foreach($data['uListings'] as $listing) : ?>
                            <tr>
                                <td><?php echo $listing -> name; ?></td>
                                <td><?php echo $listing -> gender; ?></td>
                                <td><?php echo $listing -> category; ?></td>
                                <td><?php echo $listing -> type; ?></td>
                                <td><?php echo $listing -> price; ?></td>
                                <td><?php echo $listing -> count_in_stock; ?></td>
                                <td>
                                    <a href="<?php echo URLROOT; ?>/admin/listing/edit/<?php echo $listing -> _id; ?>" class="edit-btn">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>    
                <?php endif ;?>
            </table>
        </section>
        <section id="container-overlay" class="container-overlay">
            <section id="new-listing-container" class="admin-form form-animate">
                <form action="<?php echo URLROOT; ?>/admin/listings-list" method="post" enctype="multipart/form-data" id="new-listing-form" class="form">
                    <button aria-label="New Listing Close Button" type="button" class="admin-form-close-btn">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </button>
                    <section><h2><span><i class="fa-solid fa-plus"></i></span>New Listing</h2></section>
                    <!-- Name -->
                    <label for="name">Name</label>
                    <input type="text" name="name" class="<?php echo (!empty($form_data['name_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['name']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['name_error']; ?></span>
                    <!-- Slug -->
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="<?php echo (!empty($form_data['slug_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['slug']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['slug_error']; ?></span>
                    <!-- Description -->
                    <label for="description">Description</label>
                    <textarea name="description" rows="10" columns="30" class="<?php echo (!empty($form_data['description_error'])) ? 'invalid' : ''; ?>"><?php echo $form_data['description']; ?></textarea>
                    <span class="invalid span-invalid"><?php echo $form_data['description_error']; ?></span>
                    <!-- Gender -->
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" class="<?php echo (!empty($form_data['gender_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['gender']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['gender_error']; ?></span>
                    <!-- Gender Slug -->
                    <label for="gender_slug">Gender Slug</label>
                    <input type="text" name="gender_slug" class="<?php echo (!empty($form_data['gender_slug_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['gender_slug']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['gender_slug_error']; ?></span>
                    <!-- Category -->
                    <label for="category">Category</label>
                    <input type="text" name="category" class="<?php echo (!empty($form_data['category_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['category']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['category_error']; ?></span>
                    <!-- Type -->
                    <label for="type">Type</label>
                    <input type="text" name="type" class="<?php echo (!empty($form_data['type_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['type']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['type_error']; ?></span>
                    <!-- Image Main -->
                    <label for="image_main">Image Main (1200 x 600)</label>
                    <input type="file" name="image_main" class="<?php echo (!empty($form_data['image_main_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['image_main']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['image_main_error']; ?></span>
                    <!-- Price -->
                    <label for="price">Price</label>
                    <input type="number" name="price" class="<?php echo (!empty($form_data['price_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['price']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['price_error']; ?></span>
                    <!-- Count in Stock -->
                    <label for="count_in_stock">Count In Stock</label>
                    <input type="number" name="count_in_stock" class="<?php echo (!empty($form_data['count_in_stock_error'])) ? 'invalid' : ''; ?>" value="<?php echo $form_data['count_in_stock']; ?>">
                    <span class="invalid span-invalid"><?php echo $form_data['count_in_stock_error']; ?></span>
                    <!-- Token -->
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                    <button aria-label="New Banner Submit Button" type="submit" class="primary bold" id="pes-btn">CREATE</button>
                </form>   
            </section>
        </section>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>