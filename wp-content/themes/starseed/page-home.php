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




<img class="w-100 home-desktop-banner"
    src="<?php echo wp_get_attachment_image_src(get_field('desktop_banner'),'full')[0];?>" alt="">

<img class="w-100 home-mobile-banner"
    src="<?php echo wp_get_attachment_image_src(get_field('mobile_banner'),'full')[0];?>" alt="">





<div class="w-bg">
    <div class="container container mt-0  text-center  pt-5 pb-5 ">


        <?php
    
    
    echo get_field('content_1');
    ?>




    </div>
</div>




<?php if( have_rows('home_courses_contents') )
{

    $idx=0;

    while( have_rows('home_courses_contents') ){ the_row(); 
        ?>




<div class="row g-0   ">

    <div class="col-12 position-relative ">

        <div class="about-div-wrapper  pt-5 pb-5 <?php echo $idx %2 ==0 ? 'g-bg':'w-bg';?>">
            <div class="about-div">
                <div class="container ">

                    <div class="row align-items-center g-0">
                        <div class="col-12 text-left">



                            <?php echo get_sub_field('home_course_content');?>


                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



<?php
    $idx++;
    }
}

?>







<div class="row pt-5 pb-5 <?php echo $idx %2 ==0 ? 'g-bg':'w-bg';?>">

    <div class="container  position-relative">



        <div class="row align-items-center mobile-column-reverse">




            <div class="">





                <div class="row align-items-center mobile-column-reverse">


                    <?php
                
                echo get_field('content_4');
                ?>


                </div>


            </div>


        </div>

    </div>
</div>









<?php
$idx++;
?>

<div class="<?php echo $idx %2 ==0 ? 'g-bg':'w-bg';?> pb-5">
    <div class="container mt-0 pt-5 text-center pb-5 inner-container pe-3 ps-3">


        <?php echo get_field('content_5');?>

    </div>
</div>

</div>





<?php


get_footer();