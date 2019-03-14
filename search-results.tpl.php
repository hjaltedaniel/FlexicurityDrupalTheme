<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
$path = path_to_theme();

$tempPath = "/flexicurity/" . $path;

?>
    <header class="baggrundsside">
        <style>
            header {
                background: linear-gradient(rgba(0, 69, 110, 0.6), rgba(0, 69, 110, 0.6)), url(<?php echo $tempPath ?>/assets/pictures/search.jpg) center/cover;
            }
        </style>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 tema-side-titelblad align-midddle">
                    <h1 class="tema-side-title"><?php print t('Søgeresultater');?></h1> </div>
            </div>
        </div>
    </header>
        <main id="content-main">
        <div class="container main baggrundsside-tekst ">
<?php if ($search_results): ?>
  <ol class="search-results <?php print $module; ?>-results">
    <?php print $search_results; ?>
  </ol>
  <?php print $pager; ?>
<?php else : ?>
  <h2><?php print t('Your search yielded no results');?></h2>
  <?php print search_help('search#noresults', drupal_help_arg()); ?>
<?php endif; ?>
            </div>
</div>
        <?php include("scripts.php"); ?>
