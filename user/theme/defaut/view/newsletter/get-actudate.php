<?php
    if(!$this->userIsAdmin) header("Location: ./");

    $data = $this->apiLoad('content')->contentGet(array(
        'id_content'    => $_REQUEST['id_content'],
        'useGroup'      => false,
        'contentSee'    => 'ALL',
        'debug'         => false
    ));

    die($this->helperDate($data['field']['dateActu'], "Le %A %d %B %Y"));
?>