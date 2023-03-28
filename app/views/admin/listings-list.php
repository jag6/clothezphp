<?php require APPROOT . '/views/includes/headAdmin.php'; ?>
    <?php require APPROOT . '/views/includes/dashboardMenu.php'; ?>

    <div id="create-edit-hidden"></div>
    <section class="dashboard">
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
                <tbody>
                    <?php if($data['mListings']) : ;?>
                        <?php foreach($data['mListings'] as $listing) ;?>
                            <tr>
                                <td><?php echo $listing -> name ; ?></td>
                                <td><?php echo $listing -> gender ; ?></td>
                                <td><?php echo $listing -> category ; ?></td>
                                <td><?php echo $listing -> type ; ?></td>
                                <td><?php echo $listing -> price ; ?></td>
                                <td><?php echo $listing -> count_in_stock ; ?></td>
                                <td>
                                    <a href="<?php echo URLROOT; ?>/admin/listing/edit/<?php echo $listing -> _id ; ?>" class="edit-btn">Edit</a>
                                </td>
                            </tr>
                    <?php endif ;?>
                </tbody>
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
                <tbody>
                    <?php if($data['wListings']) : ;?>
                        <?php foreach($data['wListings'] as $listing) ;?>
                            <tr>
                                <td><?php echo $listing -> name ; ?></td>
                                <td><?php echo $listing -> gender ; ?></td>
                                <td><?php echo $listing -> category ; ?></td>
                                <td><?php echo $listing -> type ; ?></td>
                                <td><?php echo $listing -> price ; ?></td>
                                <td><?php echo $listing -> count_in_stock ; ?></td>
                                <td>
                                    <a href="<?php echo URLROOT; ?>/admin/listing/edit/<?php echo $listing -> _id ; ?>" class="edit-btn">Edit</a>
                                </td>
                            </tr>
                    <?php endif ;?>
                </tbody>
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
                <tbody>
                    <?php if($data['wListings']) : ;?>
                        <?php foreach($data['wListings'] as $listing) ;?>
                            <tr>
                                <td><?php echo $listing -> name ; ?></td>
                                <td><?php echo $listing -> gender ; ?></td>
                                <td><?php echo $listing -> category ; ?></td>
                                <td><?php echo $listing -> type ; ?></td>
                                <td><?php echo $listing -> price ; ?></td>
                                <td><?php echo $listing -> count_in_stock ; ?></td>
                                <td>
                                    <a href="<?php echo URLROOT; ?>/admin/listing/edit/<?php echo $listing -> _id ; ?>" class="edit-btn">Edit</a>
                                </td>
                            </tr>
                    <?php endif ;?>
                </tbody>
            </table>
        </section>
        <section id="container-overlay" class="container-overlay">
            <section id="new-listing-container" class="dashboard-form form-animate">
                <form id="new-listing-form" class="form">
                    <button aria-label="New Listing Close Button" type="button" class="dashboard-form-close-btn">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </button>
                    <section><h2><span><i class="fa-solid fa-plus"></i></span>New Listing</h2></section>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" value=""></textarea>
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" id="gender" value="">
                    <label for="category">Category</label>
                    <input type="text" name="category" id="category" value=""> 
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" value="">  
                    <label for="image_main">Image Main (1200 x 600)</label>
                    <input type="text" name="image_main" id="image_main" value="">
                    <input type="file" name="image_file_main" id="image_file_main">
                    <label for="image_1">Image 1 (Optional)</label>
                    <input type="text" name="image_1" id="image_1" value="">
                    <input type="file" name="image_file_1" id="image_file_1">
                    <label for="image_2">Image 2 (Optional)</label>
                    <input type="text" name="image_2" id="image_2" value="">
                    <input type="file" name="image_file_2" id="image_file_2">
                    <label for="image_3">Image 3 (Optional)</label>
                    <input type="text" name="image_3" id="image_3" value="">
                    <input type="file" name="image_file_3" id="image_file_3">
                    <label for="image_4">Image 4 (Optional)</label>
                    <input type="text" name="image_4" id="image_4" value="">
                    <input type="file" name="image_file_4" id="image_file_4">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" value=""> 
                    <label for="count_in_stock">Count In Stock</label>
                    <input type="text" name="count_in_stock" id="count_in_stock" value="">
                    <button type="submit" class="primary bold" id="pes-btn">CREATE</button>
                </form>   
            </section>
        </section>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>