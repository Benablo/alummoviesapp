<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Movie;
class Delete extends Component
{
    public $movieId;

    public function getMovieProperty(){
        return Movie::select('id','title', 'producer', 'description')
        ->find($this->movieId);

    }
    public function deleteMovie(){
        $this->movie->delete();

        return redirect('/index')->with('message', 'Deleted Successfully!');


    }
    public function render()
    {
        return view('livewire.movies.delete');
    }
    public function back(){
        return redirect('/index');
    }
}
