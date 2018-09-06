<?php

namespace OwowAgency\UserRemoval\Tests\Unit;

use OwowAgency\UserRemoval\Tests\PackageTestCase;
use OwowAgency\UserRemoval\Http\Rules\ComparePassword;

class ComparePasswordTest extends PackageTestCase
{
    /** @test */
    public function a_password_can_be_compared_successfully()
    {
        $rule = new ComparePassword($this->user);

        $this->assertTrue($rule->passes('password', 'secret'));
    }

    /** @test */
    public function a_password_can_be_compared_but_can_be_incorrectly()
    {
        $rule = new ComparePassword($this->user);

        $this->assertFalse($rule->passes('password', 'super_secret'));
    }

    /** @test */
    public function it_returns_the_correct_message()
    {
        $rule = new ComparePassword($this->user);

        $this->assertEquals(trans('userremoval::users.password_mismatch'), $rule->message());
    }
}
