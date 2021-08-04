<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $language = [
            [
             'id' => 1,
             'status'=> 1
           
            ],
            [
                'id' => 2,
                'status'=> 1
            ],
            [
                'id' => 3,
                'status'=> 1
              
               ],
               [
                   'id' => 4,
                   'status'=> 1
               ],
               [
                'id' => 5,
                'status'=> 1
              
               ],
               [
                   'id' => 6,
                   'status'=> 1
               ],
               [
                'id' => 7,
                'status'=> 1
               ],
               [
                'id' => 8,
                'status'=> 1
              
               ],
               [
                   'id' => 9,
                   'status'=> 1
               ],
               [
                   'id' => 10,
                   'status'=> 1
                 
                  ],
                  [
                      'id' => 11,
                      'status'=> 1
                  ],
                  [
                   'id' => 12,
                   'status'=> 1
                 
                  ],
                  [
                      'id' => 13,
                      'status'=> 1
                  ],
                  [
                   'id' => 14,
                   'status'=> 1
                  ],
                  [
                    'id' => 15,
                    'status'=> 1
                ],
                [
                 'id' => 16,
                 'status'=> 1
               
                ],
                [
                    'id' => 17,
                    'status'=> 1
                ],
                [
                 'id' => 18,
                 'status'=> 1
                ],
                [
                 'id' => 19,
                 'status'=> 1
               
                ],
                [
                    'id' => 20,
                    'status'=> 1
                ],
                [
                    'id' => 21,
                    'status'=> 1
                  
                   ],
                   [
                       'id' => 22,
                       'status'=> 1
                   ],
                   [
                    'id' => 23,
                    'status'=> 1
                  
                   ],
                   [
                       'id' => 24,
                       'status'=> 1
                   ],
                   [
                    'id' => 25,
                    'status'=> 1
                   ]

            ];
 
 
             Language::insert($language); 
    }
}
