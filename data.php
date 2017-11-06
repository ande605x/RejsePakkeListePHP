<?php
/**
 * Created by PhpStorm.
 * User: AndersWin
 * Date: 06-11-2017
 * Time: 13:50
 */

$listeRejseItem = array();

    function AddItems($r){
        array_push($listeRejseItem,$r);
    }

    function DisplayList($list)
    {
        echo "Rejse-Pakke-Listen er: <br>";
        foreach ($list as $item){
            echo "Ting: " . $item->itemName ." Kategori: " . $item->category . " Taske: " . $item->bag;
            echo "<br>";
        }
    }