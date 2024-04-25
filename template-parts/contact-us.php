<?php
global $babylux_faq;
?>

<section class="bg-white py-4 sm:py-20 px-4 sm:px-20">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full md:w-1/2 pr-8 mb-6 md:mb-0">
            <h2 class="text-3xl font-semibold mb-4">Contact Us</h2>
            <form action="#" method="POST" class="space-y-4">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="form-input w-full rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="form-input w-full">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="5" class="form-textarea w-full rounded-lg border border-input"></textarea>
                </div>
                <button type="submit" class="bg-sky-300 text-white px-4 py-2 rounded hover:bg-blue-600">Send Message</button>
            </form>
        </div>
        <div class="w-full md:w-1/2">
            <h2 class="text-3xl font-semibold mb-4">FAQs</h2>
            <div class="space-y-4">
              <?php

              if (!empty($babylux_faq)) {
                  foreach ($babylux_faq as $faq) {
                    echo '<div class="feature-item flex flex-col gap-3 border-b-2 border-sky-100">';
                    echo '<h3 class="font-bold capitalize">' . $faq['title'] . '</h3>';
                    echo '<p class="text-sm text-justify">' . $faq['description'] . '</p>';
                    echo '</div>';
                  }
              }
              ?>
            </div>
        </div>
    </div>
</section>
