<?php
  $walkercms_config['version'] = '0.5';
  $walkercms_config['organization_name'] = 'WalkerCMS';
  $walkercms_config['organization_full_title'] = 'WalkerCMS';
  $walkercms_config['organization_slogan'] = 'A simple CMS, no DB required';
  $walkercms_config['description'] = 'WalkerCMS is a file-based content-management system (CMS) that is suited primarily for small websites.';
  $walkercms_config['keywords'] = 'content management system walkercms cms php laravel';
  $walkercms_config['contact_page']  = '';
  $walkercms_config['admin_email'] = 'tpwalke2@gmail.com';
  $walkercms_config['admin_name']  = 'Tom Walker';
  $walkercms_config['contact_email'] = 'tpwalke2@gmail.com';
  $walkercms_config['contact_name']  = 'Tom Walker';

  $page_defaults['perform_caching'] = false;
  $page_defaults['show_in_nav'] = true;

  $pages['home']          = array('menu_title' => 'Home');
  $pages['about']         = array('page_title' => 'About');
  $pages['docs']          = array('menu_title' => 'Docs', 'page_title' => 'Documentation', 'sub_nav_on_page' => true);
  $pages['docsoverview']  = array('menu_title' => 'Overview', 'page_title' => 'Documentation', 'parent' => 'docs');
  $pages['changelog']     = array('page_title' => 'Change Log', 'parent' => 'docs');
  $pages['install']       = array('page_title' => 'Installation', 'parent' => 'docs');
  $pages['templates']     = array('page_title' => 'Templates', 'parent' => 'docs');
  $pages['config']        = array('page_title' => 'Configuration', 'parent' => 'docs');
  $pages['content']       = array('page_title' => 'Creating Content', 'parent' => 'docs');
  $pages['extrafeatures'] = array('page_title' => 'Extra Features', 'parent' => 'docs');
  $pages['testing']       = array('page_title' => 'UI Testing', 'parent' => 'docs');
  $pages['community']     = array('page_title' => 'Community', 'sub_nav_on_page' => true);
  $pages['commoverview']  = array('menu_title' => 'Overview', 'page_title' => 'Community', 'parent' => 'community');
  $pages['contributing']  = array('page_title' => 'Contributing', 'parent' => 'community');
  $pages['styleguide']    = array('page_title' => 'Code Style', 'parent' => 'community');
  $pages['download']      = array('menu_title' => 'Download', 'page_title' => 'Download version 0.5 (stable)', 'override_url' => 'https://github.com/tpwalke2/WalkerCMS/archive/0.5.tar.gz');
  
/* End of file config.php */