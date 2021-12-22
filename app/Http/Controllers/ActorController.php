<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    protected function getAll()
    {
        return Actor::all();
    }

    protected function store()
    {
        request()->validate([
            'title' => 'required',
            'name' => 'required'
        ]);

        $response = Actor::create([
            'title' => request('title'),
            'name' => request('name')
        ]);

        return [
            'success' => $response
        ];
    }

    protected function update(Actor $actor)
    {
        request()->validate([
            'title' => 'required',
            'name' => 'required'
        ]);

        $response = $actor->update([
            'title' => request('title'),
            'name' => request('name')
        ]);

        return [
            'success' => $response
        ];
    }

    protected function destroy(Actor $actor)
    {
        $response = $actor->delete();

        return [
            'success' => $response
        ];
    }
}
