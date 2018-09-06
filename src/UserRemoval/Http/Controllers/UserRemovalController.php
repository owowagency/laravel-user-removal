<?php

namespace OwowAgency\UserRemoval\Http\Controllers;

use Illuminate\Routing\Controller;
use OwowAgency\UserRemoval\Http\Requests\DeleteRequest;

class UserRemovalController extends Controller
{
    /**
     * UserRemovalController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $middleware = config('userremoval.middleware');

        foreach ($middleware as $item) {
            $this->middleware($item);
        }
    }

    /**
     * Delete the authenticated user.
     *
     * @param  \OwowAgency\UserRemoval\Http\Requests\DeleteRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(DeleteRequest $request)
    {
        $user = currentUser();

        $user->delete();

        return no_content();
    }
}
