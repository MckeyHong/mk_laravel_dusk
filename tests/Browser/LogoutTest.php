<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class LogoutTest extends DuskTestCase
{
    /**
     * 登出測試 - 檢查登出後是否有看到 Laravel 文字
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/home')
                    ->clickLink('Logout')
                    ->assertSee('Laravel');
        });
    }
}
