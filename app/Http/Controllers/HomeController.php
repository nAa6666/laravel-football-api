<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'team' => $this->getTeam(),
            'players' => $this->getPlayers(),
        ]);
    }

    public function getTeam()
    {
        $client = new Client();
        $response = $client->get('https://www.thesportsdb.com/api/v1/json/3/searchteams.php', [
            'query' => [
                't' => 'Arsenal'
            ]
        ])->getBody()->getContents();

        return json_decode($response)?->teams[0];
    }

    public function getPlayers()
    {
        $client = new Client();
        $response = $client->get('https://www.thesportsdb.com/api/v1/json/3/searchplayers.php', [
            'query' => [
                't' => 'Arsenal'
            ]
        ])->getBody()->getContents();

        return json_decode($response)?->player;
    }
}
