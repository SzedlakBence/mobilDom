<?php
require_once 'dbvezerlo.php';
class DBcontr_test
{
    public function tesztFuttatas()
    {
        echo"teszt inditása...\n";
        $db = new DBController();
        if($this->csatlakozasteszt($db))
        {
            echo "Sikeres csatlakozáás \n";

        }
        else
        {
            echo "Sikertelen csti \n";
        }
        $db ->closeDB();
    }
    private function csatlakozasteszt($db)
    {
        $informacio=new ReflectionClass($db);
        $tulajdonsag=$informacio->getProperty('conn');
        $tulajdonsag->setAccessible(true);
        return !is_null($tulajdonsag->getValue($db));

    }
}

$teszt=new DBContr_test();
$teszt->tesztFuttatas();