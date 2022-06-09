<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HojasDeVidaTest extends DuskTestCase
{
    //Para que se hagan las migraciones, luego el test, y finalmente se eliminen las migraciones (tablas)
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_create_hojas_de_vida()
    {
        User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1));                   //Hace el login
            $browser->visit('/index');
            $browser->clickLink('Hojas de vida');
            $browser->visit('/hojas-de-vida');
            $browser->clickLink('Crear hoja de vida');
            $browser->visit('/hojas-de-vida/create');
            $browser->type('name', 'Pepito Perez');

            $browser->select('rol');
            $browser->attach('url', 'C:\Users\Ferjo\Downloads\hojadevida.pdf');
            $browser->select('estado');
            $browser->type('email', 'pepitoperez@gmail.com');
            $browser->type('password', '1234');
            $browser->type('password_confirmation', '1234');
            $browser->press('Registrarse');
            $browser->assertPathIs('/hojas-de-vida')->assertSee('Pepito Perez');
        });
    }

    public function test_update_hojas_de_vida()
    {
        User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        User::create([
            'name' => 'Pepito Perez',
            'email' => 'pepitoperez@sistema.com',
            'rol' => 'Desarrollador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1));                   //Hace el login
            $browser->visit('/index');
            $browser->clickLink('Hojas de vida');
            $browser->visit('/hojas-de-vida');
            $browser->clickLink('Editar');
            $browser->visit('/hojas-de-vida/2/edit');
            $browser->type('name', 'Pepito Pérez Martínez');
            $browser->press('Registro');

            $browser->assertPathIs('/hojas-de-vida');
        });
    }

    public function test_delete_hojas_de_vida()
    {
        User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        User::create([
            'name' => 'Pepito Perez',
            'email' => 'pepitoperez@sistema.com',
            'rol' => 'Desarrollador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1));                   //Hace el login
            $browser->visit('/index');
            $browser->clickLink('Hojas de vida');
            $browser->visit('/hojas-de-vida');
            $browser->press('Eliminar X');
            $browser->assertPathIs('/hojas-de-vida');
        });
    }
}
