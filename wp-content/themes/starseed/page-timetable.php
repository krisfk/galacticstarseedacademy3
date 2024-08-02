<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>







<div class="w-bg">
    <div class="container container mt-4  text-center  pt-5 pb-5 ">
        <div class="mt-0 text-start content-txt-div  text-center">

            <div class="col-lg-6 col-md-12 col-sm-12 col-12  txt-top  w-100">
                <h1>學院時間表
                </h1>
            </div>

            <div class="mt-4">星際種子學院是一個讓人學習如何運用宇宙智慧和宇宙能量頻率的機構，致力讓每個人都可以透過尋回內在自性創造內在和諧，從而達致靈魂成長，成就更好的自己。

            </div>
        </div>

    </div>
</div>








<!-- <div class="container mt-lg-5 mt-md-5 mt-sm-5 mt-5   text-center inner-container pb-5"> -->
<div class="mt-lg-0 mt-md-0 mt-sm-0 mt-0   text-center">


    <?php
    $args = array( 'product_cat' => 'workshop' );
    $query = new WP_Query( $args );

    $idx=0;
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $idx++;
            $bg_class= ($idx %2 ==1) ? 'g-bg':'w-bg';




?>
    <div
        class="course-entry-div-bg pt-lg-5 pt-md-5 pt-sm-4 pt-4  pb-lg-5 pb-md-5 pb-sm-4 pb-4  <?php echo $bg_class;?>">
        <div class="container course-entry-div">
            <div class="row">


                <!-- <div class="entry-row-bg col-lg-5 col-md-5 col-sm-12 col-12  position-relative overflow-hidden"
                    style="background: url(<?php echo get_the_post_thumbnail_url();?>); background-size: cover;background-repeat: no-repeat;background-position: center;"> -->

                <div class="entry-row-bg col-lg-5 col-md-5 col-sm-12 col-12  position-relative overflow-hidden">

                    <div class="course-entry-rect"></div>

                    <img class="course-thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-12  text-start p-5 pb-0 content-block">
                    <h2><?php echo get_the_title();?></h2>

                    <div>
                        <?php
                        echo get_the_excerpt();
                        ?>
                    </div>

                    <div class="text-end">
                        <a href="<?php echo get_permalink();?>" class="know-more-btn2">立即了解更多</a>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <?php
        }
    }
    
    
?>






</div>


<!-- <div class=""></div> -->




<script type="text/javascript">
$(function() {
    $('.slides').slick({
        dots: true,
    });

    $('.soul-healing-icon-a').click(function() {

        $('.soul-healing-icon-a').css({
            'opacity': 0.5
        })

        $('.soul-healing-icon-a').removeClass('active');
        $(this).toggleClass('active');


        $('.soul-healing-icon-a.active').css({
            'opacity': 1
        })


        var group = $(this).attr('data-group');
        var content = $(this).attr('rel');
        $('.soul-healing-content').html('')

        $('.soul-healing-content-' + group).html(content)

    })

})
</script>


<?php


get_footer();