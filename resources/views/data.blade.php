@extends('layouts.index')
@section('content')
<p><h1><font face="times new roman"><center>Data siswa SMK ASSALAAM BANDUNG</center></font></h1></p>
  <table bgcolor="blue" class="table" border="2" >
<tr>
  <th>ID</th>
  <th>NIS</th>
  <th>Nama</th>
  <th>Tempat Lahir</th>
  <th>Tanggal Lahir</th>
  <th>Alamat</th>   
  <th>Cita-Cita</th>
  <th>Hobi</th>
  <th>Foto</th>
</tr>
@foreach($pablo as $ya)
<tr>
<td>{{$ya -> id}}</td>
<td>{{$ya -> nis}}</td> 
<td>{{$ya -> nama}}</td> 
<td>{{$ya -> tempatlahir}}</td> 
<td>{{$ya -> tanggallahir}}</td> 
<td>{{$ya -> alamat}}</td> 
<td>{{$ya -> citacita}}</td> 
<td>{{$ya -> hobi}}</td>
<td><img src="{{ asset('gambar/'.$ya->foto)  }}" style="max-height:150px;max-width:150px;margin-top:5px;"></td>
</tr>
@endforeach
</table>
</div>
<br>
@endsection