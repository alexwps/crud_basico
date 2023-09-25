<?php

// database/factories/AlunoFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Aluno;

class AlunoFactory extends Factory
{
    protected $model = Aluno::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'idade' => $this->faker->numberBetween(18, 30),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
