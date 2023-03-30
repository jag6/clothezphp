<?php require APPROOT . '/views/includes/headAdmin.php'; ?>

    <div id="create-edit-hidden"></div>
    <section class="admin">
        <section id="edit-listing-container" class="admin-form edit-df">
            <section class="edit-df-btns">
                <div><a class="back-to-pl" href="/admin/listings-list"><span><i class="fa-solid fa-chevron-left"></i></span>CANCEL</a></div>
                <form action="/admin/listing/edit/<%= listing._id %>?_method=delete" method="post">
                    <button type="submit" class="delete-btn"><span><i class="fa-solid fa-trash"></i></span>DELETE</button>
                </form>
            </section>
            <form id="edit-listing-form" class="form">
                <section><h2><span><i class="fa-solid fa-pen-to-square"></i></span>Edit Listing</h2></section>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<%= listing.name %>">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"><%= listing.description %></textarea>
                <label for="gender">Gender</label>
                <input type="text" name="gender" id="gender" value="<%= listing.gender %>">
                <label for="category">Category</label>
                <input type="text" name="category" id="category" value="<%= listing.category %>"> 
                <label for="type">Type</label>
                <input type="text" name="type" id="type" value="<%= listing.type %>">
                <label for="image_main">Image Main (1200 x 600)</label>
                <input type="text" name="image_main" id="image_main" value="<%= listing.image_main %>">
                <input type="file" name="image_file_main" id="image_file_main">
                <label for="image_1">Image 1 (Optional)</label>
                <input type="text" name="image_1" id="image_1" value="<%= listing.image_1 %>">
                <input type="file" name="image_file_1" id="image_file_1">
                <label for="image_2">Image 2 (Optional)</label>
                <input type="text" name="image_2" id="image_2" value="<%= listing.image_2 %>">
                <input type="file" name="image_file_2" id="image_file_2">
                <label for="image_3">Image 3 (Optional)</label>
                <input type="text" name="image_3" id="image_3" value="<%= listing.image_3 %>">
                <input type="file" name="image_file_3" id="image_file_3">
                <label for="image_4">Image 4 (Optional)</label>
                <input type="text" name="image_4" id="image_4" value="<%= listing.image_4 %>">
                <input type="file" name="image_file_4" id="image_file_4">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" value="<%= listing.price %>"> 
                <label for="count_in_stock">Count In Stock</label>
                <input type="text" name="count_in_stock" id="count_in_stock" value="<%= listing.count_in_stock %>">
                <button type="submit" class="primary bold" id="pes-btn">UPDATE</button>
            </form>   
        </section>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>