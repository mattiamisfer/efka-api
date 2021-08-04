<?php

namespace Database\Seeders;

use App\Models\LanguageTranslation;
use Illuminate\Database\Seeder;

class LanguageTranlationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
  $languageTranslation =  [
    [
        'id' => 1,
        'locale'=> 'en',
        'language_id' =>1,
        'name' => 'DEALS OF THE DAY'
    ],
    [
        'id' => 2,
        'locale'=> 'ar',
        'language_id' =>1,
        'name' => 'عروض اليوم'
    ],

    [
        'id' => 3,
        'locale'=> 'en',
        'language_id' =>2,
        'name' => 'BEST SELLER'
    ],
    [
        'id' => 4,
        'locale'=> 'ar',
        'language_id' =>2,
        'name' => 'الأفضل مبيعاً'
    ],
    
    [
        'id' => 5,
        'locale'=> 'en',
        'language_id' =>3,
        'name' => 'HOME'
    ],
    [
        'id' => 6,
        'locale'=> 'ar',
        'language_id' =>3,
        'name' =>  'الرئيسية'
    ],

    [
        'id' => 7,
        'locale'=> 'en',
        'language_id' =>4,
        'name' => 'ABOUT US'
    ],
    [
        'id' => 8,
        'locale'=> 'ar',
        'language_id' =>4,
        'name' =>   'من نحن'
    ],
    [
        'id' => 9,
        'locale'=> 'en',
        'language_id' =>5,
        'name' => 'CONTACT US'
    ],
    [
        'id' => 10,
        'locale'=> 'ar',
        'language_id' =>5,
        'name' =>   'اتصل بنا'
    ],
    





    [
        'id' => 11,
        'locale'=> 'en',
        'language_id' =>6,
        'name' => 'PRIVACY POLICY'
    ],
    [
        'id' => 12,
        'locale'=> 'ar',
        'language_id' =>6,
        'name' =>   'سياسة الخصوصية'
    ],







    [
        'id' => 13,
        'locale'=> 'en',
        'language_id' =>7,
        'name' => 'CREATE AN ACCOUNT'
    ],
    [
        'id' => 14,
        'locale'=> 'ar',
        'language_id' =>7,
        'name' =>   'إنشاء حساب'
    ],






    [
        'id' => 15,
        'locale'=> 'en',
        'language_id' =>8,
        'name' => 'REGISTER LOGIN'
    ],
    [
        'id' => 16,
        'locale'=> 'ar',
        'language_id' =>8,
        'name' =>   'تسجيل الدخول'
    ],







    [
        'id' => 17,
        'locale'=> 'en',
        'language_id' =>9,
        'name' => 'RETURN AND REFUND POLICY'
    ],
    [
        'id' => 18,
        'locale'=> 'ar',
        'language_id' =>9,
        'name' =>   'سياسة الاستبدال والاسترجاع'
    ],






    [
        'id' => 19,
        'locale'=> 'en',
        'language_id' =>10,
        'name' => 'SITEMAP'
    ],
    [
        'id' => 20,
        'locale'=> 'ar',
        'language_id' =>10,
        'name' =>   'خريطة الموقع'
    ],







    [
        'id' => 21,
        'locale'=> 'en',
        'language_id' =>11,
        'name' => 'CART'
    ],
    [
        'id' => 22,
        'locale'=> 'ar',
        'language_id' =>11,
        'name' =>   'عربة التسوق'
    ],








    [
        'id' => 23,
        'locale'=> 'en',
        'language_id' =>12,
        'name' => 'PROFILE'
    ],
    [
        'id' => 24,
        'locale'=> 'ar',
        'language_id' =>12,
        'name' =>   'الملف الشخصي'
    ],







    [
        'id' => 25,
        'locale'=> 'en',
        'language_id' =>13,
        'name' => 'SETTING'
    ],
    [
        'id' => 26,
        'locale'=> 'ar',
        'language_id' =>13,
        'name' =>   'الاعدادات'
    ],






    [
        'id' => 27,
        'locale'=> 'en',
        'language_id' =>14,
        'name' => 'MY CART'
    ],
    [
        'id' => 28,
        'locale'=> 'ar',
        'language_id' =>14,
        'name' =>   'عربتي'
    ],






    [
        'id' => 29,
        'locale'=> 'en',
        'language_id' =>15,
        'name' => 'CHECKOUT'
    ],
    [
        'id' => 30,
        'locale'=> 'ar',
        'language_id' =>15,
        'name' =>   'الدفع'
    ],








    [
        'id' => 31,
        'locale'=> 'en',
        'language_id' =>16,
        'name' => 'DESCRIPTION'
    ],
    [
        'id' => 32,
        'locale'=> 'ar',
        'language_id' =>16,
        'name' => 'الوصف'
    ],






    [
        'id' => 33,
        'locale'=> 'en',
        'language_id' =>17,
        'name' => 'COLOR'
    ],
    [
        'id' => 34,
        'locale'=> 'ar',
        'language_id' =>17,
        'name' =>       'اللون'
    ],




    [
        'id' => 35,
        'locale'=> 'en',
        'language_id' =>18,
        'name' => 'SIZE'
    ],
    [
        'id' => 36,
        'locale'=> 'ar',
        'language_id' =>18,
        'name' =>       'المقاس'
    ],








    [
        'id' => 37,
        'locale'=> 'en',
        'language_id' =>19,
        'name' => 'MATERIALS'
    ],
    [
        'id' => 38,
        'locale'=> 'ar',
        'language_id' =>19,
        'name' =>      'المواد'
    ],

    [
        'id' => 39,
        'locale'=> 'en',
        'language_id' =>20,
        'name' => 'Forgot your password'
    ],
    [
        'id' => 40,
        'locale'=> 'ar',
        'language_id' =>20,
        'name' =>      'نسيت كلمة المرور'
    ],







    [
        'id' => 41,
        'locale'=> 'en',
        'language_id' =>21,
        'name' => 'Technical support'
    ],
    [
        'id' => 42,
        'locale'=> 'ar',
        'language_id' =>21,
        'name' =>      'الدعم الفني'
    ],









    [
        'id' => 43,
        'locale'=> 'en',
        'language_id' =>22,
        'name' => 'Complaints and suggestions'
    ],
    [
        'id' => 44,
        'locale'=> 'ar',
        'language_id' =>22,
        'name' =>       'الشكاوى والاقتراحات'
    ],









    [
        'id' => 45,
        'locale'=> 'en',
        'language_id' =>23,
        'name' => 'Logistics'
    ],
    [
        'id' => 46,
        'locale'=> 'ar',
        'language_id' =>23,
        'name' =>       'الخدمات اللوجستية'
    ],







    [
        'id' => 47,
        'locale'=> 'en',
        'language_id' =>24,
        'name' => 'Join our family'
    ],
    [
        'id' => 48,
        'locale'=> 'ar',
        'language_id' =>24,
        'name' =>       'أنظم إلى أسرتنا'
    ],







    [
        'id' => 49,
        'locale'=> 'en',
        'language_id' =>25,
        'name' => 'Terms and Conditions Policy'
    ],
    [
        'id' => 50,
        'locale'=> 'ar',
        'language_id' =>25,
        'name' =>     'سياسة الشروط والاحكام'
    ],







  




    
  ];

  LanguageTranslation::insert($languageTranslation); 
    }
}
