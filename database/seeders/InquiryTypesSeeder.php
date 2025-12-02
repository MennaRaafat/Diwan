<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InquiryType;

class InquiryTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'خدمات محاسبيه',
            'الضرائب والاقرارات',
            'دراسة الجدوى',
            'مراجعه القوائم المالية',
            'استشارات عامه',
            'اخرى'
        ];

        foreach($types as $type){
            InquiryType::create([
                'name' => $type
            ]);
        }
    }
}
