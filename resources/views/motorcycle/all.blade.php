@extends("layout.main")

@section("container")
    <h1>Ini Halaman {{$title}}</h1>
    <table class="table">
        <thead>
        <tr class="table-dark">
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($motorcycle_data as $motorcycle)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$motorcycle->motorcycle_name}}</td>
                <td>{{$motorcycle->motorcycle_brand}}</td>
                <td class="d-flex justify-content-evenly">
                    <a href="/motorcycle/{{$motorcycle -> id}}">
                        <button type="button" class="btn btn-outline-primary">Detail</button>
                    </a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
