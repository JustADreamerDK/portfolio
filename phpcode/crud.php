<?php
    function getProducts(){
        global $objCon;
        $sql = "SELECT `id`, `titel`, `cover_img`, `video`, `tekst`, `type` FROM `produkt`";
        $result = $objCon->query($sql);
        return $result;
    }

    function getThreeProducts (){
        global $objCon;
        $sql = "SELECT `id`, `titel`, `cover_img`, `video`, `tekst`, `type` FROM `produkt` ORDER BY `id` DESC LIMIT 3";
        $result = $objCon->query($sql);
        return $result;
    }

    function getProduct ($id){
        global $objCon;
        $sql = "SELECT `id`, `titel`, `cover_img`, `video`, `tekst`, `type` FROM `produkt` WHERE `id` = '$id'";
        $result = $objCon->query($sql);
        return $result;
    }

    function getProductByType ($type){
        global $objCon;
        $sql = "SELECT `id`, `titel`, `cover_img`, `video`, `tekst`, `type` FROM `produkt` WHERE `type` = '$type'";
        $result = $objCon->query($sql);
        return $result;
    }

    function getImagesById ($id){
        global $objCon;
        $sql = "SELECT `id`, `img`, `produkt_id` FROM `produkt_img` WHERE `produkt_id` = '$id'";
        $result = $objCon->query($sql);
        return $result;
    }

 ?>
