<?php
    include ('models/table.php');

    $table = new Table();
    $live = array(110,210,310);
?>

<html>
<head>
    <link type="text/css" href="./assets/css/bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="./assets/css/default.css" rel="stylesheet" />
    <script type="text/javascript" src="./assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="./assets/js/default.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid header">Game of Life</div>
    <div class="col-lg-1 leftmenu submit"><button class="btn btn-success">Lépés</button></div>
    <div class="col-lg-3 maincontent">
        <table class="maintable">
            <?php
                for ($i=1;$i<$table->height;$i++){
                    print "<tr>";
                    for ($j=1;$j<$table->width;$j++){
                        if (in_array($i.$j,$live)) print "<td id=".$i.'_'.$j." class='active cell'></td>";
                        else print "<td id=".$i.'_'.$j." class='cell'></td>";
                    }
                }
            ?>
        </table>
    </div>
    <div class="col-lg-1 maincontent">
        <form action="index.php" method="GET">
            <label>Szélesség</label>
            <input type="text" name="width" />
            <label>Magasság</label>
            <input type="text" name="height" />
            <input type="submit" value="mehet"/>
        </form>
    </div>
</body>

<script>
    var height = <?php echo json_encode($table->height); ?>;
    var width = <?php echo json_encode($table->width); ?>;
</script>

</html>






