<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginTest extends DuskTestCase
{
    //Para que se hagan las migraciones, luego el test, y finalmente se eliminen las migraciones (tablas)
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_login()
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
            $browser->visit('/index')
            ->clickLink('Acceder')
            ->visit('/login')
            ->type('email', 'administrador@sistema.com')
            ->type('password', '1234')
            ->press('Acceder')
            ->assertPathIs('/index')->assertSee('Administrador del sistema');
        });
    }
}
