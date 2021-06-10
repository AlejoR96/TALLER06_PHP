<!--Vista productos principal-->
<div class="d-flex flex-wrap justify-content-center">
<?php
for ($i = 0; $i < 8; $i++) {


?>
    <div class="m-2">
        <div class="card" style="width: 18rem;">
            <img src="../access/img/fastFood/food_<?php echo $i; ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
<?php

}
?>
</div>