<?php
/*
Template Name: Home Page
*/

get_header();

$babylux_features = array(
    array(
        'id' => '01',
        'title' => 'Luxury Brands',
        'description' => 'We bring you the finest luxury baby brands for unparalleled quality and style.'
    ),
    array(
        'id' => '02',
        'title' => 'Safety First',
        'description' => 'Only the safest, eco-friendly cleaning products touch your baby gear, guaranteeing a clean environment free of harmful chemicals for your little ones.'
    ),
    array(
        'id' => '03',
        'title' => 'Expertly Curated',
        'description' => 'Our team comprises dedicated professionals with specialized training in baby gear care, ready to restore and maintain your items to the highest standards.'

    ),
    array(
        'id' => '04',
        'title' => 'Comfort & Style',
        'description' => 'Combining comfort with sophistication, our products provide the best of both worlds.'
    ),
    array(
        'id' => '05',
        'title' => 'Exceptional Service',
        'description' => 'We pride ourselves on exceptional customer service, ensuring a seamless shopping experience.'
    ),
    array(
        'id' => '06',
        'title' => 'Luxury Experience',
        'description' => 'At Babylux, we aim to provide a luxurious experience for both parents and their babies.'
    )
);

$babylux_faq = array(
    array(
        'title' => 'Luxury Brands',
        'description' => 'We bring you the finest luxury baby brands for unparalleled quality and style.'
    ),
    array(
        'title' => 'Safety First',
        'description' => 'Only the safest, eco-friendly cleaning products touch your baby gear, guaranteeing a clean environment free of harmful chemicals for your little ones.'
    ),
    array(
        'title' => 'Expertly Curated',
        'description' => 'Our team comprises dedicated professionals with specialized training in baby gear care, ready to restore and maintain your items to the highest standards.'

    ),
    array(
        'title' => 'Comfort & Style',
        'description' => 'Combining comfort with sophistication, our products provide the best of both worlds.'
    ),
);
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
          get_template_part('template-parts/hero-service');
          get_template_part('template-parts/our-services');
          get_template_part('template-parts/why-us');
          get_template_part('template-parts/contact-us');
    ?>
  </main>
</div>

<?php
get_footer();
?>
