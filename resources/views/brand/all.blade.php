@extends("layout.main")

@section("container")
    <h1>Ini Halaman {{$title}}</h1>
    <table class="table">
        <thead>
        <tr class="table-dark">
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Launch Date</th>
            <th scope="col">Origin Country</th>
            <th scope="col">Factory Location</th>
            <th scope="col">Total Model</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($brand_data as $brand)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$brand->brands_name}}</td>
                <td>{{$brand->launch_date}}</td>
                <td>{{$brand->origin_country}}</td>
                <td>{{$brand->factory_location}}</td>
                <td>{{$brand->total_model}}</td>
                <td class="d-flex justify-content-evenly">
                    <a href="/brand/{{$brand -> id}}">
                        <button type="button" class="btn btn-outline-primary">Detail</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
