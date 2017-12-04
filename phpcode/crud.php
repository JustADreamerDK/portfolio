<?php
    function getProducts(){
        global $objCon;
        $sql = "SELECT `id`, `titel`, `img`, `tekst`, `type` FROM `produkt`";
        $result = $objCon->query($sql);
        return $result;
    }

    function getThreeProducts (){
        global $objCon;
        $sql = "SELECT `id`, `titel`, `img`, `tekst`, `type` FROM `produkt` ORDER BY `id` LIMIT 1";
        $result = $objCon->query($sql);
        return $result;
    }

    function getProduct ($id){
        global $objCon;
        $sql = "SELECT `id`, `titel`, `img`, `tekst`, `type` FROM `produkt` WHERE `id` = '$id'";
        $result = $objCon->query($sql);
        return $result;
    }

    function getProductByType ($type){
        global $objCon;
        $sql = "SELECT `id`, `titel`, `img`, `tekst`, `type` FROM `produkt` WHERE `type` = '$type'";
        $result = $objCon->query($sql);
        return $result;
    }

 ?>
