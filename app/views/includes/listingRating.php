<div class="listing-rating">
    <div class="rating">
        <span>
            <i class="<?php if($listing -> rating >= 1){
                echo 'fa-solid-fa-star';
            }elseif($listing -> rating >= .5) {
                echo 'fa-solid fa-star-half';
            }else {
                echo 'fa-regular fa-star';
            }
            ;?>"></i>
        </span>
        <span>
        <i class="<?php if($listing -> rating >= 2){
                echo 'fa-solid-fa-star';
            }elseif($listing -> rating >= 1.5) {
                echo 'fa-solid fa-star-half';
            }else {
                echo 'fa-regular fa-star';
            }
            ;?>"></i>
        </span>
        <span>
        <i class="<?php if($listing -> rating >= 3){
                echo 'fa-solid-fa-star';
            }elseif($listing -> rating >= 2.5) {
                echo 'fa-solid fa-star-half';
            }else {
                echo 'fa-regular fa-star';
            }
            ;?>"></i>
        </span>
        <span>
        <i class="<?php if($listing -> rating >= 4){
                echo 'fa-solid-fa-star';
            }elseif($listing -> rating >= 3.5) {
                echo 'fa-solid fa-star-half';
            }else {
                echo 'fa-regular fa-star';
            }
            ;?>"></i>
        </span>
        <span>
        <i class="<?php if($listing -> rating >= 5){
                echo 'fa-solid-fa-star';
            }elseif($listing -> rating >= 4.5) {
                echo 'fa-solid fa-star-half';
            }else {
                echo 'fa-regular fa-star';
            }
            ;?>"></i>
        </span>
        <span><?php if($listing -> num_reviews == 0){
            echo 'No reviews';
        }elseif($listing -> num_reviews == 1){
            echo '1 Review';
        }else{
            echo $listing -> num_reviews; 'Reviews';
        } ;?>
        </span>
    </div>
</div>