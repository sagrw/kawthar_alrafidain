<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orphans>
 */
class OrphansFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name' => fake()->name, // اسم اليتيم
            // 'birth_date' => fake()->date, // المواليد
            // 'academic_achievement' => fake()->word, // التحصيل الدراسي
            // 'hobbies' => fake()->word, // الهواية
            // 'guarantor_name' => fake()->name, // اسم الكفيل
            // 'mediator' => fake()->name, // الوسيط
            // 'bail_amount' => fake()->numberBetween(100_000, 300_000), // مبلغ الكفالة
            // 'notes' => fake()-> word, //  الملاحظات
        ];
    }
}
