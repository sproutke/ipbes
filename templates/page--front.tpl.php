<?php

/**
 * @file
 * Front page - no container class in main section.
 */
?>
<div id="banner">
  <?php print render($page['banner']); ?>
</div>

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
          <form>
            <input type="text" placeholder="Enter search terms" />
          </form>
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
        <div class="col-md-8 col-md-offset-4">
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

<div id="main-wrapper">
  <div id="main" class="main">
    <?php print render($page['content']); ?>
  </div>
</div>

<footer id="footer" class="footer">
  <div class="footer-headers">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>Menu</h4>
        </div>
        <div class="col-md-4">
          <h4>Communities</h4>
        </div>
        <div class="col-md-4">
          <h4>Contacts</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-links">
    <div class="container">
      <div class="row">
        <div class="col-md-4 menu-links">
          <a href="">About</a>
          <a href="">Work Programme</a>
          <a href="">News</a>
          <a href="">Events &amp; Documents</a>
          <a href="">Resources</a>
        </div>
        <div class="col-md-4 menu-links">
          <a href="">IPBES Experts</a>
          <a href="">The Open-ended Network of IPBES Stakeholders</a>
        </div>
        <div class="col-md-4">
          <address>
            IPBES Secretariat address<br />
            10th floor,<br />
            Platz der Vereinten Nationen 1,<br />
            D-53113 Bonn,<br />
            Germany
          </address>
        </div>
      </div>
    </div>
  </div>
  <div class="container copyright">
    <div class="row">
      <div class="ipbes-mark col-md-6">
        <p>&copy; IPBES Secretariat</p>
      </div>
      <div class="partner-logos col-md-6">
        <img src="assets/images/logo_footer_strip.png" alt="Partners"/>
      </div>
    </div>

  </div>
</footer>
