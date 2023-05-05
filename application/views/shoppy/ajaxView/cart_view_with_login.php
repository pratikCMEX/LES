    <div class="drop-cart-title">
        <h3 class="cart-title"><?= $this->lang->line('My shopping cart') ?></h3>
        <a href="#" class="close-btn"><i class="fa-solid fa-xmark"></i></a>
    </div>
    <div class="cart-drop-wrapper">
        <?php
        foreach ($my_cart as $key => $value) {
            $product_image = $this->product_model->GetUsersProductInCart($value->product_weight_id);
            if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                $value->discount_price = $product_image[0]->without_gst_price;
            }

            $product_image[0]->image = preg_replace('/\s+/', '%20', $product_image[0]->image);
            if (!file_exists('public/images/' . $this->folder . 'product_image/' . $product_image[0]->image) || $product_image[0]->image == '') {
                if (strpos($product_image[0]->image, '%20') === true || $product_image[0]->image == '') {
                    $product_image[0]->image = $default_product_image;
                } else {
                    $product_image[0]->image = $default_product_image;
                }
            }
            $value->product_name = $product_image[0]->name;
            $value->image = $product_image[0]->image;
            $encode_id =  $this->utility->safe_b64encode($value->product_id);
            $varient_id =  $this->utility->safe_b64encode($value->product_weight_id);
        ?>

            <div class="cart-drop-menu cart-drop-menu-1">
                <div class="drop-img">
                    <a href="<?= base_url() . 'products/productDetails/' . $encode_id . '/' . $varient_id ?>">
                        <img src="<?= base_url() ?>public/images/<?= $this->folder ?>product_image/<?= $value->image ?>" alt=""></a>
                </div>
                <div class="drop-text">
                    <h4><a href="<?= base_url() . 'products/productDetails/' . $encode_id . '/' . $varient_id ?>"><?= $value->product_name ?></a>
                    </h4>
                    <p>Qty : <?= $value->quantity ?></p>
                    <h3> <?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?></h3>

                </div>
                <div class="cancel-btn remove_item" data-product_id="<?= $value->product_id ?>" data-product_weight_id="<?= $value->product_weight_id ?>">
                    <a href="#"><i class="fa-solid fa-xmark"></i></a>
                </div>
            </div>

        <?php } ?>
    </div>

    <div class="total-amount">
        <p><?= $this->lang->line('Total') ?></p>
        <h3><?= $this->siteCurrency . ' ' . getMycartSubtotal() ?></h3>
    </div>

    <div class="drop-btns">
        <a href="<?= base_url() . 'products/cart_item' ?>" class="view-cart"><?= $this->lang->line('view cart') ?></a>
        <a href="<?= base_url() . 'checkout' ?>" class="checkout "><?= $this->lang->line('checkout') ?></a>
    </div>