<?php
    if(!$this->userIsAdmin) header("Location: ./");

    // 5 dernieres actus
    $data = $this->apiLoad('content')->contentGet(array(
        'id_type' 		=> 75,
        'assoCategory'  => true,
        'useGroup'  	=> false,
        'limit'			=> '5',
        'debug'			=> false
    ));
    $ids = array();
    foreach($data  as $d) {
        $ids[] = $d['id_content'];
    }
    echo json_encode($ids);
?>