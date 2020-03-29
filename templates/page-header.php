<?php
use Roots\Sage\Titles;
$page_for_posts = get_option( 'page_for_posts' );

if(is_home()) {
    $pageBackground = get_field('background',  $page_for_posts);
    $pageTitleHero = get_field('title_hero',  $page_for_posts);
    $pageSubtitleHero = get_field('subtitle_hero',  $page_for_posts);
} else {
    $pageBackground = get_field('background');
    $pageTitleHero = get_field('title_hero');
    $pageSubtitleHero = get_field('subtitle_hero');
}

$pageBackgroundImage = isset($pageBackground['url']) ? 'background-image: url(\''.$pageBackground['url'].'\');' : null;

$pageTitleHero = strlen($pageTitleHero) > 0 ? $pageTitleHero : Titles\title();

if(is_archive()) {
    $page_object = get_queried_object();
    $category_name = $page_object->cat_name;
    $tag_name = $page_object->name;
    if($category_name) {
        $pageTitleHero = $category_name;
    }
    if($tag_name) {
        $pageTitleHero = $tag_name;
    }
}




?>

<div class="page-header d-flex align-items-center <?php echo ($pageBackground)? 'page-banner' : '';?>" style="<?php echo $pageBackgroundImage ?>">
    <?php /* if($pageBackground): ?>
        <div class="rectangle-1"></div>
    <?php endif; */?>
    <div class="page-header__inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h1><?php echo $pageTitleHero;?></h1>
                    <h5><?php echo $pageSubtitleHero;?></h5>
                </div>
            </div>
        </div>
    </div>
    <?php /*if($pageBackground): ?>
        <div class="rectangle-2-a"></div>
        <div class="rectangle-2-b"></div>
    <?php endif; */?>
</div>
