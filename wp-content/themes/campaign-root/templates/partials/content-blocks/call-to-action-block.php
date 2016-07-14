<?php
//
// Content Block ### Call to Action
//
if( get_row_layout() == 'call_to_action') : ?>
<?php if( get_sub_field('background_colour')) : ?>
<div class="call-to-action-block content-block" style="background-colour:<?php the_sub_field('background_colour'); ?>;">
<?php else : ?>
<div class="call-to-action-block content-block">
<?php endif; ?>
    <div class="row">
        <div class="call-to-action">

            <?php if( get_sub_field('title')) : ?><h2><?php the_sub_field('title'); ?></h2><?php endif; ?>

            <div class="buttons">
                <a href="<?php the_sub_field('button_url'); ?>" class="button" <?php if( get_sub_field('ga_event_tracking') == true): ?> onclick="ga('send', 'event', '<?php the_sub_field('event_category'); ?>', '<?php the_sub_field('event_action'); ?>', '<?php the_sub_field('event_label'); ?>');"<?php endif; ?>><?php the_sub_field('button_text'); ?></a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>