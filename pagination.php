<?php if (get_option('paging_mode') == 'default') : ?>
    <div class="pagination grid">
        <div class="col s1of1">
        <?php previous_posts_link(__('<< Nýrra')); ?>
        <?php next_posts_link(__('Eldra >>')); ?>
        <p class="pagecount"> <?php
            $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            if ($page != 1) {
                echo "Síða " . $page;
            }
        ?></p>
        
        </div>
    </div>
    <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
    <?php else : ?>
    <div id="pagination"><?php next_posts_link(__('FLEIRI GREINAR')); ?></div>
<?php endif; ?>