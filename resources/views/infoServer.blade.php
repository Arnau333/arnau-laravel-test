@extends('layouts.infocdmon')
@section('content')

<h1 class="text-center text-success">Server number&nbsp;{{$server["id"]}}</h1>
  <table id="server">

  <th> Server number </th>
  <th> PHP Version </th>
  <th> Storage Capacity </th>
  <th> DiskType </th>
  <th> Database </th>
  <th> Email </th>
  <th> Username </th>
  <th> Pass </th>

  </tr>
 
  <tr>

    <td>{{$server["id"]}}</td>
    <td>{{$server["phpVersion"]}}</td>
    <td>{{$server["storageCapacity"]}}</td>
    <td>{{$server["diskType"]}}</td>
    <td>{{$server["_database"]}}</td>
    <td>{{$server["_email"]}}</td>
    <td>{{$server["username"]}}</td>
    <td>{{$server["pass"]}}</td>

  </tr>
  <tr>
</table>
<h2 class="text-center text-secondary domains-title">Domains</h2>
<table id=domain>
  <th>Name</th> 
  <th>Expiration Date</th> 
  <th>-</th>

  </tr>
  @foreach($domain as $domains)
  <tr>

  <td>{{$domains['name']}}</td>
  <td>{{$domains['expirationDate']}}</td>
  <td>
<button  onclick="$('#modal-{{$domains['client_id']}}').show()" class="btn btn-outline-secondary text-center">View clients</button>

  </td>
    
  </tr>
  @endforeach
</table>

</head>
<body>


<!-- Trigger/Open The Modal -->
@foreach($client as $clients)
<!-- The Modal -->
<div id="modal-{{$clients['id']}}" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <table class="table">
  <thead>
    <tr>

      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Telephone</th>     
    </tr>
  </thead>
  <tbody>
    
    <tr>
    <td>{{$clients['id']}}</td>
  <td>{{$clients['name']}}</td>
  <td>{{$clients['lastName']}}</td>
  <td>{{$clients['telephone']}}</td>

    </tr>

  </tbody>
</table>
  </div>

</div>
@endforeach

<script>

$(".close, div[id*='modal']").click(function (e) {
  $('.modal').hide();
 });

</script>

@endsection
