<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Christmas Time Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

get_header(); ?>

<!--Header
    Event Details / Intro Paragrah
    Online Service
    FAQ -->

    <div class="show-for-desktop">

        <video class = "" src="http://christmas-2020.local/wp-content/uploads/2020/11/Christmas-Backround.mp4" autoplay loop
               playsinline muted></video>

        <div class="viewport-header">

                <div class="main-header">
                    <div class="logo"><img
                            src="http://christmas-2020.local/wp-content/uploads/2020/12/AFC_WEBSITE_SCALED_TRANSPARENT-1.png"
                            alt="">
                    </div>
                </div>
        </div>
    </div>


    <div class="show-for-mobile">
        <div class="grid-container full-width">
            <div class="grid-x grid-padding-x full-background" style = "background: linear-gradient(
                    rgba(255, 255, 255, .45),
                    rgba(255, 255, 255, .45)
                    ),url(http://christmas-2020.local/wp-content/uploads/2020/12/Christmas-mobile.jpg);
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment: scroll;
                    background-size: cover;">
                <div class="small-12 cell">
                    <div class="content-middle width-large">
                        <div class="viewport-header">
                            <div class="head-container">
                                <div class="logo"><img src="http://christmas-2020.local/wp-content/uploads/2020/12/AFC_WEBSITE_SCALED_TRANSPARENT-1.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background padding-bottom">
        <div class = "grid-container ">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 medium-6 large-4 cell info-card box-shadow">
                    <div class="grid-x grid-padding-x">
                        <div class="small-2 cell">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="small-10 cell">
                            <div class="card-content">
                                <p>December 20, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="small-12 medium-6 large-4 cell info-card box-shadow">
                    <div class="grid-x grid-padding-x">
                        <div class="small-2 cell">
                            <i class="far fa-clock" id ="big-icon"></i>
                        </div>
                        <div class="small-10 cell">
                            <div class="card-content">
                                <p>9:00am / 11:00am</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="small-12 medium-6 large-4 cell info-card-long box-shadow">
                    <div class="grid-x grid-padding-x">
                        <div class="small-2 cell">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="small-10 cell">
                            <div class="card-content">
                                <p>1551 W Lamar Alexander Pkwy</p>
                                <p>Maryville TN, 37801</p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
<!--    <div class="full-width main-background">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell-outer">
                    <div class="small-12 medium-4 cell info-card">
                        <div class="grid-x grid-padding-x">
                            <div class="small-3 cell">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="small-9 cell">
                                <p>1551 W Lamar Alexander Pkwy</p>
                                <p>Maryville TN, 37801</p>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 medium-4 cell info-card">
                        <div class="grid-x grid-padding-x">
                            <div class="small-3 cell">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="small-9 cell">
                                <p>1551 W Lamar Alexander Pkwy</p>
                                <p>Maryville TN, 37801</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->





<?php get_footer();
