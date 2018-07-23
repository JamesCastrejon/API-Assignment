<?php $location = "Home"; ?>
<?php include "header.php"; ?>
<div class="container">
    <div id="nav">
        <h1><?php include "headerTitle.php"; ?></h1>
        <?php include "menu.php"; ?>
    </div>
    <div class="sidenav">
        <h1>Filters</h1>
        <?php include "sideMenu.php"; ?>
    </div>
    <div id="body">
        <div class="outer">
            <div class="middle">
                <div class="inner">
                    <h2>List of Items</h2>
                    <script>
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                alert(this.responseText);
                            }
                        };
                        xmlhttp.open("GET", "10.10.16.189/api/foo.php", true);
                        xmlhttp.send();
                    </script>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>