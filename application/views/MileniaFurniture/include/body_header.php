<header>
    <div class="container position-relative">
        <img src="<?= $this->theme_base_url ?>/assets/images/home/light.png" class="position-absolute light-image" alt="light" />
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            <img src="<?= $this->siteLogo ?>" alt="logo" />
                        </a>
                        <div class="navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url() . 'products' ?>"><?= $this->lang->line('Shop'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url() . 'about' ?>"><?= $this->lang->line('About us'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url() . 'contact' ?>"><?= $this->lang->line('Contact Us'); ?></a>
                                </li>
                            </ul>

                            <div class="drp-grp">
                                <?php
                                if (isset($multi_language) && $multi_language[0]->multi_language == '1') :
                                ?> <form class="lng-drp">
                                        <div id="google_translate_element"></div>
                                    </form>
                                <?php
                                endif;
                                ?>
                                <?php if ($this->uri->segment(1) != 'login' && $this->uri->segment(1) != '') { ?>
                                    <?php if ($ApprovedBranch[0]->approved_branch > '1'  && count($branch_nav) > '1') { ?>
                                        <form class="branch-drp">
                                            <select class="vendor_nav" name="Branch" id="Branch">
                                                <option value=""> <?= $this->lang->line('All store') ?></option>
                                                <?php foreach ($branch_nav as $key => $v) : ?>
                                                    <option value="<?= $v->id ?>" <?= (isset($_SESSION['branch_id']) && $v->id == $_SESSION['branch_id']) ? 'selected' : '' ?>>
                                                        <?= $v->name ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </form>
                                    <?php } ?>
                                <?php } ?>
                            </div>

                            <div class="header-search-wrap">
                                <div class="searchbar">
                                    <form>
                                        <div class="input-group">
                                            <?php if ($this->uri->segment(1) == '') { ?>
                                                <input type="text" class="form-control" id='search' data-search_val="" placeholder="Search vendor.." aria-label="Recipient's username">
                                                <button type="button" value="Search" class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                                </button>
                                            <?php } ?>

                                            <?php
                                            if ($this->uri->segment(1) != '') {
                                                $placeholder = $this->lang->line('Search product..');
                                            }
                                            $segment1 = $this->uri->segment(1);

                                            if ($segment1 != '') { ?>

                                                <input type="text" class="form-control search" id='myInput' data-search_val="" placeholder="<?= $placeholder ?>" aria-label="Recipient's username">

                                                <button type="button" value="Search" class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                                </button>

                                            <?php } ?>
                                        </div>
                                    </form>

                                    <button class="mobile-search-toggle">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>

                                    <!-- -----search-btn---- -->
                                    <div class="search-block search-list-blcok">
                                        <form class="search-form">
                                            <?php if ($this->uri->segment(1) == '') { ?>
                                                <input type="text" name="search" id='search' data-search_val="" class="search-input" placeholder="Search vendor..">
                                                <button type="button" value="Search" class="search-here-icon"><i class="fa-solid fa-magnifying-glass "></i></button>
                                            <?php } ?>

                                            <?php
                                            if ($this->uri->segment(1) != '') {
                                                $placeholder = $this->lang->line('Search product..');
                                            }
                                            $segment1 = $this->uri->segment(1);

                                            if ($segment1 != '') { ?>

                                                <input type="text" class="form-control search" name="search" id='myInput' data-search_val="" placeholder="<?= $placeholder ?>" aria-label="Recipient's username">

                                                <button type="button" value="Search" class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                                </button>

                                            <?php } ?>

                                        </form>
                                        <i class="fa-solid fa-xmark main-div-cancel"></i>
                                    </div>
                                </div>

                                <div class="header-account-btn btn-group">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">

                                        <svg width="27" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 18C18.4183 18 22 14.4183 22 10C22 5.58172 18.4183 2 14 2C9.58172 2 6 5.58172 6 10C6 14.4183 9.58172 18 14 18Z" stroke="#CC833D" stroke-width="2.5" stroke-miterlimit="10" />
                                            <path d="M1.875 24.9999C3.10367 22.8713 4.87104 21.1037 6.99944 19.8747C9.12784 18.6458 11.5423 17.9988 14 17.9988C16.4577 17.9988 18.8722 18.6458 21.0006 19.8747C23.129 21.1037 24.8963 22.8713 26.125 24.9999" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu user-login-drop" aria-labelledby="dropdownMenuClickableInside">
                                        <?php if ($this->session->userdata('user_id') == '') { ?>
                                            <li>
                                                <div class="user-login-header">
                                                    <h4><?= $this->lang->line('New Customer') ?>?</h4>
                                                    <a href="<?= base_url() . 'register' ?>"><?= $this->lang->line('Sign up') ?></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-data-wrapper">
                                                    <a href="<?= base_url() . 'login' ?>"><span><i class="fa-solid fa-right-to-bracket"></i></span><?= $this->lang->line('Login Account') ?></a>
                                                </div>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <div class="user-login-header">
                                                    <h4 href="#">
                                                        <?= $_SESSION['user_name'] . ' ' . $_SESSION['user_lname'] ?>
                                                    </h4>
                                                    <!-- ask for which tag DK -->
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-data-wrapper">
                                                    <a href="<?= base_url() . 'users_account/users/account' ?>"><span><i class="fa-sharp fa-solid fa-user"></i></span><?= $this->lang->line('My account') ?></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-data-wrapper">
                                                    <a href="javascript:;" id="logout"><span><i class="fa-solid fa-folder-plus"></i></span><?= $this->lang->line('logout') ?></a>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>

                                <div class="header-card-btn btn-group cart-in <?= (empty($this->cartCount)) ? 'no-itm' : '' ?>">
                                    <button class="dropdown-toggle position-relative cart-new-btn" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <svg width="27" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 22H8.725L5.2375 2.825C5.1967 2.59537 5.07691 2.38722 4.89887 2.23657C4.72082 2.08592 4.49572 2.00223 4.2625 2H2" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10 27C11.3807 27 12.5 25.8807 12.5 24.5C12.5 23.1193 11.3807 22 10 22C8.61929 22 7.5 23.1193 7.5 24.5C7.5 25.8807 8.61929 27 10 27Z" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M23 27C24.3807 27 25.5 25.8807 25.5 24.5C25.5 23.1193 24.3807 22 23 22C21.6193 22 20.5 23.1193 20.5 24.5C20.5 25.8807 21.6193 27 23 27Z" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.8125 17H23.5125C23.98 17.0014 24.433 16.838 24.7919 16.5386C25.1508 16.2391 25.3927 15.8227 25.475 15.3625L27 7H6" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span class="h-badge" id="itemCount" <?= (isset($this->cartCount) && $this->cartCount != 0) ? 'style="display:block"' : 'style="display:none"' ?>><?= (isset($this->cartCount)) ? $this->cartCount : '' ?></span>
                                    </button>
                                    <ul class="dropdown-menu cart-dropdowns" aria-labelledby="dropdownMenuClickableInside">
                                        <div class="dropdown-title">
                                            <h4><?= $this->lang->line('My shopping cart') ?></h4>
                                            <span class="close-btn"><i class="fa-solid fa-xmark"></i></span>
                                        </div>

                                        <div id="updated_list">
                                            <?php if (empty($this->session->userdata('My_cart')) && empty($mycart)) { ?>
                                                <div class="empty-cart-dropdown">

                                                    <div class="empty-cart-img">
                                                        <svg width="146" height="121" viewBox="0 0 146 121" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M100.931 88.8837C97.4708 88.9046 94.1125 90.0544 91.3658 92.1583C88.6192 94.2622 86.6344 97.2053 85.7132 100.54H44.1089C43.3588 97.8432 41.912 95.3912 39.914 93.4305C37.9159 91.4698 35.437 90.0697 32.7263 89.3707V84.6229H104.065C105.054 84.632 106.014 84.2922 106.777 83.6631C107.54 83.034 108.056 82.156 108.235 81.1837L116.635 36.9924C116.752 36.3796 116.731 35.7486 116.576 35.1446C116.42 34.5406 116.132 33.9785 115.734 33.4986C115.336 33.0187 114.836 32.6329 114.271 32.3687C113.706 32.1045 113.089 31.9686 112.465 31.9707H32.8784V12.0967C32.8741 11.188 32.575 10.3051 32.0263 9.58077C31.4775 8.8564 30.7086 8.32956 29.835 8.07933L6.76544 0.714115C6.22198 0.495493 5.63922 0.391275 5.05367 0.407984C4.46812 0.424693 3.89226 0.561964 3.36215 0.81122C2.83203 1.06048 2.35906 1.41638 1.97267 1.85667C1.58628 2.29696 1.29481 2.8122 1.11651 3.37019C0.938199 3.92819 0.876848 4.51694 0.936319 5.0997C0.99579 5.68247 1.17486 6.24671 1.4622 6.75719C1.74955 7.26766 2.13903 7.71339 2.60639 8.06656C3.07375 8.41972 3.60893 8.67274 4.17847 8.80978L24.3263 15.2011V89.5533C21.6775 90.3425 19.2804 91.809 17.3718 93.808C15.4632 95.8071 14.1092 98.2695 13.4434 100.952C12.7776 103.634 12.8233 106.444 13.5757 109.104C14.3281 111.763 15.7612 114.18 17.7336 116.116C19.706 118.053 22.1495 119.441 24.8224 120.143C27.4954 120.846 30.3055 120.84 32.9751 120.124C35.6448 119.409 38.0816 118.009 40.0449 116.064C42.0081 114.118 43.4299 111.695 44.1697 109.032H85.6828C86.4774 111.885 88.054 114.46 90.2347 116.465C92.4154 118.47 95.1133 119.826 98.0236 120.378C100.934 120.931 103.941 120.659 106.705 119.593C109.469 118.527 111.88 116.709 113.665 114.345C115.45 111.982 116.539 109.166 116.809 106.215C117.078 103.265 116.517 100.299 115.19 97.6504C113.862 95.0022 111.821 92.778 109.296 91.2288C106.77 89.6797 103.863 88.8674 100.9 88.8837H100.931ZM52.2349 40.4619H64.4088V76.1315H52.2349V40.4619ZM72.9306 40.4619H85.1046V76.1315H72.9306V40.4619ZM100.657 76.162H93.5959V40.4619H107.444L100.657 76.162ZM43.7437 40.4619V76.1315H32.8784V40.4619H43.7437ZM28.8915 112.197C27.4228 112.197 25.987 111.761 24.7658 110.945C23.5446 110.129 22.5927 108.969 22.0307 107.613C21.4686 106.256 21.3215 104.762 21.6081 103.322C21.8946 101.881 22.6019 100.558 23.6405 99.5196C24.679 98.4811 26.0022 97.7738 27.4428 97.4873C28.8833 97.2007 30.3764 97.3478 31.7333 97.9098C33.0903 98.4719 34.2501 99.4237 35.066 100.645C35.882 101.866 36.3176 103.302 36.3176 104.771C36.3177 105.754 36.1226 106.727 35.7437 107.634C35.3648 108.541 34.8096 109.363 34.1103 110.054C33.411 110.745 32.5816 111.29 31.6701 111.658C30.7585 112.026 29.7831 112.209 28.8002 112.197H28.8915ZM101.022 112.197C99.5532 112.197 98.1175 111.761 96.8963 110.945C95.6751 110.129 94.7232 108.969 94.1612 107.613C93.5991 106.256 93.452 104.762 93.7385 103.322C94.0251 101.881 94.7324 100.558 95.7709 99.5196C96.8095 98.4811 98.1326 97.7738 99.5732 97.4873C101.014 97.2007 102.507 97.3478 103.864 97.9098C105.221 98.4719 106.381 99.4237 107.197 100.645C108.013 101.866 108.448 103.302 108.448 104.771C108.448 105.754 108.253 106.727 107.874 107.634C107.495 108.541 106.94 109.363 106.241 110.054C105.542 110.745 104.712 111.29 103.8 111.658C102.889 112.026 101.913 112.209 100.931 112.197H101.022Z" fill="var(--secondary-color)" />
                                                            <path class="smily-shap-outerborder" d="M120.644 50.2534C132.783 50.2534 142.623 40.2433 142.623 27.8953C142.623 15.5472 132.783 5.53711 120.644 5.53711C108.505 5.53711 98.6648 15.5472 98.6648 27.8953C98.6648 40.2433 108.505 50.2534 120.644 50.2534Z" fill="var(--secondary-color)" stroke="var(--new-svg-color)" stroke-width="5" stroke-miterlimit="10" />
                                                            <path d="M112.686 24.4831C114.151 24.4831 115.339 23.2954 115.339 21.8304C115.339 20.3654 114.151 19.1777 112.686 19.1777C111.221 19.1777 110.033 20.3654 110.033 21.8304C110.033 23.2954 111.221 24.4831 112.686 24.4831Z" fill="white" />
                                                            <path d="M130.118 24.4831C131.583 24.4831 132.771 23.2954 132.771 21.8304C132.771 20.3654 131.583 19.1777 130.118 19.1777C128.653 19.1777 127.465 20.3654 127.465 21.8304C127.465 23.2954 128.653 24.4831 130.118 24.4831Z" fill="white" />
                                                            <path class="smile-shape" d="M128.223 37.3697C126.808 34.6507 124.432 32.8223 121.402 32.8223C118.372 32.8223 115.996 34.6507 114.581 37.3697" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>

                                                    <div class="empty-cart-content">
                                                        <h3>Your Cart is Empty!</h3>
                                                        <p>Must add items on the cart before you procced to check out.</p>
                                                        <a href="<?= base_url() . 'products' ?>" class="cmn-btn">Return to Shop</a>
                                                    </div>

                                                </div>
                                            <?php } else { ?>


                                                <?php if ($this->session->userdata('user_id') == '') { ?>
                                                    <?php if (isset($this->cartCount)) {
                                                        $CI = &get_instance();
                                                        $CI->load->model('common_model');
                                                        $default_product_image = $CI->common_model->default_product_image();
                                                    } ?>
                                                    <?php foreach ($this->session->userdata('My_cart') as $key => $value) {
                                                        $product = $CI->product_model->GetUsersProductInCart($value['product_weight_id']);
                                                        // dd($product);
                                                        $product[0]->image = preg_replace('/\s+/', '%20', $product[0]->image);

                                                        $CI->load->model('api_v3/common_model', 'co_model');
                                                        $isShow = $CI->co_model->checkpPriceShowWithGstOrwithoutGst($CI->session->userdata('vendor_id'));
                                                        if (!empty($isShow) && $isShow[0]->display_price_with_gst == '1') {
                                                            $product[0]->discount_price = $product[0]->without_gst_price;
                                                        }
                                                        if (!file_exists('public/images/' . $CI->folder . 'product_image/' . $product[0]->image) || $product[0]->image == '') {
                                                            if (strpos($product[0]->image, '%20') === true || $product[0]->image == '') {
                                                                $product[0]->image = $default_product_image;
                                                            } else {
                                                                $product[0]->image = $default_product_image;
                                                            }
                                                        }
                                                    ?>
                                                        <li>
                                                            <div class="cart-drop-menu cart-drop-menu-1">
                                                                <div class="drop-img">
                                                                    <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value['product_id']) . '/' . $this->utility->safe_b64encode($value['product_weight_id']) ?>"><img src="<?= base_url() ?>public/images/<?= $this->folder ?>product_image/<?= $product[0]->image ?>" alt=""></a>
                                                                </div>
                                                                <div class="drop-text">
                                                                    <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value['product_id']) . '/' . $this->utility->safe_b64encode($value['product_weight_id']) ?>">
                                                                        <h4><?= $value['product_name'] ?></h4>
                                                                    </a>
                                                                    <p><?= $value['weight_no'] . ' ' . $value['weight_name'] ?></p>
                                                                    <p>Qty : <?= $value['quantity'] ?></p>
                                                                    <h3><?= $this->siteCurrency . ' ' . number_format((float)$product[0]->discount_price, 2, '.', '') ?>
                                                                    </h3>
                                                                </div>
                                                                <div class="cancel-btn remove_item" data-product_id="<?= $value['product_id'] ?>" data-product_weight_id="<?= $value['product_weight_id'] ?>">
                                                                    <a href="#" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php } ?>
                                                    <div>
                                                        <div class="total-amount p-0 notranslate">
                                                            <p><?= $this->lang->line('Total') ?></p>
                                                            <h3 id="nav_subtotal">
                                                                <?= $this->siteCurrency . ' ' . getMycartSubtotal() ?></h3>
                                                        </div>
                                                        <div class="drop-btns p-0">
                                                            <a href="<?= base_url() . 'products/cart_item' ?>" class="view-cart"><?= $this->lang->line('view cart') ?></a>
                                                            <a href="<?= base_url() . 'checkout' ?>" class="checkout"><?= $this->lang->line('checkout') ?></a>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <?php if (isset($this->cartCount)) { ?>
                                                        <?php foreach ($mycart as $key => $value) { ?>
                                                            <li>
                                                                <div class="cart-drop-menu cart-drop-menu-1">
                                                                    <div class="drop-img">
                                                                        <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>"><img src="<?= base_url() ?>public/images/<?= $this->folder ?>product_image/<?= $value->image ?>" alt=""></a>
                                                                    </div>
                                                                    <div class="drop-text">
                                                                        <a href="<?= base_url() . 'products/productDetails/' . $this->utility->safe_b64encode($value->product_id) . '/' . $this->utility->safe_b64encode($value->product_weight_id) ?>">
                                                                            <h4><?= $value->product_name ?></h4>
                                                                        </a>
                                                                        <p><?= $value->weight_no . ' ' . $value->weight_name ?></p>
                                                                        <p>Qty : <?= $value->quantity ?></p>
                                                                        <h3><?= $this->siteCurrency . ' ' . number_format((float)$value->discount_price, 2, '.', '') ?>
                                                                        </h3>
                                                                    </div>
                                                                    <div class="cancel-btn remove_item" data-product_id="<?= $value->product_id ?>" data-product_weight_id="<?= $value->product_weight_id ?>">
                                                                        <a href="#" class="ms-0"><i class="fa-regular fa-circle-xmark"></i></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        <?php } ?>
                                                        <div>
                                                            <div class="total-amount p-0 notranslate">
                                                                <p><?= $this->lang->line('Total') ?></p>
                                                                <h3 id="nav_subtotal">
                                                                    <?= $this->siteCurrency . ' ' . getMycartSubtotal() ?></h3>
                                                            </div>
                                                            <div class="drop-btns p-0">
                                                                <a href="<?= base_url() . 'products/cart_item' ?>" class="view-cart"><?= $this->lang->line('view cart') ?></a>
                                                                <a href="<?= base_url() . 'checkout' ?>" class="checkout"><?= $this->lang->line('checkout') ?></a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="header-search-wrap cart-for-mobile">
                            <div class="header-account-btn btn-group">
                                <button class="dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <svg width="27" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 18C18.4183 18 22 14.4183 22 10C22 5.58172 18.4183 2 14 2C9.58172 2 6 5.58172 6 10C6 14.4183 9.58172 18 14 18Z" stroke="#CC833D" stroke-width="2.5" stroke-miterlimit="10" />
                                        <path d="M1.875 24.9999C3.10367 22.8713 4.87104 21.1037 6.99944 19.8747C9.12784 18.6458 11.5423 17.9988 14 17.9988C16.4577 17.9988 18.8722 18.6458 21.0006 19.8747C23.129 21.1037 24.8963 22.8713 26.125 24.9999" stroke="#CC833D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                                </ul>
                            </div>

                            <div class="header-card-btn btn-group">
                                <button class="dropdown-toggle position-relative" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <img src="<?= $this->theme_base_url ?>/assets/images/cart.svg" alt="" />

                                    <span class="h-badge" <?= (isset($this->cartCount) && $this->cartCount != 0) ? 'style="display:block"' : 'style="display:none"' ?>><?= (isset($this->cartCount)) ? $this->cartCount : '' ?></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>