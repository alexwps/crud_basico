<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Aluno;

class AlunoTest extends TestCase
{
    use RefreshDatabase;


    public function it_can_create_an_aluno()
    {

        $aluno = Aluno::create([
            'nome' => 'João',
            'idade' => 18,
            'email' => 'joao@example.com',
        ]);


        $this->assertEquals('João', $aluno->nome);
        $this->assertEquals(18, $aluno->idade);
        $this->assertEquals('joao@example.com', $aluno->email);
    }


    public function it_can_update_an_aluno()
    {

        $aluno = Aluno::create([
            'nome' => 'Maria',
            'idade' => 20,
            'email' => 'maria@example.com',
        ]);


        $aluno->update([
            'nome' => 'Mariana',
            'idade' => 21,
            'email' => 'mariana@example.com',
        ]);


        $this->assertEquals('Mariana', $aluno->fresh()->nome);
        $this->assertEquals(21, $aluno->fresh()->idade);
        $this->assertEquals('mariana@example.com', $aluno->fresh()->email);
    }


    public function it_can_delete_an_aluno()
    {

        $aluno = Aluno::create([
            'nome' => 'Pedro',
            'idade' => 19,
            'email' => 'pedro@example.com',
        ]);


        $aluno->delete();


        $this->assertDatabaseMissing('alunos', ['id' => $aluno->id]);
    }
}
