
@extends('layouts.cdmon')

@section('content')
<table id="server">
  <tr>
<th> Server number </th>
<th> PHP Version </th>
<th> Storage Capacity </th>
<th> DiskType </th>
<th> Database </th>
<th> Email </th>
<th> Username </th>
<th> Pass </th>

  </tr>
 
 
  @foreach($server as $servers)
  <tr>
    <td>{{$servers["id"]}} &nbsp;&nbsp;&nbsp;<a class="btn btn-success" href="server/{{$servers['id']}}">View server</a></td>
    <td>{{$servers["phpVersion"]}}</td>
    <td>{{$servers["storageCapacity"]}}</td>
    <td>{{$servers["diskType"]}}</td>
    <td>{{$servers["_database"]}}</td>
    <td>{{$servers["_email"]}}</td>
    <td>{{$servers["username"]}}</td>
    <td>{{$servers["pass"]}}</td>

  </tr>
    @endforeach
</table>
@endsection

