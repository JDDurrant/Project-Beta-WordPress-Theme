<ul id="sidebar">
<!--[If IE]>
<h2>Please Upgrade Your Browser</h2>
<p>It looks like you are using an old internet browser. For the best experience of this website and many other websites, please consider using <a href="https://www.google.com/intl/en_uk/chrome/browser/">Google Chrome</a> or <a href="http://www.mozilla.org/en-US/">Mozilla Firefox</a>.</p>
<![endif]-->
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
 <li id="about">
  <h2>About</h2>
  <p>This is my blog.</p>
 </li>
 <li id="links">
  <h2>Links</h2>
  <ul>
   <li><a href="http://example.com">Example</a></li>
  </ul>
 </li>
<?php endif; ?>
</ul>