###Custom add to cart
This module provides a custom add to cart button that you can just render in any template using the following line:
<?php print drupal_render (drupal_get_form('custom_add_to_cart_form', $node->nid)); ?>
