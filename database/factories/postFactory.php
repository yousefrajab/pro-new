<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words(4,true),
            //words(4,true) معناها بدي اربع كلمات و جملة وحدة
            //لو حطيت فولس بجيب الكلمات في مصفوفة
            //php faker -> استخدم مكتبة فيكر بتجيب كل البيانات وهمية
            'content' =>fake()->text(),
            'image' => fake()->imageUrl()
        ];
    }
}
