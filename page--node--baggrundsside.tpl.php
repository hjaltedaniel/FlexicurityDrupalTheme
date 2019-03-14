<?php include("header.php"); ?>
    <header class="baggrundsside">
        <style>
            header {
                background: linear-gradient(rgba(0, 69, 110, 0.6), rgba(0, 69, 110, 0.6)), url(<?php echo file_create_url($node->field_headerbillede_bg['und'][0]['uri']);
                ?>) center/cover;
            }
        </style>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 tema-side-titelblad align-midddle">
                    <h1 class="tema-side-title"><?php print $title; ?></h1> </div>
            </div>
        </div>
    </header>
    <main id="content-main">
        <div class="container main baggrundsside-tekst ">
            <?php echo $node->body['und'][0]['safe_value']; ?>
            <?php include("files.php"); ?>
        </div>
    </main>
    <?php include("footer.php"); ?>
        <?php include("scripts.php"); ?>