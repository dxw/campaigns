<?php
//
// Content Block ### Statistic
//
if (get_row_layout() == 'statistic') : ?>

<div class="statistic content-block">
    <div class="row">
        <div class="data">
            <?php if (get_sub_field('data_value')) : ?>
                <h2><?php the_sub_field('data_value'); ?></h2>
            <?php endif; ?>

            <?php if (get_sub_field('data_value_text')) : ?>
                <p><?php the_sub_field('data_value_text'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>