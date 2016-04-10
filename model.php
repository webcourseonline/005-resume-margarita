<?php

function readMassage()
{
    $savedMassages = array_reverse( explode('\r\n',file_get_contents('massages.txt')) );
    foreach ($savedMassages as $key => $value) {
        $savedMassages[$key] = json_decode($value, true);
        var_dump($savedMassages);
    }

    return $savedMassages;

}

function saveMassage($data)
{
    $massages = fopen("massages.txt", "a+");
    fwrite($massages, json_encode($data).'\r\n');
    fclose($massages);
}