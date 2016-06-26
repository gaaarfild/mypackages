<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function index()
    {
        \Conf::set('foo.bar', 'bazzz');

        return new JsonResponse(['message' => 'All good']);
    }
}
