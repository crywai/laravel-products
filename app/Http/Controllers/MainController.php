<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public $array = [
        ['id' => 1, 'title' => 'Механическая клавиатура', 'price' => 3500, 'path' => 'keyboard.jpg'],
        ['id' => 2, 'title' => 'Компактная клавиатура', 'price' => 2800, 'path' => 'keyboard-compact.jpg'],
        ['id' => 3, 'title' => 'Мембранная клавиатура', 'price' => 900, 'path' => 'keyboard-membrane.jpg'],
        ['id' => 4, 'title' => 'Игровая мышь', 'price' => 1500, 'path' => 'mouse.jpg'],
        ['id' => 5, 'title' => 'Беспроводная мышь', 'price' => 2200, 'path' => 'mouse-wireless.jpg'],
        ['id' => 6, 'title' => 'Проводная мышь', 'price' => 500, 'path' => 'mouse-wired.jpg'],
        ['id' => 7, 'title' => 'Игровые наушники', 'price' => 3000, 'path' => 'headphones-gaming.jpg'],
        ['id' => 8, 'title' => 'Проводные наушники', 'price' => 1000, 'path' => 'headphones-wired.jpg'],
    ];

    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = $this->array;

        return view('array', compact('array'));
    }

    public function shuffleArray()
    {
        $array = $this->array;
        shuffle($array);

        return view('array', compact('array'));
    }

    public function sortArray()
    {
        $array = $this->array;
        usort($array, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });

        return view('array', compact('array'));
    }
}
