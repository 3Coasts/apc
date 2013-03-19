<?php
/**
 * template.php
 *
 * Implementation of hook_preprocess_panels_pane().
 */
function apc_preprocess_panels_pane(&$variables) {
  if(!empty($variables['content']['#entity_type']) && $variables['content']['#entity_type'] == 'fieldable_panels_pane') {
    $variables['theme_hook_suggestions'][] = 'panels_pane__' . $variables['content']['#bundle'];
  }
}
?>