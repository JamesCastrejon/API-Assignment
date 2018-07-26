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
			        <p id="txt"></p>		
                    <script>
                        var url_string = window.location.href;
                        var url = new URL(url_string);
                        var a = url.searchParams.get("name");
                        var b = url.searchParams.get("price");
                        var c = url.searchParams.get("category");
                        var params = "";
                        if (a != null) {
                            params = "?name="+a;
                        }
                        if (b != null) {
                            params = "?price="+b;
                        }
                        if (c != null) {
                            params = "?category="+c;
                        }
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("txt").innerHTML = this.responseText;
                            }
                        };
                        if (params != "") {
                            xmlhttp.open("GET", "http://10.10.16.189/demo2/index.php"+params, true);
                        }
                        else {
                            xmlhttp.open("GET", "http://10.10.16.189/demo2/index.php", true);
                        }
                        xmlhttp.send();
                    </script>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
