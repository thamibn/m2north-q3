@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Corona Stats</div>

                    <div class="card-body">
                        <table class="table table-sm table-hover">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Country</th>
                                <th scope="col">Total Cases</th>
                                <th scope="col">New Cases</th>
                                <th scope="col">Total Deaths</th>
                                <th scope="col">New Deaths</th>
                                <th scope="col">Total Discovered</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jsonData as $row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $row['country'] }}</td>
                                    <td>{{ $row['total_cases'] }}</td>
                                    <td>{{ $row['new_cases'] }}</td>
                                    <td>{{ $row['total_deaths'] }}</td>
                                    <td>{{ $row['new_deaths'] }}</td>
                                    <td>{{ $row['total_discovered'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
