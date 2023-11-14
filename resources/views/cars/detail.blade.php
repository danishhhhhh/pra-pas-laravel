@extends("layout.main")

@section("container")
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Car Details</h2>
            </div>
            <img src="{{ $car->image }}">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row">Motorcycle Name</th>
                        <td>{{ $car->car_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Motorcycle Brand</th>
                        <td>{{ $car->car_brand }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Introduced Year</th>
                        <td>{{ $car->launch_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Introduced Year</th>
                        <td>${{ $car->price }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Created At</th>
                        <td>{{ $car->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Updated At</th>
                        <td>{{ $car->updated_at }}</td>
                    </tr>
                    </tbody>
                </table>
                <a href="/cars" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection
