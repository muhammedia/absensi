@extends('master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Column Search -->
        <div class="card">
            <div class="card-datatable text-nowrap">
                <table class="dt-column-search table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Post</th>
                            <th>City</th>
                            <th>Date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!--/ Column Search -->
    </div>
@endsection
