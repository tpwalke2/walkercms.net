<a name="top"></a>
<div id="wrap">
 <div id="header">
  <a href="https://github.com/tpwalke2/WalkerCMS" class="github-link" title="Fork me on GitHub"><img src="../images/github_forkme.png" alt="Fork me on GitHub"></a>
  <h1 id="logo-text"><a href="home" title=""><?= $organization_name ?></a></h1>
  <h2 id="slogan"><?= $organization_slogan ?></h2>
  
  <?php if (isset($allow_search) && $allow_search): ?>
  <form id="quick-search" action="index.html" method="get" >
   <p>
     <label for="qsearch">Search:</label>
     <input class="tbox" id="qsearch" type="text" name="qsearch" value="Search..." title="Start typing and hit ENTER" />
     <input class="btn" alt="Search" type="image" name="searchsubmit" title="Search" src="images/search.gif" />
   </p>
  </form>
  <?php endif; ?>
 </div>
 <?php if ($has_page_specific_header): ?>
  <?= $page_specific_header ?>
 <?php endif; ?>
 <?= $nav ?>
 <div id="content-wrap" class="content-<?= $content_page_id ?><?= ($has_secondary_content || $has_sub_nav ? ' two-col' : ' one-col') ?>">
  <?php if ($has_sub_nav): ?>
  <div id="sidebar">
    <?= $sub_nav ?>
  </div>
  <?php endif ?>

  <?php if ($has_secondary_content): ?>
  <div id="<?= ($has_sub_nav ? 'rightcolumn' : 'sidebar') ?>">
    <?= $secondary_content ?>
  </div>
  <?php endif ?>

  <div id="main">
    <?= $page_content ?>
  </div>
 </div>
 <div id="footer-wrap"><div id="footer-content">
   <div id="footer-bottom">
     <p>
      &copy; <?= date('Y') ?> Walker Software Consulting
            &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="http://www.bluewebtemplates.com/" title="Website Templates" target="_blank">website templates</a> by <a href="http://www.styleshout.com/" title="styleshout templates" target="_blank">styleshout</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="home">Home</a> |
            <a href="http://validator.w3.org/check?uri=referer" title="Valid XHML" target="_blank">XHTML</a> |
      <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Valid CSS" target="_blank">CSS</a>
     </p>
     <?php if ($has_page_specific_footer): ?>
      <?= $page_specific_footer ?>
     <?php endif; ?>
   </div>
 </div></div>
</div>