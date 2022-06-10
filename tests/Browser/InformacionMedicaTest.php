<?php

namespace Tests\Browser;

use App\Models\InformacionMedica;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InformacionMedicaTest extends DuskTestCase
{
    //Para que se hagan las migraciones, luego el test, y finalmente se eliminen las migraciones (tablas)
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_create_informacion_Medica()
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
            ->clickLink('Información médica')
            ->visit('/informacion-medica')
            ->clickLink('Crear información medica')
            ->visit('/informacion-medica/create')
            ->type('name', 'infoMedica')
            ->attach('url', 'C:\Users\Ferjo\Downloads\hojadevida.pdf')
            ->press('Registro')
            ->assertPathIs('/informacion-medica')->assertSee('infoMedica');
        });
    }

    public function test_update_informacion_Medica()
    {
        User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        InformacionMedica::create([
            'name' => 'InfoMedica',
            'url' => 'url', 'C:\Users\Ferjo\Downloads\hojadevida.pdf',
        ]);

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))                   //Hace el login
            ->visit('/index')
            ->clickLink('Información médica')
            ->visit('/informacion-medica')
            ->clickLink('Editar')
            ->visit('/informacion-medica/1/edit')
            ->type('name', 'infoMedica pacho')
            ->press('Registro')
            ->assertPathIs('/informacion-medica')->assertSee('infoMedica');
        });

    }

    public function test_delete_informacion_Medica()
    {
        User::create([
            'name' => 'Administrador del sistema',
            'email' => 'administrador@sistema.com',
            'rol' => 'Administrador',
            'estado' => 'Activo',
            'url' => '',
            'password' => Hash::make('1234'),
        ]);

        InformacionMedica::create([
            'name' => 'InfoMedica',
            'url' => 'url', 'C:\Users\Ferjo\Downloads\hojadevida.pdf',
        ]);

        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))                   //Hace el login
            ->visit('/index')
            ->clickLink('Información médica')
            ->visit('/informacion-medica')
            ->findByNameOrId('Eliminar X')->click()
            ->assertPathIs('/informacion-medica');
        });

    }

}
