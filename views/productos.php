<!--Vista productos principal-->
<div class="d-flex flex-wrap justify-content-center">
<?php
for ($i = 0; $i < 8; $i++) {


?>
<!--Cards de los productos - comida-->
    <div class="m-2">
        <div class="card" style="width: 18rem;">
            <img src="../access/img/fastFood/food_<?php echo $i; ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text text-center">Delicious fast food</p>
            </div>
        </div>
    </div>
<?php

}
?>
</div>