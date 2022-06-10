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
            $browser->loginAs(User::find(1))                   //Hace el login
            ->visit('/index')
            ->clickLink('Información de servicios aliados')
            ->visit('/informacion-aliado')
            ->clickLink('Crear información aliados')
            ->visit('/informacion-aliado/create')
            ->type('name', 'Empresa')
            ->type('nit', '1234')
            ->attach('url', 'C:\Users\Ferjo\Downloads\hojadevida.pdf')
            ->press('Registro')
            ->assertPathIs('/informacion-aliado')->assertSee('Empresa');
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
            $browser->loginAs(User::find(1))                   //Hace el login
            ->visit('/index')
            ->clickLink('Información de servicios aliados')
            ->visit('/informacion-aliado')
            ->clickLink('Editar')
            ->visit('/informacion-aliado/1/edit')
            ->type('name', 'Empresa SAS')
            ->press('Registro')
            ->assertPathIs('/informacion-aliado')->assertSee('Empresa SAS');
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
            $browser->loginAs(User::find(1))                   //Hace el login
            ->visit('/index')
            ->clickLink('Información de servicios aliados')
            ->visit('/informacion-aliado')
            ->press('Eliminar X')
            ->assertPathIs('/informacion-aliado');
        });
    }
}
