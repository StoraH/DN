<?php
//kpr(get_defined_vars());
?>
<!-- Box entrie-->
<article <?php if($classes){ ?>class="box <?php print $classes;?>"<?php } ?> role="article">
  <?php
    if (isset($title_suffix['contextual_links'])){
      print render($title_suffix['contextual_links']);
    }
  ?>
  <?php if ($main): ?>
      <?php print $main; ?>
  <?php endif; ?>
</article>
