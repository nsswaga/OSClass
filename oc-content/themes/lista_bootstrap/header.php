        <!-- header --> 
      <div class="topbar">
        <div class="fill">
          <div class="container">
            <a href="http://beta.lista.ph" class="brand"><img border="0" alt="Lista.ph" title="Lista.ph" src="http://www.lista.ph.s3.amazonaws.com/images/nav_logo.png"></a>
            <ul class="nav">
                <?php while ( osc_has_categories() ) { ?>
                <li class="<?php echo osc_category_slug() ; ?><?php if ( osc_count_subcategories() > 0 ) { ?> menu<?php } ?>">
                    <a href="<?php echo osc_search_category_url() ; ?>" <?php if ( osc_count_subcategories() > 0 ) { ?>class="menu"<?php } ?>><?php View::newInstance()->_erase('subcategories'); echo osc_category_name() ; ?>(<?php echo osc_category_total_items() ; ?>)</a>
                    <?php if ( osc_count_subcategories() > 0 ) { ?>
                    <ul class="menu-dropdown">
                        <?php while ( osc_has_subcategories() ) { ?>
                        <li class="<?php echo osc_category_slug() ; ?>"><a href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?><span> (<?php echo osc_category_total_items() ; ?>)</span></a></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
                <?php } ?>
        </ul>
            <ul class="nav secondary-nav">
                    <?php if( osc_users_enabled() ) { ?>
                        <?php if( osc_is_web_user_logged_in() ) { ?>
                                <li><a id="new_post" href="<?php echo osc_item_post_url_in_category() ; ?>"><button class="small btn"><?php _e("New Post", 'twitter_bootstrap'); ?></button></a></li>
                                <!--li><p><?php printf(__('Hi %s', 'twitter_bootstrap'), osc_logged_user_name() . '!'); ?>  &middot;</p></li-->
                                <li><a href="<?php echo osc_user_dashboard_url() ; ?>"><?php _e('My account', 'twitter_bootstrap') ; ?></a> </li>
                            <li><a href="<?php echo osc_user_logout_url() ; ?>"><?php _e('Logout', 'twitter_bootstrap') ; ?></a></li>
                        <?php } else { ?>
                            <li><a class="menu" href="<?php echo osc_user_login_url() ; ?>"><?php _e('Login', 'twitter_bootstrap') ; ?></a>
                                <ul class="menu-dropdown">
                                    <li>
                                        <form method="post" action="http://beta.lista.ph/index.php">
                                          <input type="hidden" value="login" name="page">
                                          <input type="hidden" value="login_post" name="action">
                                          <ul>
                                            <li><input type="text" id="email" name="email" placeholder="Username" value="" class="input-small"></li>
                                            <li><input type="password" id="password" name="password" placeholder="Password" value="" class="input-small"></li>
                                            <li class="checkbox"><input type="checkbox" value="1" name="remember" id="remember"> <span for="rememberMe"><?php _e('Remember me', 'modern') ; ?></span></li>
                                            <li><button type="submit" class="btn">Log in</button></li>
                                            <li class="forgot">
                                                <?php fbc_button(); ?>
                                                <a href="<?php echo osc_recover_user_password_url() ; ?>"><?php _e("Forgot password?", 'modern');?></a>
                                            </li>
                                          </ul>
                                        </form>
                                    </li>
                                </ul> 
                            </li>
                            <li><a href="<?php echo osc_register_account_url() ; ?>"><?php _e('Register', 'twitter_bootstrap') ; ?></a></li>
                        <?php } ?>
                    <?php } ?>
            </ul>
          </div>
        </div>
      </div>

    <!-- header end -->
