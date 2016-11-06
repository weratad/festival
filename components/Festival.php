<?php namespace Goty\Weather\Components;

use Cache;
use Request;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Weather extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'แสดงหน้าเทศกาล',
            'description' => 'แสดงข้อมูล เฉพาะเทศกาลที่กำหนดไว้ตามเวลา'
        ];
    }


   // .....

}

?>