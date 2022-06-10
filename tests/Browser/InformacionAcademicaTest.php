<?php

namespace Tests\Browser;

use App\Models\InformacionAcademica;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InformacionAcademicaTest extends DuskTestCase
{
    //Para que se hagan las migraciones, luego el test, y finalmente se eliminen las migraciones (tablas)
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_create_informacion_academica()
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
            ->visit('/informacion-academica/create')
            ->type('name', 'Infoacademica')
            ->attach('url', 'C:\Users\Ferjo\Downloads\hojadevida.pdf')
            ->press('Registro')
            ->assertPathIs('/informacion-academica')->assertSee('Infoacademica');
        });
    }

    public function test_update_informacion_academica()
    {
        User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        InformacionAcademica::create([
            'name' => 'Infoacademica',
            'url' => 'url', 'C:\Users\Ferjo\Downloads\hojadevida.pdf',
        ]);

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))                   //Hace el login
            ->visit('/informacion-academica/1/edit')
            ->type('name', 'Infoacademica pepitoperez')
            ->press('Actualizar')
            ->assertPathIs('/informacion-academica');
        });

    }

    public function test_delete_informacion_academica()
    {
        User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        InformacionAcademica::create([
            'name' => 'Infoacademica',
            'url' => 'url', 'C:\Users\Ferjo\Downloads\hojadevida.pdf',
        ]);

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))                   //Hace el login
            ->visit('/index')
            ->clickLink('Información académica')
            ->visit('/informacion-academica')
            ->type('submit', 'Eliminar X')
            ->assertPathIs('/informacion-academica');
        });

    }

}
