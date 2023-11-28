@extends("layout.main")

@section("container")
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Brand Details</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row">Brand Name</th>
                        <td>{{ $brand->brands_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Introduced Year</th>
                        <td>{{ $brand->launch_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Motorcycle Brand</th>
                        <td>{{ $brand->origin_country }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Introduced Year</th>
                        <td>{{ $brand->factory_location }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Introduced Year</th>
                        <td>{{ $brand->total_model }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Created At</th>
                        <td>{{ $brand->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Updated At</th>
                        <td>{{ $brand->updated_at }}</td>
                    </tr>
                    </tbody>
                </table>
                <a href="/cars" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection
