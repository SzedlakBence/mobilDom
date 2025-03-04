<?php
require_once 'Mobile.php';

function testGetAllMobile()
{
    $mobileObj = new Mobile();

    $mobiles =$mobileObj->getAllMobile();
    
    if(empty($mobiles))
    {
        echo "Nincs adat. \n";
    }
    else
    {
        echo "Mobilok felsorolása: \n";
        
        foreach($mobiles as $mobile)
        {
            echo "id: " . $mobile['m_id']. " | Leírás: "
            . $mobile['m_desc'] . "\n";
        }

    }
}

testGetAllMobile();