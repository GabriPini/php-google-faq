<main>
        <div class="faq">

            <?php

            foreach ($faq as $quest) { ?>

                <?php echo $quest["question"] ?>
                <?php echo $quest["answers"] ?>

            <?php }; ?>
        </div>
    </main>