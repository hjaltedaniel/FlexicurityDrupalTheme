<?php include("header.php"); ?>
    <header>
        <style>
            header {
                background: linear-gradient(rgba(160, 33, 37, 0.6), rgba(160, 33, 37, 0.6)), url(<?php echo file_create_url($node->field_headerbillede['und'][0]['uri']);
                ?>) center/cover;
            }
        </style>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 tema-side-titelblad align-midddle">
                    <?php if ($title): ?>
                        <h1 class="tema-side-title"><?php print $title; ?></h1>
                        <?php endif; ?>
                            <?php if ($node->field_subtitel): ?>
                                <h2 class="tema-side-subtitle"><?php echo $node->field_subtitel['und'][0]['value']; ?></h2>
                                <?php endif; ?>
                </div>
            </div>
            <div id="scroll-button"> <a href="#content-main"><span></span></a> </div>
        </div>
    </header>
    <main id="content-main">
        <div class="container main">
            <?php echo $node->body['und'][0]['safe_value']; ?>
        </div>
    </main>
    <section class="opgaver">
        <div class="container main">
            <h3 id="opg-r-head"><?php echo $node->field_q1_titel['und'][0]['safe_value']; ?></h3>
            <div id="opg-r-txt">
                <?php echo $node->field_q1_tekst['und'][0]['safe_value']; ?>
            </div>
            <h3 id="opg-u-head"><?php echo $node->field_q2_titel['und'][0]['safe_value']; ?></h3>
            <div id="opg-u-txt">
                <?php echo $node->field_q2_tekst['und'][0]['safe_value']; ?>
            </div>
            <h3 id="opg-d-head"><?php echo $node->field_q3_titel['und'][0]['safe_value']; ?></h3>
            <div id="opg-d-txt">
                <?php echo $node->field_q3_tekst['und'][0]['safe_value']; ?>
            </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
        <?php include("scripts.php"); ?>