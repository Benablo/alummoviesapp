<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header">
                <h3>Delete Movie??</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td>{{$this->movie->title}}</td>
                    </tr>
                    <tr>
                        <th>Producer</th>
                        <td>{{$this->movie->producer}}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{$this->movie->description}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer ">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger btn-sm" wire:click="deleteMovie()">
                        Delete
                    </button>
                    <button class="btn btn-success btn-sm mx-2" wire:click="back()"  >
                        Back
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
