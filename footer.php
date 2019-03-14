<?php
$path = path_to_theme();

$tempPath = "/"  . $path;

?>
   <footer>
    <div class="container main">
        <div class="row">
            <div class="col d-flex flex-column align-self-end"> <img class="img-fluid" src="<?php echo $tempPath; ?>/assets/pictures/fuld-logo.svg" alt="Arbejderbevægelsens Erhvervsråd" style="padding-bottom:20px">
                <p>Flexicurity-modellen.dk er et undervisningsmateriale om den danske model og flexicurity-modellen. Undervisningsmaterialet er udarbejdet til gymnasieelever, med udgangspunkt i de relevante læreplaner. Undervisningsmaterialet er udarbejdet af Arbejderbevægelsens Erhvervsråd.</p>
            </div>
            <div class="col">
                <?php print render($page['footer']); ?>
            </div>
        </div>
        <div class="row">
            <div class="col copyright">
                <p>AE - Arbejderbevægelsens Erhvervsråd - Reventlowsgade 14, 1. sal - 1651 København V. - Telefon 3355 7710 - Telefax 3355 7710 - E-mail: <a href="mailto:ae@ae.dk">ae@ae.dk</a></p>
            </div>
        </div>
    </div>
</footer>
