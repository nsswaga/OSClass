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
