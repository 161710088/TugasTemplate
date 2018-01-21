@extends('layouts.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <font face="times new roman"> Berhasil Login!</font>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container"><br>
<center><img src="logo-custom.png"></center>
</div>
@endsection