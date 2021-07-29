<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
             'locale' =>'en',
             'category_id' => 1,
             'name' => 'Cooking'
             
            ],
            [
                'id' => 2,
                'locale' =>'ar',
                'category_id' => 1,
                'name' => 'الطبخ'
                
               ],
               [
                'id' => 3,
                'locale' =>'en',
                'category_id' => 2,
                'name' => 'Gifts and Arrangements'
                
               ],
               [
                   'id' => 4,
                   'locale' =>'ar',
                   'category_id' => 2,
                   'name' => 'التوزيعات والهدايا'
                   
                  ],
                  [
                    'id' => 5,
                    'locale' =>'en',
                    'category_id' => 3,
                    'name' => 'Flower Arrangement'
                    
                   ],
                   [
                       'id' => 6,
                       'locale' =>'ar',
                       'category_id' => 3,
                       'name' => 'تنسيق الزهور'
                       
                      ],
                      [
                        'id' => 7,
                        'locale' =>'en',
                        'category_id' => 4,
                        'name' => 'sewing, stitching, and Embroidery'
                        
                       ],
                       [
                           'id' => 8,
                           'locale' =>'ar',
                           'category_id' => 4,
                           'name' => 'الخياطة والحياكة والتطريز'
                           
                          ],
                          [
                            'id' => 9,
                            'locale' =>'en',
                            'category_id' => 5,
                            'name' => 'Candle Making'
                            
                           ],
                           [
                               'id' => 10,
                               'locale' =>'ar',
                               'category_id' => 5,
                               'name' => 'صناعة الشموع'
                               
                              ],

                              [
                                'id' => 11,
                                'locale' =>'en',
                                'category_id' => 6,
                                'name' => 'Carpentry and Woodwork'
                                
                               ],
                               [
                                   'id' => 12,
                                   'locale' =>'ar',
                                   'category_id' => 6,
                                   'name' => 'النجارة والأعمال الخشبية'
                                   
                                  ],

                                  [
                                    'id' => 13,
                                    'locale' =>'en',
                                    'category_id' => 7,
                                    'name' => 'Accessories'
                                    
                                   ],
                                   [
                                       'id' => 14,
                                       'locale' =>'ar',
                                       'category_id' => 7,
                                       'name' => 'الاكسسوارات'
                                       
                                      ],
                                      [
                                        'id' => 15,
                                        'locale' =>'en',
                                        'category_id' => 8,
                                        'name' => 'Drawing and Stamping'
                                        
                                       ],
                                       [
                                           'id' => 16,
                                           'locale' =>'ar',
                                           'category_id' => 8,
                                           'name' => 'الرسم والنقش'
                                           
                                          ],
                                          [
                                            'id' => 17,
                                            'locale' =>'en',
                                            'category_id' => 9,
                                            'name' => 'Perfume and Incense'
                                            
                                           ],
                                           [
                                               'id' => 18,
                                               'locale' =>'ar',
                                               'category_id' => 9,
                                               'name' => 'العطور والبخور'
                                               
                                              ],
                                              [
                                                'id' => 19,
                                                'locale' =>'en',
                                                'category_id' => 10,
                                                'name' => 'Printing'
                                                
                                               ],
                                               [
                                                   'id' => 20,
                                                   'locale' =>'ar',
                                                   'category_id' => 10,
                                                   'name' => 'الطباعة'
                                                   
                                                  ],
                                                  [
                                                    'id' => 21,
                                                    'locale' =>'en',
                                                    'category_id' => 11,
                                                    'name' => 'Soap Making'
                                                    
                                                   ],
                                                   [
                                                       'id' => 22,
                                                       'locale' =>'ar',
                                                       'category_id' => 11,
                                                       'name' => 'صناعة الصابون'
                                                       
                                                      ],
                                                      [
                                                        'id' => 23,
                                                        'locale' =>'en',
                                                        'category_id' => 12,
                                                        'name' => 'Crafts and handicrafts'
                                                        
                                                       ],
                                                       [
                                                           'id' => 24,
                                                           'locale' =>'ar',
                                                           'category_id' => 12,
                                                           'name' => 'الحرف والمشغولات اليدوية'
                                                           
                                                          ],
                                                          [
                                                            'id' => 25,
                                                            'locale' =>'en',
                                                            'category_id' => 13,
                                                            'name' => 'Decoupage'
                                                            
                                                           ],
                                                           [
                                                               'id' => 26,
                                                               'locale' =>'ar',
                                                               'category_id' => 13,
                                                               'name' => 'الديكوباج'
                                                               
                                                              ],
                                                              [
                                                                'id' => 27,
                                                                'locale' =>'en',
                                                                'category_id' => 14,
                                                                'name' => 'Crochet and knitting'
                                                                
                                                               ],
                                                               [
                                                                   'id' => 28,
                                                                   'locale' =>'ar',
                                                                   'category_id' => 14,
                                                                   'name' => 'الكروشيه والتريكو'
                                                                   
                                                                  ],
                                                                  [
                                                                    'id' => 29,
                                                                    'locale' =>'en',
                                                                    'category_id' => 15,
                                                                    'name' => 'Gardening'
                                                                    
                                                                   ],
                                                                   [
                                                                       'id' => 30,
                                                                       'locale' =>'ar',
                                                                       'category_id' => 15,
                                                                       'name' => 'الزراعة'
                                                                       
                                                                      ],

               
           
            ];

            
           CategoryTranslation::insert($sliders); 
    }
}
