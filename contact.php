<?php

include "_includes/config.php";

include  ABSOLUTE_PATH . "/_includes/header.php";
include ABSOLUTE_PATH . "/_includes/main_nav.php";

?>

<div class="headerText">Contact Me</div>
</div> <!-- ENDS HEADER -->

<div id="contactPageWrapper">

    <?php
        if(isset($_COOKIE["emailSuccess"])) {

            echo "<div id='successMessage'>You're message has been sent</div>";

            //delete the cookie
            setcookie("emailSuccess", "", time()-3600, "/");
        }

    ?>

    <form class="contactForm" name="contactForm" method="post" action="<?= URL_ROOT ?>/contact/email_process.php">

        <div id="topContact">
            <div class="formPart">
                <input id="name" name="name" type="text" required>
                <label class="labelFont" for="name">Name</label>
            </div>

            <div class="formPart">
                <input id="email" name="email" type="email" required>
                <label class="test labelFont" for="email">Email</label>
            </div>
        </div> <!-- end top contact -->

        <div class="formPart">
            <input id="website" name="website" type="url" required>
            <label class="labelFont" for="website">Website</label>
        </div>

        <div class="formPart">
            <input id="subject" name="subject" type="text" required>
            <label class="labelFont" for="subject">Subject</label>
        </div>

        <div class="formPart">
            <textarea id="message" name="message" required></textarea>
            <label class="labelFont" for="message">Message</label>
        </div>

        <input class="submit" type="submit" value="Submit">


    </form>

</div>

<?php

include  ABSOLUTE_PATH . "/_includes/footer.php";

?>
