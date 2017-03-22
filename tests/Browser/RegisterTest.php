<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Faker\Factory as Faker;

class RegisterTest extends DuskTestCase
{
    /**
     * 註冊測試 - 檢查註冊後是否導至 home 並看到 You are logged in! 的字眼
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $fake = Faker::create();
            $password = str_random(10);
            $browser->visit('/register')
                    ->type('name', $fake->name)
                    ->type('email', $fake->email)
                    ->type('password', $password)
                    ->type('password_confirmation', $password)
                    ->press('Register')
                    ->assertPathIs('/home')
                    ->assertSee('You are logged in!');
        });
    }
}
