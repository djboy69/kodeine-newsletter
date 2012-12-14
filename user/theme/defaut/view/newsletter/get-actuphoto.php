<?php
    if(!$this->userIsAdmin) header("Location: ./");

    $data = $this->apiLoad('content')->contentGet(array(
        'id_content'    => $_REQUEST['id_content'],
        'useGroup'      => false,
        'contentSee'    => 'ALL',
        'debug'         => false
    ));

    $aff = '&nbsp; ';

    if(sizeof($data['contentMedia']['image']) > 0) {
        $image = $data['contentMedia']['image'][0];
        if($image['exists'] == 1) {
            $img = $this->mediaUrlData(array(
                'url'       => $image['url'],
                'mode'      => 'width',
                'value'     => 60
            ));

            $aff = '<img src="http://'.$_SERVER["HTTP_HOST"].''.$img['img'].'" width="60" />';
        }
    }
    die($aff);
?>