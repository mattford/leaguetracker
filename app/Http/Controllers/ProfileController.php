<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    public function view(): Response
    {
        return Inertia::render('Profile', [
            'message' => 'Welcome',
        ]);
    }
}
