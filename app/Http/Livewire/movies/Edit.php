<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Movie;
class Edit extends Component
{
    public $movieId;
    public $title, $producer, $description, $year, $genre;

    public function mount(){
        $this->title = $this->movie->title;
        $this->producer = $this->movie->producer;
        $this->description = $this->movie->description;
        $this->genre = $this->movie->genre;
        $this->year = $this->movie->year;

    }

    public function editMovie(){
        $this->validate([
            'title'              =>            ['required' ,'string', 'max:255'],
            'producer'           =>            ['required' ,'string', 'max:255'],
            'description'        =>            ['required' ,'string', 'max:255'],
            'genre'              =>            ['required' ,'string', 'max:255'],
            'year'               =>            ['required' ,'numeric','min:1' ,'max:4'],
        ]);
        $this->movie->update([
            'title'              =>        $this->title,
            'producer'           =>        $this->producer,
            'description'        =>        $this->description,
            'genre'              =>        $this->genre,
            'year'               =>        $this->year,
        ]);
        return redirect('/index')->with('message' , 'Updated SucessFully');
    }


    public function getMovieProperty(){
        return Movie::find($this->movieId);
    }


    public function render()
    {
        return view('livewire.movies.edit');
    }
}
