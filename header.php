<?php
$path = path_to_theme();

$tempPath = "/"  . $path;

?>

<div class="progress-indicator-2"></div>
<div id="top-bar" class="d-flex flex-row justify-content-between">
    <div id="slicknav"> <span></span> <span></span> <span></span> <span></span> </div>
    <div id="mobile-title">
        <h1>Flexicurity-modellen.dk</h1></div>
</div>
<?php 
if ($node->type == 'temaside') {
    $nid = $node->nid;
    $pos = (int)nodequeue_queue_position(1, $nid);
    if ($pos > 1) {
    $node_prev = nodequeue_load_nodes(1, FALSE, $pos - 2, 1);
    }
    $node_next = nodequeue_load_nodes(1, FALSE, $pos, 1);
    foreach ($node_next as $nextnode) {
        $nnid = $nextnode->nid;
    };
    foreach ($node_prev as $prevnode) {
        $fnid = $prevnode->nid;
    };
}
if ($node->type == 'temaside'): ?>
    <div id="pagination">
    <?php if ($pos > 1): ?><a href="../node/<?php echo $fnid; ?>"><span class="oi oi-arrow-thick-left"></span></a><?php endif; ?><a href="../"><span class="oi oi-home"></span></a><?php if ($pos < 7): ?><a href="../node/<?php echo $nnid; ?>"><span class="oi oi-arrow-thick-right"></span></a><?php endif; ?></div><?php endif; ?>
        <nav id="navigation">
            <div class="container main">
                <h1>Indholdsfortegnelse</h1>
                <div class="row">
                    <div class="col">
                        <ul id="primary" class="nav flex-column">
                            <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('nav', 'flex-column'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
                        </ul> <a href="<?php print $front_page; ?>" class="toback-to-thefrontpage"><span class="oi oi-arrow-left"></span>Tilbage til forsiden</a></div>
                    <div class="col"> <img src="<?php echo $tempPath;?>/assets/pictures/logo.svg" width="30%" class="nav-logo">
                        <p>Flexicurity-modellen.dk er et undervisningsmateriale om den danske model og flexicurity-modellen. Undervisningsmaterialet er udarbejdet til gymnasieelever, med udgangspunkt i de relevante læreplaner. Undervisningsmaterialet er udarbejdet af Arbejderbevægelsens Erhvervsråd.</p>
                        <?php print render($page['footer']); ?>
                    </div>
                </div>
            </div>
        </nav>
