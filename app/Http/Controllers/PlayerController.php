<?php
namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    public function create()
    {
        return view('players.create');
    }

    public function store(Request $request)
    {
        $messages = [
            'name.required' => __('El campo :attribute es obligatorio.'),
            'position.required' => __('El campo :attribute es obligatorio.'),
            'age.required' => __('El campo :attribute es obligatorio.'),
            'age.integer' => __('El campo :attribute debe ser un número entero.'),
            'age.min' => __('La :attribute debe ser al menos :min.'),
            'age.max' => __('La :attribute no puede ser mayor que :max.'),
        ];

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'age' => 'required|integer|min:18|max:100',
        ], $messages);

        Player::create($request->all());
        return redirect()->route('players.index');
    }

    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    public function update(Request $request, Player $player)
    {
        $messages = [
            'name.required' => __('El campo :attribute es obligatorio.'),
            'position.required' => __('El campo :attribute es obligatorio.'),
            'age.required' => __('El campo :attribute es obligatorio.'),
            'age.integer' => __('El campo :attribute debe ser un número entero.'),
            'age.min' => __('La :attribute debe ser al menos :min.'),
            'age.max' => __('La :attribute no puede ser mayor que :max.'),
        ];

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'age' => 'required|integer|min:18|max:100',
        ], $messages);

        $player->update($request->all());
        return redirect()->route('players.index');
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }
}
