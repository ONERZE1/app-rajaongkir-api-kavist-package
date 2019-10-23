@extends('layout.main')

@section('content')

            <div class="main">
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col md-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                                <form class="navbar-form navbar-left" action="/kota" method="get">
                                                    <div class="input-group" >
                                                        <input type="text" value="" class="form-control" placeholder="Search dashboard..." name="cari">
                                                        <span class="input-group-btn lnr lnr-magnifier"><button type="submit" class="btn btn-primary"><i class="lnr lnr-magnifier"></i></button></span>
                                                    </div>
                                                </form>

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
                                                    @foreach ($daftarkotaall as $datakotaall)
                                                        <tr>

                                                        <td>{{$datakotaall['type']}}</td>
                                                        <td>{{$datakotaall['city_name']}}</td>
                                                        <td>{{$datakotaall['postal_code']}}</td>
                                                        <td>{{$datakotaall['province']}}</td>

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



