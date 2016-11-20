<?php
include_once "cabecalho.php";
include_once "menu.php";
?>



<div class="container">

    <?php

    if (empty ($_REQUEST['pagina'])) {
        include_once "main.php";
    } else {
        include_once $_REQUEST['pagina'] . ".php";
    }
    ?>



</div> <!-- /container -->
<div id="footerwrap">
    <footer class="clearfix"></footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <p><img src="logo.png" alt=""></p>
                <p>MyColletions - Powered by <a href="http://www.codeboys.pt">Codeboys</a></p>
            </div>

        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /footerwrap -->


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<!--<script type="text/javascript" src="assets/js/lineandbars.js"></script>-->

<script type="text/javascript" src="assets/js/dash-charts.js"></script>
<!--<script type="text/javascript" src="assets/js/gauge.js"></script>-->

<!-- NOTY JAVASCRIPT -->
<script type="text/javascript" src="assets/js/noty/jquery.noty.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/top.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/topLeft.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/topRight.js"></script>
<script type="text/javascript" src="assets/js/noty/layouts/topCenter.js"></script>

<!-- You can add more layouts if you want -->
<script type="text/javascript" src="assets/js/noty/themes/default.js"></script>
<!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
<script src="assets/js/jquery.flexslider.js" type="text/javascript"></script>

<!--<script type="text/javascript" src="assets/js/admin.js"></script>-->

</body></html>