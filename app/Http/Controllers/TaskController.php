<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    //spread operation to get all arrays
    function getVariations(...$arrays)
    {
        $result = [[]];
        foreach ($arrays as $property => $property_values) {
            $tmp = [];
            foreach ($result as $result_item) {
                foreach ($property_values as $property_value) {
                    $tmp[] = array_merge($result_item, [$property => $property_value]);
                }
            }
            $result = $tmp;
        }
        return $result;

    }
    public function usage(){
        $arrayA = array('Red','Black','Blue');
        $arrayB = array('Large','Medium','Small');
        $arrayC = array('Cotton','Polyester');

        return$this->getVariations($arrayA, $arrayB, $arrayC);
    }


}
