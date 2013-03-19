
<header role="banner" id="page-header">
  <div class='container'>
    <div class='row'>
      <div id='brand' class='span3'>
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>

        <div id="name-and-slogan">

          <?php if ($site_name): ?>
            <h1 id="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>

        </div>

      </div>

      <div class='span9'>
          <?php print render($page['header']); ?>
          <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => 'nav nav-primary nav-top main-menu pull-right'))) ?>
      </div>

      <div class='mobile-menu-btn'><a href='#menu'><i class='icon-reorder'></i> MENU</a></div>

    </div>
  </div>
</header>

<section id="page-content">
  <div class='inside'>
    <div class='container'>
      <div class='row'>
        <div class='span12'>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="page-title"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php if ($tabs): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if ($page['help']): ?> 
            <div class="well"><?php print render($page['help']); ?></div>
          <?php endif; ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
          <a name='menu'></a>
          <?php print theme('links', array('links' => $main_menu, 'attributes' => array('class' => 'nav nav-primary nav-bottom'))) ?>
        </div>
      </div>
    </div>
  </div>
</section>

<footer id="page-footer">
  <div class='container'>
    <div class='row'>
      <div id='footer-one' class='span4'>
        <?php print render($page['footer_one']); ?>
      </div>
      <div id='footer-two' class='span4'>
        <?php print render($page['footer_two']); ?>
      </div>
      <div id='footer-three' class='span4'>
        <?php print render($page['footer_three']); ?>
      </div>
    </div>
    <div class='row'>
      <div id='footer-bottom' class='span12'>
        <?php print render($page['footer_bottom']); ?>
      </div>
    </div>
  </div>
</footer>
