<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Aluno;

class AlunoIntegrationTest extends TestCase
{
    use RefreshDatabase; 
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        
        Aluno::factory()->create(['nome' => 'João']);
        Aluno::factory()->create(['nome' => 'Maria']);
    }
    public function it_can_list_students()
    {
        
        $response = $this->get('/alunos');

        $response->assertStatus(200);
        $response->assertSee('João');
        $response->assertSee('Maria');
    }
}
