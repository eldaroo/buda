
<?php
function jobhunt_site_branding() {
        ?>
        <div class="site-branding">
        <?php if (! is_user_logged_in() ) {
             jobhunt_site_title_or_logo(); 
        }?>
        </div>
        <?php
    }
    ?>