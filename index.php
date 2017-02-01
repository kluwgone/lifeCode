<?php
//include ('models/connect.php');
    include ('models/person.php');
    include ('models/teacher.php');
    include ('models/student.php');

    if (isset($_GET['width'])) $tablewidth = $_GET['width'];
    else $tablewidth = 20;

    if (isset($_GET['height'])) $tableheight = $_GET['height'];
    else $tableheight = 20;

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
    <div class="col-lg-1 leftmenu submit"><button class="btn btn-success">Next step</button></div>
    <div class="col-lg-11 maincontent">
        <table class="maintable">
            <?php
                for ($i=1;$i<$tableheight;$i++){
                    print "<tr>";
                    for ($j=1;$j<$tablewidth;$j++){
                        if (in_array($i.$j,$live)) print "<td id=".$i.'_'.$j." class='active cell'></td>";
                        else print "<td id=".$i.'_'.$j." class='cell'></td>";
                    }
                }
            ?>
        </table>
    </div>
</body>

</html>



<?php

//$teacher->setName('Béla');
//$teacher->setSubject('Földrajz');



//for ($i = 0; $i < count($down); ++$i){
//    print $down[$i].", ";
//}
$teacher = new Teacher();
$down = $teacher->getNames();
/*foreach ($down as $teacher) {
    print $teacher['name']."<br/>";
}*/
$i=0;
/*
?>
    <select>
    <?php for ($i=0;$i<=count($down);$i++) { ?>
        <option><?php print $teacher['ID']; ?></option>
    <?php } ?>
    </select>
<?php

//echo $teacher->getName();
//echo $teacher->getSubject();

/*$person= new Person();
$person->setName('Geri');
echo $person->getName();

$person1= new Person();
$person1->setName('Martin');
echo $person1->getName();*/


