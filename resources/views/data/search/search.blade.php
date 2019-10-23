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
                                                <div class="" >
                                                        <form class="" action="/search" method="get">

                                                        <label for="ID">id provinsi</label>
                                                        <br>

                                                        <select class="form-control" name="id" id="">
                                                            @foreach ($daftarProvinsi as $dataprovinsi)
                                                            <option value="{{$dataprovinsi['province_id']}}">{{$dataprovinsi['province_id']}}</option>
                                                            @endforeach
                                                        </select>

                                                        <br>
                                                    <input type="text" value="" class="form-control" placeholder="Cari Kota" name="carii">
                                                    <br>
                                                    <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
                                                </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@stop



