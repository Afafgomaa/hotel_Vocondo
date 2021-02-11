<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('booking')->delete();
       \DB::table('booking')->insert([

        // seprated booking days and room  (test)
            // ['room_id' => 1, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            // ['room_id' => 1, 'check_in' =>  '2020/12/05' , 'check_out' => '2020/12/10'],
            // ['room_id' => 2, 'check_in' =>  '2021/01/01' , 'check_out' => '2021/01/04'],
            // ['room_id' => 3, 'check_in' =>  '2021/01/01' , 'check_out' => '2021/01/06'],
            // ['room_id' => 9, 'check_in' =>  '2021/01/25' , 'check_out' => '2021/01/30'],


           // all room is Reserved (test) 
            ['room_id' => 1, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            ['room_id' => 2, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            ['room_id' => 3, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            ['room_id' => 4, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            ['room_id' => 5, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            ['room_id' => 6, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            ['room_id' => 7, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            ['room_id' => 8, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            ['room_id' => 9, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            ['room_id' => 10, 'check_in' =>  '2020/12/01' , 'check_out' => '2020/12/04'],
            
        ]);
      
    }
}
