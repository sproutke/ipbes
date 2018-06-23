<?php
drupal_add_library('system', 'drupal.collapse');
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<header id="header" class="header case-study">
  <div class="branding container">
    <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print url($front_page); ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
    <?php if ($site_name || $site_slogan): ?>
      <div class="site-name-wrapper">
        <?php if ($site_name): ?>
          <a class="site-name" href="<?php print url($front_page); ?>" title="<?php print t('Home'); ?>">
            <?php print $site_name; ?>
          </a>
        <?php endif; ?>
        <?php if (!empty($site_slogan)): ?>
          <div class="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <!-- views exposed search -->
	<div class="pull-right">
	<!-- Social media block-->
    <?php
      $block = module_invoke('block', 'block_view', '2');
        print render($block['content']);
    ?>
	</div>

  </div>
  <div class="navigation-wrapper">
    <div class="container">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div> <!-- /.navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <?php if ($main_menu): ?>
            <ul id="main-menu" class="menu nav navbar-nav">
              <?php print render($main_menu); ?>
            </ul>
          <?php endif; ?>

          <!-- user menu -->
          <?php
            if($display_login_menu):
              $block = block_load('dkan_sitewide', 'dkan_sitewide_user_menu');
              if($block):
                $user_menu = _block_get_renderable_array(_block_render_blocks(array($block)));
                print render($user_menu);
              endif;
            endif;
          ?>
        </div><!-- /.navbar-collapse -->
      </nav><!-- /.navbar -->
    </div><!-- /.container -->
  </div> <!-- /.navigation -->
</header>

 <div class="container">
  <?php
    if (!empty($breadcrumb)) :
      print $breadcrumb;
    endif;
    ?>
    </div>

  <?php if (!empty($page['help'])): ?>
     <div class="background-wrapper">
   <div class="container">

   <?php print render($title_prefix); ?>
        <?php if (!empty($title) && empty($is_panel)): ?>
        <h1 class="page-header">
            <?php print $title; ?>
        </h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

              <?php print render($page['help']); ?>
    <?php endif; ?>
</div>
</div>

<div id="main-wrapper">
  <div id="main" class="main container">


    <?php print $messages; ?>


<div class="main-row">

    <section>

        <a id="main-content"></a>
      <!--
  <?php print render($title_prefix); ?>
        <?php if (!empty($title) && empty($is_panel)): ?>
        <h1 class="page-header">
            <?php print $title; ?>
        </h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
 -->


        <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
        <ul class="action-links">
            <?php print render($action_links); ?>
        </ul>
        <?php endif; ?>

        <?php
            if (!empty($page['sidebar_second'])):
            echo '<section class="col-md-9" role="main">';
            else:
            echo '<section role="main">';
            endif;
        ?>

        <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
    <aside class="sidebar col-md-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
    </aside>
    <!-- /#sidebar-second -->
    <?php endif; ?>


    </section>
</div>


  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->
<footer id="footer" class="footer">
  <div class="container">
  <div class="col-xs-12 col-md-4"><?php print render($page['footer_first']); ?></div>
  <div class="col-xs-12 col-md-4"><?php print render($page['footer_second']); ?></div>
  <div class="col-xs-12 col-md-4"><?php print render($page['footer_third']); ?></div>
  </div>
</footer>

<footer id="footer" class="footer-clean">
  <div class="container">
    <?php if ($copyright): ?>
      <small class="copyright"><?php print $copyright; ?></small>
    <?php endif; ?>
    <?php print render($page['footer']); ?>
  </div>
</footer>
