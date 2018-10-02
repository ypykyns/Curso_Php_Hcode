<?php

$json = '[{"nome":"Glaucio","idade":25},{"nome":"Joana","idade":87},{"nome":"Aderbal","idade":8},{"nome":"Jeremias","idade":64},{"nome":"Enzo","idade":95}]';

$data = json_decode($json,true);


var_dump($data);


  ?>