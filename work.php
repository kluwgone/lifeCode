<?php

public function getAliveNeighborCount($x,$y)
{
    for ($y2 = $y - 1; $y2 <= $y + 1; $y2++) {

          if ($y2 < 0 || $y2 >= $this->grid->getHeight()) {
            continue;
          }

          for ($x2 = $x - 1; $x2 <= $x + 1; $x2++) {
            if ($x2 == $x && $y2 == $y) {
              continue;
            }
            if ($x2 < 0 || $x2 >= $this->grid->getWidth()) {
              continue;
            }
            if ($this->grid->cells[$y2][$x2]) {
              $alive_count += 1;
            }
          }

    }
}




$live = $_POST['cells'];

$aliveCells = array();

// "élő" cellák

foreach ($live as $item) {
    $aliveCells[] = explode('_',$item);
}

for ($y = 0; $y < $this->grid->getHeight(); $y++) {
    for ($x = 0; $x < $this->grid->getWidth(); $x++) {
        $neighbor_count = $this->getAliveNeighborCount($x, $y);
        if ($cells[$y][$x] && ($neighbor_count < 2 || $neighbor_count > 3)) {
          $kill_queue[] = [$y, $x];
        }
        if (!$cells[$y][$x] && $neighbor_count === 3) {
          $born_queue[] = [$y, $x];
        }
    }
}









$data['number'] = array('2_9','2_11');
echo json_encode($data);