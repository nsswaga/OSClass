<!-- footer -->
<?php osc_show_widgets('footer'); ?>
<div class="footer">
    <div class="container">
        <div class="span16 columns">
            <a href="<?php echo osc_contact_url(); ?>"><?php _e('Contact', 'twitter_bootstrap') ; ?></a> &middot;
            <?php while( osc_has_static_pages() ) { ?>
            <a href="<?php echo osc_static_page_url() ; ?>"><?php echo osc_static_page_title() ; ?></a> &middot;
            <?php } ?>
            &copy; 2011 Lista.ph
            <span class="pull-right"><a href="#top">Back to top</a></span>
            <div class="help-block">
                <?php osc_run_hook('footer'); ?>
            </div>
            </div>
        </div>
    </div>
<!-- footer end -->
