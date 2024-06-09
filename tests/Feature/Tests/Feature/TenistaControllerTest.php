<?php

namespace Tests\Feature;

use App\Models\Tenista;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Pagination\LengthAwarePaginator;
use Tests\TestCase;

class TenistaControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexMethodReturnsPaginatedTenistasWithTorneos()
    {
        Tenista::factory()->count(3)->create();

        $response = $this->get(route('tenistas.index'));

        $response->assertOk();
        $response->assertViewIs('tenistas.index');
        $tenistas = $response->viewData('tenistas');
        $this->assertInstanceOf(LengthAwarePaginator::class, $tenistas);
        $this->assertCount(3, $tenistas->items());
        $this->assertInstanceOf(Tenista::class, $tenistas->first());
    }

    public function testShowMethodReturnsTenistaWithTorneosForValidId()
    {
        $tenista = Tenista::factory()->create();

        $response = $this->get(route('tenistas.show', $tenista->id));

        $response->assertOk();
        $response->assertViewIs('tenistas.show');
        $response->assertSeeText($tenista->nombre);
        $this->assertEquals($tenista->id, $response->viewData('tenista')->id);
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $response->viewData('tenista')->torneos);
    }

    public function testShowMethodReturns404ErrorForInvalidId()
    {
        $invalidId = 999;

        $response = $this->get(route('tenistas.show', $invalidId));

        $response->assertStatus(404);
    }

    public function testCreateAuthorized()
    {
        $user = $this->createUser('admin');
        $this->actingAs($user);

        $response = $this->get(route('tenistas.create'));
        $response->assertOk();
        $response->assertViewIs('tenistas.create');
    }

    public function testCreateUnauthorized()
    {
        $user = $this->createUser('user');
        $this->actingAs($user);

        $response = $this->get(route('tenistas.create'));
        $response->assertRedirect(route('welcome'));
    }

    public function testEditAuthorized()
    {
        $user = $this->createUser('admin');
        $tenista = Tenista::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('tenistas.edit', $tenista->id));
        $response->assertOk();
        $response->assertViewIs('tenistas.edit');
    }

    public function testEditUnauthorized()
    {
        $user = $this->createUser('user');
        $tenista = Tenista::factory()->create();
        $this->actingAs($user);

        $response = $this->get(route('tenistas.edit', $tenista->id));
        $response->assertRedirect(route('welcome'));
    }

    public function testUpdateAuthorized()
    {
        $user = $this->createUser('admin');
        $tenista = Tenista::factory()->create();
        $this->actingAs($user);

        $updatedData = [
            'nombre' => 'Updated Name',
        ];

        $response = $this->put(route('tenistas.update', $tenista->id), $updatedData);

        $response->assertRedirect(route('tenistas.index'));
        $this->assertDatabaseHas('tenistas', [
            'id' => $tenista->id,
            'nombre' => 'Updated Name',
        ]);
    }

    public function testUpdateUnauthorized()
    {
        $user = $this->createUser('user');
        $tenista = Tenista::factory()->create();
        $this->actingAs($user);

        $updatedData = [
            'nombre' => 'Updated Name',
            // Añade los campos necesarios para la actualización
        ];

        $response = $this->put(route('tenistas.update', $tenista->id), $updatedData);
        $response->assertRedirect(route('welcome'));
    }

    public function testDestroyAuthorized()
    {
        $user = $this->createUser('admin');
        $tenista = Tenista::factory()->create();
        $this->actingAs($user);

        $response = $this->delete(route('tenistas.destroy', $tenista->id));

        $response->assertRedirect(route('tenistas.index'));

        $this->assertSoftDeleted('tenistas', ['id' => $tenista->id]);
    }

    public function testDestroyUnauthorized()
    {
        $user = $this->createUser('user');
        $tenista = Tenista::factory()->create();
        $this->actingAs($user);

        $response = $this->delete(route('tenistas.destroy', $tenista->id));

        $response->assertRedirect(route('welcome'));
    }

    private function createUser($role)
    {
        return User::factory()->create([
            'role' => $role,
        ]);
    }
}
