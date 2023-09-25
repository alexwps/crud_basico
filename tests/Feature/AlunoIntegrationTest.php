<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Aluno;

class AlunoIntegrationTest extends TestCase
{
    use RefreshDatabase; // Usar banco de dados de teste
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        // Crie alguns alunos no banco de dados usando a Factory
        Aluno::factory()->create(['nome' => 'João']);
        Aluno::factory()->create(['nome' => 'Maria']);
    }
    /** @test */
    public function it_can_list_students()
    {
        // Criar alguns alunos no banco de dados usando a Factory ou diretamente

        // Acessar a página de listagem de alunos
        $response = $this->get('/alunos');

        // Verificar se a página de listagem é carregada com sucesso
        $response->assertStatus(200);

        // Verificar se os alunos criados estão presentes na página de listagem
        $response->assertSee('João');
        $response->assertSee('Maria');
        // Verifique outros alunos, se necessário
    }
}
