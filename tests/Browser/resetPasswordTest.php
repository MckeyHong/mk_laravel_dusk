<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class resetPasswordTest extends DuskTestCase
{
    /**
     * 忘記密碼測試 - 檢查填寫資料後是否導至 password/reset 並看到 We have e-mailed your password reset link! 的字眼
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/password/reset')
                    ->type('email', 'mckey@ifalo.com.tw')
                    ->press('Send Password Reset Link')
                    ->assertPathIs('/password/reset')
                    ->assertSee('We have e-mailed your password reset link!');
        });
    }
}
