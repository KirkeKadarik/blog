<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created = Carbon::create(fake()->dateTimeBetween());
        $updated = fake()->dateTimeBetween($created, Carbon::create($created)->addDays(3));
        if (rand(0, 10)) {
            $update = $created;
        }
$imageUrl = null;
if(rand(0,9)) {
    $imageUrl = 'https://picsum.photos/seed/' . fake()->uuid() . '/1280/960';
}
        return [
            
            'body' => fake()->sentence(),
           
            'created_at' => $created,
            'updated_at' => $updated,
        ];
    }
}
