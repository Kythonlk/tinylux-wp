<?php
/*
Template Name: Home Page
*/

get_header();


$base_url = get_bloginfo('url');

$services = array(
    array(
        'image' => $base_url . '/wp-content/uploads/2024/04/st4.webp',
        'title' => 'Stroller & Car Seat Cleaning',
        'description' => 'Revitalize your baby\'s gear with our eco-friendly cleaning. We eliminate dirt, stains, and germs from strollers and car seats, ensuring a spotless, safe ride every time.',
        'button_text' => 'More Details'
    ),
    array(
        'image' => $base_url . '/wp-content/uploads/2024/04/st2.webp',
        'title' => 'Gear Repair Services',
        'description' => 'Expert repairs for strollers, car seats, and more. Our technicians use quality parts and techniques to restore your baby gear, ensuring safety and extending its life.',
        'button_text' => 'More Details'
    ),
    array(
        'image' => $base_url . '/wp-content/uploads/2024/04/st8.webp',
        'title' => 'Baby Gear Rental',
        'description' => 'Find the perfect temporary solution with our baby gear rental service. Access high-quality, sanitized strollers, car seats, and travel systems easily and affordably.',
        'button_text' => 'More Details'
    )
);

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
        'title' => 'Professional Cleaning',
        'description' => 'We provide professional cleaning services for baby gear, ensuring they are thoroughly cleaned and sanitized.'
    ),
    array(
        'title' => 'Eco-Friendly Products',
        'description' => 'We use only eco-friendly cleaning products that are safe for your baby and the environment.'
    ),
    array(
        'title' => 'Expert Technicians',
        'description' => 'Our team consists of expert technicians with years of experience in baby gear maintenance and repair.'
    ),
    array(
        'title' => 'Safety Inspections',
        'description' => 'We conduct thorough safety inspections to ensure that your baby gear meets the highest safety standards.'
    ),
    array(
        'title' => 'Convenient Pickup and Delivery',
        'description' => 'We offer convenient pickup and delivery services, making it easy for you to get your baby gear cleaned and maintained without hassle.'
    ),
);

?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
          get_template_part('template-parts/hero-service');
          get_template_part('template-parts/our-services');
          get_template_part('template-parts/why-us');
          get_template_part('template-parts/faq');
          get_template_part('template-parts/contact-us');
    ?>
  </main>
</div>

<?php
get_footer();
?>
