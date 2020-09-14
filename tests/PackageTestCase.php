<?php

namespace OwowAgency\UserRemoval\Tests;

use Mockery;
use Orchestra\Testbench\TestCase;
use OwowAgency\UserRemoval\UserRemovalServiceProvider;

abstract class PackageTestCase extends TestCase
{
    protected $user;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $user = Mockery::mock('Illuminate\Foundation\Auth\User');

        $user->shouldReceive('getAuthPassword')->andReturn(bcrypt('secret'))
            ->shouldReceive('getAuthIdentifier')->andReturn(1);

        $this->user = $user;
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [UserRemovalServiceProvider::class];
    }
}
