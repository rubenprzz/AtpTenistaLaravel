<?php

namespace Tests\Feature;

use App\Models\Torneo;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Pagination\LengthAwarePaginator;
use Tests\TestCase;

class TorneoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexMethodReturnsPaginatedTorneosWithParticipantes()
    {
        Torneo::factory()->count(3)->create();

        $response = $this->get(route('torneos.index'));

        $response->assertOk();
        $response->assertViewIs('torneos.index');
        $torneos = $response->viewData('torneos');
        $this->assertInstanceOf(LengthAwarePaginator::class, $torneos);
        $this->assertCount(3, $torneos->items());
        $this->assertInstanceOf(Torneo::class, $torneos->first());
    }

    public function testShowMethodReturnsTorneoWithParticipantesForValidId()
    {
        $torneo = Torneo::factory()->create();

        $response = $this->get(route('torneos.show', $torneo->id));

        $response->assertOk();
        $response->assertViewIs('torneos.participantes');
        $response->assertSeeText($torneo->nombre);
        $this->assertEquals($torneo->id, $response->viewData('torneo')->id);
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $response->viewData('torneo')->participantes);
    }



    public function testCreateAuthorized()
    {
        $user = $this->createUser('admin');
        $this->actingAs($user);

        $response = $this->get(route('torneos.create'));
        $response->assertOk();
        $response->assertViewIs('torneos.create');
    }

    public function testCreateUnauthorized()
    {
        $user = $this->createUser('user');
        $this->actingAs($user);

        $response = $this->get(route('torneos.create'));
        $response->assertRedirect(route('welcome'));
    }

    public function testEditAuthorized()
    {
        $user = $this->createUser('admin');
        $torneo = Torneo::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('torneos.edit', $torneo->id));
        $response->assertOk();
        $response->assertViewIs('torneos.edit');
    }

    public function testEditUnauthorized()
    {
        $user = $this->createUser('user');
        $torneo = Torneo::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('torneos.edit', $torneo->id));
        $response->assertRedirect(route('welcome'));
    }



    public function testUpdateUnauthorized()
    {
        $user = $this->createUser('user');
        $torneo = Torneo::factory()->create();
        $this->actingAs($user);

        $updatedData = [
            'nombre' => 'Updated Name',
        ];

        $response = $this->put(route('torneos.update', $torneo->id), $updatedData);
        $response->assertRedirect(route('welcome'));
    }


    public function testDestroyUnauthorized()
    {
        $user = $this->createUser('user');
        $torneo = Torneo::factory()->create();
        $this->actingAs($user);

        $response = $this->delete(route('torneos.destroy', $torneo->id));

        $response->assertRedirect(route('welcome'));
    }

    private function createUser($role)
    {
        return User::factory()->create([
            'role' => $role,
        ]);
    }
}
