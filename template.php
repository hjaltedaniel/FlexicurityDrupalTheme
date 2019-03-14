<?php

function AE_preprocess_page(&$variables) {
  if (!empty($variables['node']) && !empty($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  }
}

function AE_preprocess_search_results(&$variables) {
    if ($variables['search_results']){
        $variables['theme_hook_suggestions'] = 'search_results';
        }
    }

function AE_preprocess_search_result(&$variables) {
    if ($variables['search_result']){
        $variables['theme_hook_suggestions'] = 'search_result';
        }
    }

function AE_page_alter(&$page) {
  // This assumes everything being output in the "content" page region.

  // Logged in
  if (!empty($page['content']['system_main']['content']['search_form'])) {
    unset($page['content']['system_main']['content']['search_form']);
  }

  // Not logged in
  if (!empty($page['content']['system_main']['search_form'])) {
    unset($page['content']['system_main']['search_form']);
  }
}

function AE_form_search_block_form_alter(&$form, &$form_state, $form_id) {
    $form['search_block_form']['#title'] = t('SØG'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 20;  // define size of the textfield
    $form['actions']['submit']['#value'] = "Søg"; // Change the text on the submit button
    $form['search_block_form']['#prefix'] = "<div class='input-group  d-flex flex-row align-items-center justify-content-end'><span class='oi oi-magnifying-glass'></span>";
    $form['actions']['submit']['#suffix'] = "</div>";
    $form['search_block_form']['#attributes']['class'] = t('form-control text-sm-right font-weight-bold');
    $form['search_block_form']['#attributes']['placeholder'] = t('Søg');
} 
?>