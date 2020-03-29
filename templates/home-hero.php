<?php
$pageBackground = get_field('background_hero');
$pageBackgroundImage = isset($pageBackground['url']) ? 'background-image: url(\''.$pageBackground['url'].'\');' : null;

?>
<section class=" section-bg sectionHero" id="sectionHero" style="<?php echo $pageBackgroundImage ?>">
    <div class="row  container-hero ">
        <div class="col-md-6 wrap-top">
            <div class="sectionHero__wrap">
                <div class="sectionHero__inner ">
                    <div class="clearfix">
                        <div class="push-lg-1 col-lg-11 push-xl-3 col-xl-9">
                            <h1 class="header-text"><?php the_field('header_text_hero');?></h1>
                            <h5 class="subheader-text"><?php the_field('sub_header_text_hero');?></h5>
                            <div class="wrap-btn">
                                <?php if(!empty(get_field('button_1_text_hero'))): ?>
                                    <a href="<?php the_field('button_1_url_hero');?>" class="btn-main" title="<?php the_field('button_1_text_hero');?>"><?php the_field('button_1_text_hero');?></a>
                                <?php endif;?>

                                <?php if(!empty(get_field('button_2_text_hero'))): ?>
                                    <a href="<?php the_field('button_2_url_hero');?>" class="btn-main" title="<?php the_field('button_2_text_hero');?>"><?php the_field('button_2_text_hero');?></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
