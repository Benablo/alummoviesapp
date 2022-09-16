<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Movie;

class Index extends Component
{
    public function loadMovie(){
        $movies = Movie::orderBy('title')->get();

        return compact('movies');
    }
    public function render()
    {
        return view('livewire.movies.index', $this->loadMovie());
    }
}
