<?php
global $services;

?>

<section class="bg-white py-4 sm:py-20">
    <h2 class="text-4xl font-bold text-center mb-8 uppercase">Our Services</h2>
    <div class="grid px-4  md:px-16 w-full grid-cols-1 justify-between gap-6 md:grid-cols-3 md:gap-4 md:pt-10 lg:gap-8 text-black">
    <?php foreach ($services as $service) : ?>
        <div class="group rounded-lg overflow-hidden justify-between shadow-lg hover:shadow-xl transition-transform hover:scale-105 special-class-for-first-project">
            <img
                alt="<?php echo $service['title']; ?>"
                width="600"
                height="400"
                class="aspect-video object-cover object-center group-hover:opacity-75 transition-opacity"
                src="<?php echo $service['image']; ?>"
            />
            <h3 class="text-xl font-semibold px-4 py-4 text-center transition-all"><?php echo $service['title']; ?></h3>
            <hr class="border-gray-300 bg-sky-300 rounded-full w-3/4 m-auto pb-1" />
            <p class="text-base p-8 py-2 text-gray-600 text-justify transition-all"><?php echo $service['description']; ?></p>
            <div class="mx-auto text-center py-4">
                <a href="/services">
                    <button class="inline-flex items-center justify-center rounded-md text-sm font-medium text-white hover:bg-primary/90 h-10 px-4 py-2 bg-sky-300"><?php echo $service['button_text']; ?></button>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</section>
