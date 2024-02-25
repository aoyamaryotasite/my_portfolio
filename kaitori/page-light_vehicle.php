<?php 
    get_header();
    // $args = array(
    //     'post_type' => 'featured_product',
    //     'posts_per_page' => -1,
    //     'order' => 'ASC',
    //     // 'order' => 'DESC',
    // );
    // $news_query = new WP_Query($args);
    // if ($news_query->have_posts()) :
?>
<div class="medama_lineup">
    <div class="container">
        <?php /*
        <figure class="medama_title desktop">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/asset/image/medama_l_01.svg" alt="今週の目玉車すぐ乗れる新車が大特価">
        </figure>
        <figure class="medama_title mobile">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/asset/image/medama_l_01_01.svg" alt="すぐ乗れる新車が大特価">
        </figure>
        <figure class="mobile orver_vw">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/asset/image/medama_l_01_02.svg" alt="今週の目玉車">
        </figure>
        */ ?>
        <div class="medama_slider desktop">
        <a href="<?php echo esc_url( home_url() ); ?>/reservantion">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/asset/image/medama-long1.png" alt="">
            </a>
            <a href="<?php echo esc_url( home_url() ); ?>/reservantion">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/asset/image/medama-long2.png" alt="">
            </a>

            <?php /*
                while ($news_query->have_posts()) :
                    $news_query->the_post();
                    if (get_field('featured_image')) : 
            ?>
            <a href="<?php the_field('featured_image'); ?>">
                <img class="gallery" data-group="gallery_banner" src="<?php the_field('featured_image'); ?>" alt="<?php the_content(); ?>">
            </a>
            <?php 
                    endif;
                endwhile;
                wp_reset_postdata();
            */ ?>
        </div>
        <div class="medama_slider2 mobile">
        <a href="<?php echo esc_url( home_url() ); ?>/reservantion">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/asset/image/medama1.png" alt="">
            </a>
            <a href="<?php echo esc_url( home_url() ); ?>/reservantion">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/asset/image/medama2.png" alt="">
            </a>
        </div>
    </div>
</div>
<?php 
    /* endif; */
?>

<div class="col2 container">
    <?php /*
    <figure class="aaaa">
        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/asset/image/n_box1200×400.png" alt="Nbox">
    </figure>
    */ ?>

    <article class="under_page">
        <?php
            $page = get_post( get_the_ID() );
            $slug = $page->post_name;
        ?>

    
<ul class="tab_type_01 flex_box light_vehicle">
            <li class="active maker_select_btn2">
                <a class="maker_tag" href="<?php echo esc_url( home_url() ); ?>/line_up/new_car">
                    <h3 class="tab_l flex_box">
                        <p>新車<br>から選ぶ</p>
                    </h3>
                    <span class="cercle">
                        <i class="fas fa-angle-right fa-position-right"></i>
                    </span>
                </a>
            </li>
            <li class="bodytype_select_btn2">
                <a class="body_tag" href="<?php echo esc_url( home_url() ); ?>/line_up/new_car/light_vehicle">
                    <h3 class="tab_l flex_box">
                        <p>軽自動車人気<br>ランキング</p>
                    </h3>
                    <span class="cercle">
                        <i class="fas fa-angle-right fa-position-right"></i>
                    </span>
                </a>
            </li>
            <li class="bodytype_select_btn3">
                <a class="body_tag" href="<?php echo esc_url( home_url() ); ?>/line_up/new_car/standard_vehicle">
                    <h3 class="tab_l flex_box">
                        <p>普通車人気<br>ランキング</p>
                    </h3>
                    <span class="cercle">
                        <i class="fas fa-angle-right fa-position-right"></i>
                    </span>
                </a>
            </li>
        </ul>
    
        <section class="<?php echo $slug; ?>_content_01">
            <div class="row">
                <ul class="line_upside d-none accordion-area ">
                <!-- <ul class="line_upside mobile accordion-area "> -->
                    <li>
                        <section>
                            <h3 class="title">新車の絞込検索</h3>
                            <div class="box">
                                <?php 
                                    get_template_part( 'template_parts/line_upside' ); 
                                ?>
                            </div>
                        </section>
                    </li>
                </ul>

                <figure class="mb40">
                    <img loading="lazy" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/asset/image/image_87.svg" alt="ディープラスは全部コミコミ">
                </figure>
                <div class="ranking-box">
                <h2>軽自動車人気ランキング</h2>
                    <?php 
                        $paged = get_query_var('page') ?: 1;
                        $args = array(
                            'paged' => $paged,
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'post_type' => 'line_up',
                            'meta_key' => 'price_gr_monthly_fixed_amount',
                            'post__in' => array(7347),
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => 1,
                            'order' => 'ASC',
                        );
                        $monthly_fixed_amount = get_field('price_gr_monthly_fixed_amount');
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            global $previousday;
                                while ($the_query->have_posts()) : $the_query->the_post();
                                $previousday = '';
                        ?>
          
          <?php if(have_rows('price_gr')): ?>
            <?php while(have_rows('price_gr')): the_row(); ?>
            <a href="https://d-plus.com/archives/line_up/maker_select/honda/7347/"><div class="ranking-box-item">
                        <div class="ranking-box-item-inner">
                            <div class="ranking-box-item-left_left rank-one">
                                <p>1位</p>
                            </div>
                            <div class="ranking-box-item-left">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/asset/image/ranking/nbox.webp" alt="" class="ranking-car">
                            </div>
                            <div class="ranking-box-item-right">
                            <div class="ranking-box-item-right-left">
                            <p class="ranking-name">HONDA<br><span>N-BOX</span>【新型】</p>
                            <p class="ranking-price">月々<span><?php the_sub_field('monthly_fixed_amount'); ?>円</span></p>
                            </div>
                            <div class="ranking-baloon rank-one">
                            <p class="ranking-text">軽最大級の室内空間</p>
                            </div>
                        </div>
                        </div>
                    </div></a>
                    <?php endwhile; ?>
          <?php endif; ?> 
                    <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif;?>

<?php 
                        $paged = get_query_var('page') ?: 1;
                        $args = array(
                            'paged' => $paged,
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'post_type' => 'line_up',
                            'meta_key' => 'price_gr_monthly_fixed_amount',
                            'post__in' => array(136),
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => 1,
                            'order' => 'ASC',
                        );
                        $monthly_fixed_amount = get_field('price_gr_monthly_fixed_amount');
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            global $previousday;
                                while ($the_query->have_posts()) : $the_query->the_post();
                                $previousday = '';
                        ?>
          
          <?php if(have_rows('price_gr')): ?>
            <?php while(have_rows('price_gr')): the_row(); ?>

                    <a href="https://d-plus.com/archives/line_up/maker_select/suzuki/136/"><div class="ranking-box-item">
                        <div class="ranking-box-item-inner">
                            <div class="ranking-box-item-left_left rank-two">
                                <p>2位</p>
                            </div>
                            <div class="ranking-box-item-left">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/asset/image/ranking/spacia.webp" alt="" class="ranking-car">
                            </div>
                            <div class="ranking-box-item-right">
                            <div class="ranking-box-item-right-left">
                            <p class="ranking-name">SUZUKI<br><span>スペーシア</span><?php the_field('car_grade'); ?></p>
                            <p class="ranking-price">月々<span><?php the_sub_field('monthly_fixed_amount'); ?>円</span></p>
                            </div>
                            <div class="ranking-baloon rank-two">
                            <p class="ranking-text">ハイブリット仕様のスライドドア</p>
                            </div>
                            </div>
                        </div>
                    </div></a>
                    <?php endwhile; ?>
          <?php endif; ?> 
                    <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif;?>


<?php 
                        $paged = get_query_var('page') ?: 1;
                        $args = array(
                            'paged' => $paged,
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'post_type' => 'line_up',
                            'meta_key' => 'price_gr_monthly_fixed_amount',
                            'post__in' => array(4476),
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => 1,
                            'order' => 'ASC',
                        );
                        $monthly_fixed_amount = get_field('price_gr_monthly_fixed_amount');
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            global $previousday;
                                while ($the_query->have_posts()) : $the_query->the_post();
                                $previousday = '';
                        ?>
          
          <?php if(have_rows('price_gr')): ?>
            <?php while(have_rows('price_gr')): the_row(); ?>


                    <a href="https://d-plus.com/archives/line_up/maker_select/daihatsu/4476/"><div class="ranking-box-item">
                        <div class="ranking-box-item-inner">
                            <div class="ranking-box-item-left_left rank-three">
                                <p>3位</p>
                            </div>
                            <div class="ranking-box-item-left">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/asset/image/ranking/tanto.webp" alt="" class="ranking-car">
                            </div>
                            <div class="ranking-box-item-right">
                                <div class="ranking-box-item-right-left">
                                <p class="ranking-name">DAIHATSU<br><span>タント</span><?php the_field('car_grade'); ?></p>
                                <p class="ranking-price">月々<span><?php the_sub_field('monthly_fixed_amount'); ?>円</span></p>
                                </div>
                            <div class="ranking-baloon rank-three">
                            <p class="ranking-text">大開口で乗り降り楽々</p>
                            </div>
                            </div>
                        </div>
                    </div></a>
                    <?php endwhile; ?>
          <?php endif; ?> 
                    <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif;?>

<?php 
                        $paged = get_query_var('page') ?: 1;
                        $args = array(
                            'paged' => $paged,
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'post_type' => 'line_up',
                            'meta_key' => 'price_gr_monthly_fixed_amount',
                            'post__in' => array(4490),
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => 1,
                            'order' => 'ASC',
                        );
                        $monthly_fixed_amount = get_field('price_gr_monthly_fixed_amount');
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            global $previousday;
                                while ($the_query->have_posts()) : $the_query->the_post();
                                $previousday = '';
                        ?>
          
          <?php if(have_rows('price_gr')): ?>
            <?php while(have_rows('price_gr')): the_row(); ?>

                    <a href="https://d-plus.com/archives/line_up/maker_select/suzuki/4490/"><div class="ranking-box-item">
                        <div class="ranking-box-item-inner">
                            <div class="ranking-box-item-left_left">
                                <p>4位</p>
                            </div>
                            <div class="ranking-box-item-left">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/asset/image/ranking/hustler.webp" alt="" class="ranking-car">
                            </div>
                            <div class="ranking-box-item-right">
                            <div class="ranking-box-item-right-left">
                            <p class="ranking-name">SUZUKI<br><span>ハスラー</span><?php the_field('car_grade'); ?></p>
                            <p class="ranking-price">月々<span><?php the_sub_field('monthly_fixed_amount'); ?>円</span></p>
                            </div>
                            <div class="ranking-baloon">
                            <p class="ranking-text">アウトドアに人気の車種</p>
                            </div>
                            </div>
                        </div>
                    </div></a>
                    <?php endwhile; ?>
          <?php endif; ?> 
                    <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif;?>

<?php 
                        $paged = get_query_var('page') ?: 1;
                        $args = array(
                            'paged' => $paged,
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'post_type' => 'line_up',
                            'meta_key' => 'price_gr_monthly_fixed_amount',
                            'post__in' => array(4484),
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => 1,
                            'order' => 'ASC',
                        );
                        $monthly_fixed_amount = get_field('price_gr_monthly_fixed_amount');
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            global $previousday;
                                while ($the_query->have_posts()) : $the_query->the_post();
                                $previousday = '';
                        ?>
          
          <?php if(have_rows('price_gr')): ?>
            <?php while(have_rows('price_gr')): the_row(); ?>

                    <a href="https://d-plus.com/archives/line_up/maker_select/daihatsu/4484/"><div class="ranking-box-item">
                        <div class="ranking-box-item-inner">
                            <div class="ranking-box-item-left_left">
                                <p>5位</p>
                            </div>
                            <div class="ranking-box-item-left">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/asset/image/ranking/canbus.webp" alt="" class="ranking-car">
                            </div>
                            <div class="ranking-box-item-right">
                            <div class="ranking-box-item-right-left">
                            <p class="ranking-name">DAIHATSU<br><span>ムーヴキャンバス</span><?php the_field('car_grade'); ?></p>
                            <p class="ranking-price">月々<span><?php the_sub_field('monthly_fixed_amount'); ?>円</span></p>
                            </div>
                            <div class="ranking-baloon">
                            <p class="ranking-text">女性1番人気のスライドドア</p>
                            </div>
                            </div>
                        </div>
                    </div></a>
                    <?php endwhile; ?>
          <?php endif; ?> 
                    <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                </div>
                <div class="car_list flex_box">
                    <?php 
                        $paged = get_query_var('page') ?: 1;
                        $args = array(
                            'paged' => $paged,
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'post_type' => 'line_up',
                            'meta_key' => 'price_gr_monthly_fixed_amount',
                            'orderby' => 'meta_value_num',
                            'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                  'taxonomy' => 'body_type_new',
                                  'terms' => array('slide_door','suv_wagon','l_sedam'),
                                  'field' => 'slug'
                                ),
                            )
                            // 'orderby' => array(
                            //     'meta_value_num' => 'ASC',
                            //     'date' => 'ASC'
                            // ),
                        );
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                        global $previousday;
                            while ($the_query->have_posts()) : $the_query->the_post();
                            $previousday = '';
                    ?>
                    <div class="car_list_inner">
                        <?php 
                            get_template_part( 'template_parts/car_card2' ); 
                        ?>
                    </div>
                    <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                </div>
            </div>

    
        </section>
    </article>
    <aside class="line_upside" id="searchmenu">
        <div class="mobile openbtn02">
            <img loading="lazy" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/asset/image/icon_9.svg" alt="">
            <span class="tate">新車検索</span>
        </div>
        <div id="searchmenu-list">
        <?php 
            get_template_part( 'template_parts/line_upside' ); 
        ?>
        </div>
    </aside>
    <div class="clear desktop"></div>
</div>

<?php get_footer(); ?>