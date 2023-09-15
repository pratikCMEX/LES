<html lang="en">

<head>
    <?php
    $this->load->view($_SESSION['template_name'] . '/include/header'); ?>
    <style>
        label.error {
            color: red
        }
    </style>
</head>

<body>
    <section class="loader-main d-none">
        <div class="loader-wrapper">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>
    <header>
        <?php $this->load->view($_SESSION['template_name'] . '/include/body_header'); ?>
    </header>
    <!-- -------mobile-device-navbar--- -->
    <div class="mobile-navbar">
        <?php $this->load->view($_SESSION['template_name'] . '/include/mobile_navbar'); ?>
        <div class="floting-cart-btn">
            <a href="<?= base_url() . 'products/cart_item' ?>" class="mobile-cart-btn"><img src="<?= $this->theme_base_url . '/assets/images/header-cart-icon.svg' ?>" alt="cart">
                <span class="g-badge <?= (isset($this->cartCount) && $this->cartCount != 0) ? 'd-block' : 'd-none' ?>" id="itemCountMobile"><?= (isset($this->cartCount)) ? $this->cartCount : '' ?></span>
            </a>
        </div>
    </div>
    <?php
    if ($this->session->flashdata('myMessage') != '') {
        echo $this->session->flashdata('myMessage');
        // die;
    }  ?>
    <?php $this->load->view($page); ?>
    <footer>
        <?php $this->load->view($_SESSION['template_name'] . '/include/body_footer'); ?>
        <input type="hidden" id="site_lang" value="<?= $_SESSION['site_lang'] ?>">
        <input type="hidden" id="imageFolder" value="<?= $this->folder ?>">
    </footer>
    <?php $this->load->view($_SESSION['template_name'] . '/include/footer'); ?>

    <!-- live chat script -->
    <?php
    if (!empty($liveChat)) {
        $property_id = $liveChat[0]->property_id;
        $widget_id   = $liveChat[0]->widget_id;
    ?>

        <script>
            setInterval(findTawkAndRemove, 100);

            function findTawkAndRemove() {
                let parentElement = document.querySelector("iframe[title*=chat]:nth-child(2)");
                if (parentElement) {
                    let element = parentElement.contentDocument.querySelector(`a[class*=tawk-branding]`);
                    if (element) {
                        element.remove();
                    }
                }
            }
        </script>
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/<?= $property_id ?>/<?= $widget_id ?>';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    <?php } ?>
</body>

</html>