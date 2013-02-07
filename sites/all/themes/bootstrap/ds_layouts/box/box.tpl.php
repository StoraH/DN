<?php
//dpm(get_defined_vars());
$cat_color_array = taxonomy_term_load($field_category['und']['0']['tid']);
if (isset($cat_color_array->field_color['und']['0'])){
$cat_color = $cat_color_array->field_color['und']['0']['jquery_colorpicker'];
}
if (empty($cat_color)) {
  $cat_color = 'fff';
}
?>
<!-- Box entrie-->
<article <?php if($classes){ ?>class="box <?php print $classes;?>"<?php } ?>
  <?php print "style='border-color: #" . $cat_color . "'"?> role="article">
  <?php
    if (isset($title_suffix['contextual_links'])){
      print render($title_suffix['contextual_links']);
    }
  ?>
  <?php if ($main): ?>
      <?php print $main; ?>
  <?php endif; ?>
</article>
