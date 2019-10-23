@extends('layout.main')

@section('content')


<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                    <form class="navbar-form navbar-left" action="/" method="get">
                                        <div class="input-group" >
                                            <input type="text" value="" class="form-control" placeholder="Search dashboard..." name="serch">
                                            <span class="input-group-btn lnr lnr-magnifier"><button type="submit" class="btn btn-primary"><i class="lnr lnr-magnifier"></i></button></span>
                                        </div>
                                    </form>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Daftar Provinsi Indonesia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($daftarProvinsi as $dataprovinsi)
                                            <tr>
                                            <td><a href="/{{$dataprovinsi['province_id']}}/kota">{{$dataprovinsi['province_id']}}</a></td>
                                            <td><a href="/{{$dataprovinsi['province_id']}}/kota">{{$dataprovinsi['province']}}</a></td>

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
