<?php
global $babylux_features;

$base_url = get_bloginfo('url');
?>

<section class="bg-sky-100/80 p-4 sm:p-20">
<div class="px-4 sm:px-20">
  <h4 class="text-xl text-gray-600 text-left mb-8 uppercase">Why Choose Us?</h2>
  <h2 class="text-4xl font-bold text-left mb-8 uppercase">Discover the Babylux Difference</h2>
</div>

<div class="px-4 sm:px-20">
<div class="flex justify-between h-96 gap-4">
  <img src="<?php echo $base_url; ?>/wp-content/uploads/2024/04/a1.jpeg" alt="Why Choose Us" class="w-full md:w-2/6 object-cover rounded-2xl" />
  <img src="<?php echo $base_url; ?>/wp-content/uploads/2024/04/a2.jpeg" alt="Why Choose Us" class="w-full md:w-4/6 rounded-2xl object-cover" />
</div>
<div class="grid grid-cols-1 justify-between gap-6 md:grid-cols-3 md:gap-4 md:pt-10 lg:gap-8 text-black">

<?php

if (!empty($babylux_features)) {
    foreach ($babylux_features as $feature) {
        echo '<div class="feature-item flex flex-col gap-3 p-4 border-b-2 border-white">';
        echo '<h3 class="text-xl text-gray-500">' . $feature['id'] . '</h3>';
        echo '<h3 class="text-2xl font-bold capitalize">' . $feature['title'] . '</h3>';
        echo '<p class="text-justify">' . $feature['description'] . '</p>';
        echo '</div>';
    }
}
?>
</div>
</div>
</section>
