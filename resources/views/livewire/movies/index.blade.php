
<div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id No</th>
                <th>Title</th>
                <th>Producer</th>
                <th>Description</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <th>{{$movie->id}}</th>
                    <th>{{$movie->title}}</th>
                    <th>{{$movie->producer}}</th>
                    <th>{{$movie->description}}</th>
                    <th>{{$movie->genre}}</th>
                    <th>{{$movie->year}}</th>
                    <td >
                        <a href="{{url('edit', ['movie' => $movie->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    </td>
                    <td >
                        <a href="{{url('delete', ['movie' => $movie->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
