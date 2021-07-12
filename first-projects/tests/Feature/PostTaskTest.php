<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTaskTest extends TestCase
{

    use RefreshDatabase; // データベースをリセット
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $name = 'new task';
        $response = $this->postJson('/api/tasks', [ //Jsonをpost
            'name' => $name,
        ]);

        $id = $response->Json(['id']);
        $response->assertStatus(201); //レスポンスを検証
        $response->assertJson([
            'id' => $id,
            'name' => $name
        ]);

        $this->assertDatabaseHas('tasks', [ //データベースに想定レコードがあるか検証
            'id' => $id,
            'name' => $name
        ]);
    }
}
