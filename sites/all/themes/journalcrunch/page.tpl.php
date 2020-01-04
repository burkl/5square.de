<div id="mainWrapper">

    <!-- Header. -->
    <div id="wrapper">

    <!-- Header. -->
    <div id="header">
            
        <div id="logo-floater">
			<?php if ($logo): ?>
                <div id="logo">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo"/>
                </a>
                </div>
            <?php endif; ?>
            
            <?php if ($site_name || $site_slogan): ?>
                <?php if ($site_name): ?>
                <div id="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></div>
                <?php endif; ?>
                
                <?php if ($site_slogan): ?>
                <div id="slogan"><?php print $site_slogan; ?></div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        
        <div id="topMenu">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('links main-menu', 'inline', 'clearfix')))); ?>
        </div>
        
        <div id="topSearch">
		<?php print render($page['header']); ?>
        </div>
        
        <div id="topSocial">
        <ul>                  
        <li><a class="twitter tip" href="http://twitter.com/janatzend" title="Follow Me on Twitter!"></a></li>
        <li><a class="facebook" href="http://www.facebook.com/jan.burkl.7" title="Join Me on Facebook!"></a></li>
        <li><a class="rss" href="/rss.xml" title="Subcribe to My RSS Feed"></a></li>
        </ul>
        </div>
    
    </div><!-- EOF: #header -->
    
  <!-- Content. -->
    <div id="content">
    
    <?php if ($is_front) {
            print $messages;
            if ($tabs): print render($tabs); endif; 
            print render($tabs2);
			print render($page['content']);
			print render($page['help']);
         } else { ?>
            <div id="colLeft">
            
				<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                <a id="main-content"></a>

                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                <h1 class="title"><?php print $title ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                
                <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
                
                <?php print render($tabs2); ?>
                
                <?php print $messages; ?>
                
                <?php print render($page['help']); ?>
                
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                
                <div class="clearfix">
                <?php print render($page['content']); ?>
                </div>
                
                <?php print $feed_icons ?>
                
            </div><!-- EOF: #main -->
            
            <div id="colRight">

            <?php print render($page['sidebar_first']); ?>

            </div><!-- EOF: #sidebar -->
         <?php }  ?>

    </div><!-- EOF: #content -->
    
</div><!-- EOF: #wrapper -->
    
<!-- Footer -->    
<div id="footer">
        
    <div id="footerInner">
    
        <div class="blockFooter">
            <?php print render($page['footer_first']); ?>
        </div>
        
        <div class="blockFooter">
            <?php print render($page['footer_second']); ?>
        </div>
        
        <div class="blockFooter">
            <?php print render($page['footer_third']); ?>
        </div>
        
        <div class="blockFooter">
            <?php print render($page['footer_fourth']); ?>
        </div>
        
    <div id="secondary-links">
    <?php if (isset($secondary_menu)) { ?><?php print theme('links', $secondary_menu, array('class' => 'links', 'id' => 'subnavlist')); ?><?php } ?>
    </div>
        
    <div id="footer-message">
        <?php print render($page['footer']); ?>
    </div>
    
    </div>
    
    </div>

</div><!-- EOF: #footer -->

</div>