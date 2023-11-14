@extends("layout.main")

@section("container")
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Motorcycle Details</h2>
            </div>
            <img src="{{ $motorcycle->image }}">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row">Motorcycle Name</th>
                        <td>{{ $motorcycle->motorcycle_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Motorcycle Brand</th>
                        <td>{{ $motorcycle->motorcycle_brand }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Introduced Year</th>
                        <td>{{ $motorcycle->launch_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Introduced Year</th>
                        <td>${{ $motorcycle->price }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Created At</th>
                        <td>{{ $motorcycle->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Updated At</th>
                        <td>{{ $motorcycle->updated_at }}</td>
                    </tr>
                    </tbody>
                </table>
                <a href="/motorcycle" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection
