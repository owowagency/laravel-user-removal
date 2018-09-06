<?php

namespace OwowAgency\UserRemoval\Tests\Feature;

use OwowAgency\UserRemoval\Tests\PackageTestCase;

class DeleteTest extends PackageTestCase
{
    /** @test */
    public function a_user_can_delete_its_account()
    {
        $response = $this->actingAs($this->user)->delete('/users/me', [
            'Accept' => 'application/json',
        ]);

        $response->assertStatus(204);
    }
}
