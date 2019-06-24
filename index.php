<?php
include('config.php');
$va = $db->get('proposal')->row();;

print_r($va);