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
            $browser->loginAs(User::find(1));                   //Hace el login
            $browser->visit('/index');
            $browser->press('Información académica');
            $browser->visit('/informacion-academica');
            $browser->press('Crear información académica');
            $browser->visit('/informacion-academica/create');
            $browser->type('name', 'Infoacademica');
            $browser->attach('url', 'C:\Users\Ferjo\Downloads\hojadevida.pdf');
            $browser->press('Registro');
            $browser->assertPathIs('/informacion-academica')->assertSee('Infoacademica');
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
            $browser->loginAs(User::find(1));                   //Hace el login
            $browser->visit('/index');
            $browser->press('Información académica');
            $browser->visit('/informacion-academica');
            $browser->press('Editar');
            $browser->visit('/informacion-academica/1/edit');
            $browser->type('name', 'Infoacademica pepitoperez');
            $browser->press('Actualizar');
            $browser->assertPathIs('/informacion-academica');
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
            $browser->loginAs(User::find(1));                   //Hace el login
            $browser->visit('/index');
            $browser->press('Información académica');
            $browser->visit('/informacion-academica');
            $browser->press('Eliminar X');
            $browser->assertPathIs('/informacion-academica');
        });

    }

}
