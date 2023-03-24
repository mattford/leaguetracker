<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class HomePageController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Home', [
            'message' => 'Welcome',
        ]);
    }
}
