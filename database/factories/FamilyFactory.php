<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Family>
 */
class FamilyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'governorate' => fake()->city, // المحافظة
            // 'survay_date' => fake()->date, // تاريخ الاستبيان
            // 'deceased_name' => fake()->name , // اسم المتوفى
            // 'birth_date' => fake()->date('1980-01-01', '2000-01-01'), // التولد
            // 'academic_achievement' => fake()->word, // التحصيل الدراسي
            // 'profession' => fake()->word, // المهنة
            // 'death_date' => fake()->date(), // تاريخ الوفاة
            // 'death_status' =>fake()->word(), // حالة الوفاة
            // 'current_residence' => fake()->city, // محل السكن الحالي
            // 'phone_number' => fake()->phoneNumber, // هاتف
            // 'widowed_name' => fake()->name, // اسم الأرملة
            // 'widowed_burth_date' => fake()->date, // التولد
            // 'widowed_academic_achievement' => fake()->word, // التحصيل الدراسي
            // 'widowed_profession' => fake()->word, // المهنة
            // 'deceased_salary' => fake()->randomElement(['نعم', 'لا']), // هل يتقاضى المتوفى راتب تقاعدي
            // 'deceased_salary_value' => fake()->numberBetween(100_000, 500_000), // قيمة الراتب
            // 'mony_sources' => fake()->randomElement(['نعم', 'لا']), // هل يوجد للعائة مصدر للمال
            // 'sources_type' => fake()->word, // نوع المصدر
            // 'mony_value' => fake()->numberBetween(100_000, 500_000), // قيمة المال
            // 'family_assistance' => fake()->randomElement(['نعم', 'لا']), // هل تحصل  العائلة على مساعدات من جهة اخرى
            // 'entity_name' => fake()->name, // اسم الجهة
            // 'assistance_value' => fake()->numberBetween(100_000, 500_000), // قيمة المساعدة
            // 'family_house' => fake()->randomElement(['ملك', 'ورث', 'ايجار']), // البيت الذي تسكن فيه العائلة
            // 'rent_value' => fake()->numberBetween(100_000, 500_000), // قيمة الايجار
            // 'renter_name' => fake()->name, //  المتكفل بالايجار
            // 'living_status' => fake()->randomElement(['جيد', 'متوسط', 'ضعيف',  'ضعيف جدا']), // الحالة المعيشية
            // 'wife_living_with' => fake()->randomElement(['على انفراد', 'مع والدها', 'مع عائلة الزوج']), // هل الزوجة تعيش مع والدها أو مع عائلة الزوج ام تعيش على انفراد
            // 'family_patient' => fake()->randomElement(['نعم', 'لا']), // هل يوجد مريض في العائلة
            // 'patient_name' => fake()->name, // اسم المريض
            // 'disease_type' => fake()->word, //  يذكر نوع المرض
            // 'families_in_house' => fake()->numberBetween(1, 10),  // عدد العوائل في السكن
            // 'orphans_family_count' => fake()->numberBetween(1, 10), // عدد افراد اسرة اليتيم
            // 'sponsored_orphans_count' => fake()->numberBetween(1, 10),  // عدد الايتام المكفولين في الاسرة
            // 'orphans_type' => fake()->randomElement(['نعم', 'لا']), // هل الايتام سادة
        ];
    }
}
