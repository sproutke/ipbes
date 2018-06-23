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

<header id="header" class="header">
  <div class="top_bar">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-8 social_column">
          <p class="social-text">Connect with us</p>
          <div class="social-icons">
            <a href="https://facebook.com/ipbes" target="_blank">
              <i class="fa fa-facebook-square"></i>
            </a>
            <a href="https://twitter.com/IPBES" target="_blank">
              <i class="fa fa-twitter-square"></i>
            </a>
            <a href="https://linkedin.com/company/ipbes"  target="_blank">
              <i class="fa fa-linkedin-square"></i>
            </a>
            <a href="https://instagram.com/ipbes_"  target="_blank">
              <i class="fa fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4 logo-holder">
        <?php if ($logo): ?>
          <a class="logo" href="<?php print url($front_page); ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
      </div>
      <div class="col-md-3 col-md-offset-5">
        <div class="search-widget">
          <?php
            $block = module_invoke('views', 'block_view', '-exp-search_index-page');
              print render($block['content']);
          ?>
        </div>
        <div class="register-links">
          <?php
            if($display_login_menu):
              $block = block_load('dkan_sitewide', 'dkan_sitewide_user_menu');
              if($block):
                $user_menu = _block_get_renderable_array(_block_render_blocks(array($block)));
                print render($user_menu);
              endif;
            endif;
          ?>
        </div>
      </div>
    </div>
  </div>

</header>

<!-- Navigation: sticky -->

<div class="navigation-wrapper" id="sticky-navbar">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-4 top-menu">
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
            <!-- Main Menu -->
            <?php if ($main_menu): ?>
              <ul id="main-menu" class="menu nav navbar-nav">
                <?php print render($main_menu); ?>
              </ul>
            <?php endif; ?>
          </div><!-- /.navbar-collapse -->
        </nav><!-- /.navbar -->
      </div><!-- /.offset -->
    </div><!-- /.row -->
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
  <div class="container copyright">
    <div class="row">
      <div class="ipbes-mark col-md-6">
        <p>&copy; IPBES Secretariat</p>
        <?php if($content['footer-contacts']): ?>
          <?php print $content['footer-contacts']; ?>
        <?php endif; ?>
      </div>
      <div class="partner-logos col-md-6">
        <a href="//www.unep.org" target="_blank">
          <img src="/sites/all/themes/ipbes_new/panels/layouts/ipbes_front_new/img/unep.png" alt="UNEP"/>
        </a>
        <a href="//en.unesco.org" target="_blank">
          <img src="/sites/all/themes/ipbes_new/panels/layouts/ipbes_front_new/img/unesco.png" alt="UNESCO"/>
        </a>
        <a href="//www.fao.org/home/en" target="_blank">
          <img src="/sites/all/themes/ipbes_new/panels/layouts/ipbes_front_new/img/fao.png" alt="FAO"/>
        </a>
        <a href="//www.undp.org" class="slim" target="_blank">
          <img src="/sites/all/themes/ipbes_new/panels/layouts/ipbes_front_new/img/undp.png" alt="UNDP"/>
        </a>
      </div>
    </div>
  </div>
</footer>
