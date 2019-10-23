@extends('layout.main')

@section('content')

            <div class="main">
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col md-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Region</th>
                                                        <th>Nama Kota</th>
                                                        <th>Kode Pos</th>
                                                        <th>Provinsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($hasil as $hasil)
                                                        <tr>

                                                        <td>{{$hasil['type']}}</td>
                                                        <td>{{$hasil['city_name']}}</td>
                                                        <td>{{$hasil['postal_code']}}</td>
                                                        <td>{{$hasil['province']}}</td>

                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@stop



