@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>Total Cases</th>
                                <th>New Cases</th>
                                <th>Total Deaths</th>
                                <th>New Deaths</th>
                                <th>Total Recovered</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $jsonData as $data )
                            <tr> 
                                <td>{{ $data['country'] }}</td>    
                                <td>{{ $data['total_cases'] }}</td>  
                                <td>{{ $data['new_cases'] }}</td> 
                                <td>{{ $data['total_deaths'] }}</td> 
                                <td>{{ $data['new_deaths'] }}</td> 
                                <td>{{ $data['total_recovered'] }}</td> 
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
