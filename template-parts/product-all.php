<div class="flex justify-center py-20 px-4 bg-sky-200">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 20
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
        ?>
            <div class="col-span-1 rounded bg-white shadow hover:bg-gray-100">
                <?php if ( $product->is_on_sale() ) : ?>
                    <div class="sale absolute px-3 py-1 m-2 z-10 text-white rounded-lg shadow-lg text-xs bg-red-500">Sale</div>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>" class="block">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('full', ['class' => 'mx-auto w-full rounded-t object-cover']);
                    } ?>
                  <div class="text-left p-4 flex flex-col justify-between h-40 gap-2">
                    <h5 class="text-left underline text-xs">brand</h3>
                    <h3 class="text-left text-sm text-sky-900 md:text-base hover:text-sky-600"><?php the_title(); ?></h3>
                    <p class="text-left text-gray-800 text-sm"><?php echo $product->get_price_html(); ?></p>
                    <p class="mt-3 text-center text-gray-100 bg-sky-600 rounded p-1 text-sm">Add to Cart</p>
                  </div>
                </a>
            </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>
