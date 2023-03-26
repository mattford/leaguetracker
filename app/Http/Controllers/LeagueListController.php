<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class LeagueListController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('LeagueList', [
            'leagues' => [
                [
                    'id' => 1,
                    'title' => 'WSM Open Badminton League 2023 Q1',
                ]
            ]
        ]);
    }

    public function add(): Response
    {
        return Inertia::render('LeagueAdd', []);
    }
}
