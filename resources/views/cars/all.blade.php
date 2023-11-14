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
        @foreach($cars_data as $car)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$car->car_name}}</td>
                <td>{{$car->car_brand}}</td>
                <td class="d-flex justify-content-evenly">
                    <a href="/cars/{{$car -> id}}">
                        <button type="button" class="btn btn-outline-primary">Detail</button>
                    </a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
