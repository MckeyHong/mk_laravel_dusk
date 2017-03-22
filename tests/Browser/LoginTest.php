<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * 登入測試 - 檢查登入後是否導至 home 並看到 You are logged in! 的字眼
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/login')
                    ->type('email', 'mckey@ifalo.com.tw')
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->assertSee('You are logged in!');
        });
    }
}
