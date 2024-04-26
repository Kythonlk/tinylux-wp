<?php
global $babylux_faq;
?>

<section class="bg-white py-4 sm:py-20 px-4 sm:px-20" id="faq">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full">
            <h2 class="text-3xl font-semibold mb-4">FAQs</h2>
            <div class="space-y-4">
              <?php
              if (!empty($babylux_faq)) {
                  foreach ($babylux_faq as $faq) {
                    echo '<div class="feature-item flex flex-col gap-3 border-b-2 border-sky-100">';
                    echo '<h3 class="text-xl font-bold capitalize">' . $faq['title'] . '</h3>';
                    echo '<p class="text-md text-justify">' . $faq['description'] . '</p>';
                    echo '</div>';
                  }
              }
              ?>
            </div>
        </div>
    </div>
</section>
