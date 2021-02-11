<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\CarbonPeriod;


class FindRoomsController extends Controller
{
    public function findRoom(Request $request)
    {
        $period = CarbonPeriod::between($request->from, $request->to);
        $daysDetails = [];
        foreach ($period as $date) {
            $temp = $date->format('Y/m/d');
            $rooms = \DB::table('rooms')
            ->select('*') 
            ->whereRaw("
                    id   
                    NOT IN (
                        select room_id from booking where ('{$temp}' BETWEEN check_in and check_out) 
                    ) 
            ")->get();
            
            $countedTypes = $rooms->countBy(function ($room) {
                return $room->type; //get type count 
            });
            $roomsDoubleAvalibale = isset($countedTypes['double']) ? $countedTypes['double'] : 0;
            $roomsTripleAvalibale = isset($countedTypes['triple']) ? $countedTypes['triple'] : 0;

            $availability = count($rooms) > 0 ? 'TRUE' : 'FALSE';

            $daysDetails[$temp] = " available : ". $availability .
                                    " for this day I have ".
                                    $roomsDoubleAvalibale . " double and  " .
                                    $roomsTripleAvalibale ." triple rooms available" ;

             
            }

      return response()->json(['data' => $daysDetails]);
        
    }

}
