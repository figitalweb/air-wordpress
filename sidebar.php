<div class="row row-pb-md">
    <!-- Sidebar Izquierdo -->
    <?php
    if (is_active_sidebar('footer-sidebar-left')) {
        dynamic_sidebar('footer-sidebar-left');
    }
    ?>

    <!-- Sidebar Centro -->
    <?php
    if (is_active_sidebar('footer-sidebar-cent')) {
        dynamic_sidebar('footer-sidebar-cent');
    }else{ ?>
        <div class="col-md-4 col-md-push-1 fh5co-widget">
        </div>
        <?php
    }
    ?>

    <!-- Sidebar Derecha -->
    <?php
    if (is_active_sidebar('footer-sidebar-right')) {
        dynamic_sidebar('footer-sidebar-right');
    }
    ?>

    <!-- <div class="col-md-4 col-md-push-1 fh5co-widget">
        <h4>Contact Information</h4>
        <ul class="fh5co-footer-links">
            <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
            <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
            <li><a href="http://https://freehtml5.co">freehtml5.co</a></li>
        </ul>
    </div> -->

</div>