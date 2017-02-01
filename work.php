<?php

include ('models/table.php');

$live = $_POST['cells'];
$aliveCells = array();

// "élő" cellák átadás

foreach ($live as $item) {
    $exp = explode('_',$item);
    $aliveCells[$exp[0]][$exp[1]] = 1;
}
$table = new Table();

for ($y = 0; $y < $table->height; $y++) {
    for ($x = 0; $x < $table->width; $x++) {
        $neighbor_count = getAliveNeighborCount($x,$y,$aliveCells);
        if (isset($aliveCells[$y][$x]) && ($neighbor_count < 2 || $neighbor_count > 3)) {
          $dead[] = [$y, $x];
        }
        if (!isset($aliveCells[$y][$x]) && $neighbor_count === 3) {
          $born[] = [$y, $x];
        }
    }
}

function getAliveNeighborCount($x, $y,$aliveCells) {
    $table = new Table();
    $alive_count = 0;

    for ($y2 = $y - 1; $y2 <= $y + 1; $y2++) {
        if ($y2 < 0 || $y2 >= $table->height) {
            continue;
        }
        for ($x2 = $x - 1; $x2 <= $x + 1; $x2++) {
            if ($x2 == $x && $y2 == $y) {
                continue;
            }
            if ($x2 < 0 || $x2 >= $table->width) {
                continue;
            }
            if (isset($aliveCells[$y2][$x2])) {
                $alive_count ++;
            }
        }
    }

    return $alive_count;
}

foreach ($born as $item) {
    $data['new'][] = $item[0].'_'.$item[1];
}

foreach ($dead as $item) {
    $data['delete'][] = $item[0].'_'.$item[1];
}

echo json_encode($data);