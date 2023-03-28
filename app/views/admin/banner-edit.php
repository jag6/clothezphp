<?php require APPROOT . '/views/includes/headAdmin.php'; ?>

    <div id="create-edit-hidden"></div>
    <section class="dashboard">
        <section id="edit-banner-container" class="dashboard-form edit-df">
            <section class="edit-df-btns">
                <div><a class="back-to-pl" href="/admin/banners-list"><span><i class="fa-solid fa-chevron-left"></i></span>CANCEL</a></div>
                <form action="/admin/banner/edit/<%= banner._id %>?_method=delete" method="post">
                    <button type="submit" class="delete-btn"><span><i class="fa-solid fa-trash"></i></span>DELETE</button>
                </form>
            </section>
            <form id="edit-banner-form" class="form">
                <button type="button" class="dashboard-form-close-btn">
                    <i class="fa-solid fa-circle-xmark"></i>
                </button>
                <section><h2><span><i class="fa-solid fa-pen-to-square"></i></span>Edit Banner</h2></section>
                <label for="image_main">Image Main (1440 x 672)</label>
                <input type="text" name="image_main" id="image_main" value="<%= banner.image_main %>">
                <input type="file" name="image_file_main" id="image_file_main">
                <label for="image_description">Image Description</label>
                <input type="text" name="image_description" id="image_description" value="<%= banner.image_description %>">
                <label for="text">Text</label>
                <input type="text" name="text" id="text" value="<%= banner.text %>">
                <button type="submit" class="primary bold" id="pes-btn">UPDATE</button>
            </form>   
        </section>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>