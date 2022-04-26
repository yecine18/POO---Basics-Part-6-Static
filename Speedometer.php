<?php 


class Speedometer 
{
    const km =1.609 ;
    const  miles =0.621;
    public static function convertToKlm($km,)
    {
        
        $km= $km * self::km;
        return $km.'km';

    }
    public static function convertToMiles($miles)
    {
        $miles = $miles * self::miles;
        return $miles.'miles'; 
    }

}
