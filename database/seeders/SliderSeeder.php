<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $sliders = [
           [
            'id' => 1,
            'image'=> 'https://i.gadgets360cdn.com/large/big-big_1563436302237.jpg',
            'mode' => 'product',
            'redirect_to' => 1
           ],
           [
            'id' => 2,
            'image'=> 'https://trak.in/wp-content/uploads/2020/03/Flipkart-sale.jpg',
            'mode' => 'category',
            'redirect_to' => 5
           ]
           ];


           Slider::insert($sliders); 
    }
}
