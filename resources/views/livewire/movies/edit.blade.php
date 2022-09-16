<div>
   <div class="container col-md-6 offset-md-3 mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Edit Movie</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="title">
                <label for="title">Title</label>
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="producer">
                <label for="producer">Producer</label>
                @error('producer')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="description">
                <label for="description">Description</label>
                @error('description')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="genre" class="form-select" wire:model.defer="genre">
                    <option hidden="true">Genre</option>
                    <option selected disabled>Select Genre</option>
                    <option value="Romance">Romance</option>
                    <option value="Action">Action</option>
                    <option value="Drama">Drama</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>
                </select>
                <label for="genre">Genre</label>
                @error('genre')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="year" class="form-select" wire:model.defer="year">
                    <option hidden="true">Year</option>
                    <option selected disabled>Year</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                </select>
                <label for="year">Year Release</label>
                @error('year')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group mb-3 grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit" wire:click="addMovie()">
                    Add Movie
                </button>
            </div>
        </div>
    </div>
   </div>
</div>
