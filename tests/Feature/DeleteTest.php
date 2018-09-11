<?php

namespace OwowAgency\UserRemoval\Tests\Feature;

use OwowAgency\UserRemoval\Tests\PackageTestCase;

class DeleteTest extends PackageTestCase
{
    /** @test */
    public function a_user_can_delete_its_account_by_sending_delete_request()
    {
        $response = $this->actingAs($this->user)->delete('/users/me', [
            'Accept' => 'application/json',
        ]);

        $response->assertStatus(204);
    }

    /** @test */
    public function a_user_can_delete_its_account_by_sending_post_request()
    {
        $response = $this->actingAs($this->user)->post('/users/me', [
            'Accept' => 'application/json',
        ]);

        $response->assertStatus(204);
    }
}
