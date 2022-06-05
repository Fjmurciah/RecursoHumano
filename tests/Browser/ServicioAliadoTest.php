<?php

namespace Tests\Browser;

use App\Models\ServiciosAliado;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ServicioAliadoTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_create_Servicio_Aliado()
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
            $browser->clickLink('Información de servicios aliados');
            $browser->visit('/informacion-aliado');
            $browser->clickLink('Crear información aliados');
            $browser->visit('/informacion-aliado/create');
            $browser->type('name', 'Empresa');
            $browser->type('nit', '1234');
            $browser->attach('url', 'C:\Users\Ferjo\Downloads\hojadevida.pdf');
            $browser->press('Registro');
            $browser->assertPathIs('/informacion-aliado')->assertSee('Empresa');
        });
    }

    public function test_update_Servicio_Aliado()
    {
        User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        ServiciosAliado::create([
            'name' => 'Empresa',
            'nit' => '1234',
            'url' => 'C:\Users\Ferjo\Downloads\hojadevida.pdf',
        ]);

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1));                   //Hace el login
            $browser->visit('/index');
            $browser->clickLink('Información de servicios aliados');
            $browser->visit('/informacion-aliado');
            $browser->clickLink('Editar');
            $browser->visit('/informacion-aliado/1/edit');
            $browser->type('name', 'Empresa SAS');
            $browser->press('Registro');
            $browser->assertPathIs('/informacion-aliado')->assertSee('Empresa SAS');
        });
    }

    public function test_delete_Servicio_Aliado()
    {
        User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        ServiciosAliado::create([
            'name' => 'Empresa',
            'nit' => '1234',
            'url' => 'C:\Users\Ferjo\Downloads\hojadevida.pdf',
        ]);

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1));                   //Hace el login
            $browser->visit('/index');
            $browser->clickLink('Información de servicios aliados');
            $browser->visit('/informacion-aliado');
            $browser->visit('/informacion-aliado');
            $browser->press('Eliminar X');
            $browser->assertPathIs('/informacion-aliado');
        });
    }
}
