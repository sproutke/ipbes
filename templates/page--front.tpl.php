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
  <div class="container-fluid">
    <div id="topbar" class="row top_bar">
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4 social_column">
        <p class="social-text">Connect with us</p>
        <div class="social-icons">
          <a href="https://facebook.com/ipbes">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a href="https://twitter.com/IPBES" target="_blank">
            <i class="fa fa-twitter-square"></i>
          </a>
          <a href="https://linkedin.com/company/ipbes">
            <i class="fa fa-linkedin-square"></i>
          </a>
          <a href="https://instagram.com/ipbes_">
            <i class="fa fa-instagram"></i>
          </a>
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
    </div>
  </div>

</header>
