<?php foreach ($data['news'] as $new) : ?>
    <div class="col-4">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?= $new['name_product'] ?></h4>
        </div>
        <div class="card-body">
            <img class="w-100" height="200px" src="./public/images/<?= $new['img_product'] ?>" alt="">
            <h3 class="card-title pricing-card-title"><?= $new['price_product'] ?> vnd</h3>
        </div>
    </div>
<?php endforeach ?>