<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php') ; ?>
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta property="fb:app_id" content="212502198788941"/>
    </head>
    <body onload="$('.menu-dropdown input').bind('click', function (e){ e.stopPropagation()});">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) {return;}
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <?php osc_current_web_theme_path('header.php') ; ?>
        <?php osc_current_web_theme_path('inc.search.php') ; ?>
        <div class="container margin-top-10">
            <?php twitter_show_flash_message() ; ?>
        </div>
        <!-- content -->
        <div class="container latest_ads">
            <div class="row">
            <div class="contenti span12">
                <h3><?php _e('Latest Items', 'twitter_bootstrap') ; ?></h3>
                <?php if( osc_count_latest_items() == 0) { ?>
                <p>
                    <?php _e('No Latest Items', 'twitter_bootstrap') ; ?>
                </p>
                <?php } else { ?>
                    <?php while ( osc_has_latest_items() ) { ?>
                    <div class="line">
                        <div class="photo">
                            <?php if( osc_count_item_resources() ) { ?>
                            <a href="<?php echo osc_item_url() ; ?>">
                                <img src="<?php echo osc_resource_thumbnail_url() ; ?>" width="100px" height="75px" title="<?php echo osc_item_title(); ?>" alt="<?php echo osc_item_title(); ?>" />
                            </a>
                            <?php } else { ?>
                            <img src="http://www.lista.ph.s3.amazonaws.com/images/no_photo.gif" alt="" title=""/>
                            <?php } ?>
                        </div>
                        <div class="description">
                            <h2><?php if( osc_price_enabled_at_items() ) { ?> <small><strong><?php echo osc_item_formated_price() ; ?></strong></small> &middot; <?php } ?><a href="<?php echo osc_item_url() ; ?>"><?php echo osc_item_title(); ?></a> <span class="label"><a href="<?php echo osc_item_category_url(osc_item_category_id()) ; ?>"><?php echo osc_item_category() ; ?></a></span> <?php if( osc_item_is_premium() ) { ?> <span class="label success"><?php _e('Premium', 'twitter_bootstrap');  ?></span><?php } ?></h2>
                            <p><?php printf(__('<strong>Publish date</strong>: %s', 'twitter_bootstrap'), osc_format_date( osc_item_pub_date() ) ) ; ?></p>
                            <?php
                                $location = array() ;
                                if( osc_item_country() != '' ) {
                                    $location[] = sprintf( __('<strong>Country</strong>: %s', 'twitter_bootstrap'), osc_item_country() ) ;
                                }
                                if( osc_item_region() != '' ) {
                                    $location[] = sprintf( __('<strong>Region</strong>: %s', 'twitter_bootstrap'), osc_item_region() ) ;
                                }
                                if( osc_item_city() != '' ) {
                                    $location[] = sprintf( __('<strong>City</strong>: %s', 'twitter_bootstrap'), osc_item_city() ) ;
                                }
                                if( count($location) > 0) {
                            ?>
                            <p><?php echo implode(' &middot; ', $location) ; ?></p>
                            <?php } ?>
                            <p><?php echo osc_highlight( strip_tags( osc_item_description() ) ) ; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if( osc_count_latest_items() == osc_max_latest_items() ) { ?>
                    <div class="row show-all-ads">
                        <div class="span12 columns">
                            <a class="btn primary" href="<?php echo osc_search_show_all_url();?>"><strong><?php _e("See all offers", 'twitter_bootstrap') ; ?> &raquo;</strong></a>
                        </div>
                    </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="span3">
                  <div class="row">
                    <div class="span4 columns">
                        <h3>Latest Tweets</h3>
                        <ul class="unstyled">
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="span4 columns">
                        <h3>About</h3>
                        <p>Find anything and everything in <a href="http://www.cebucity.gov.ph/">Cebu</a>, only in one place: <a href="http://www.lista.ph/">Lista.ph</a>.</derp>
                    </div>
                </div>
                <div class="row">
                    <div class="span4 columns">
                        <div class="fb-like" data-href="lista.ph" data-send="true" data-width="240" data-show-faces="true"></div>
                        <!--div class="fb-comments" data-href="lista.ph" data-num-posts="5" data-width="240"></div-->
                    </div>
                </div>
            </div>
            </div>
        </div>
        <?php osc_current_web_theme_path('footer.php') ; ?>
    </body>
</html>
