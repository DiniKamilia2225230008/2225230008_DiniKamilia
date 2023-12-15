<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TIKET PESAWAT NUSANTARA</title>
    
  </head>
  <body>
  <style>
       body{
	  background-image: url(https://lh6.googleusercontent.com/proxy/SX9XD88eTCFD05v1q0M4jKsyjIV5izp9ithlNfNOiNnAj5ZM-U3jrgswhZqtXVaWQH8YMAdmywUdjtm8nZhGThRVQeVs5huxOLqAYKag4sdhV7CPjrfAjg=s0-d);
    background-size: cover;
    background-repeat: no-repeat;
       }
       h1{
      text-align: center;
	  background-color: rgb(245, 255, 250);
	  border-radius: 100px;
	  width: 100%;
      height: 50px
	  font-size: 80px;
	  font-family: Consolas;
       }
       table{
	margin: auto;
	padding-bottom: 50px;
	color: #000000;
	background: #F5FFFA;
	height: 1px;
	border-radius: 30px;
	width: 40%;
	padding: 1%;
	font-size: 18px;

}
table td{
   padding: 8px 0;
}
       </style>
    <h1 class="text-center mb-4">TIKET PESAWAT NUSANTARA</h1>

    <div class="container">
    <a href="/tambahdata" class="btn btn-warning">Tambah Tiket</a>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Asal Daerah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $row->no++ }}</th>
      <td>{{ $row->Nama }}</td>
      <td>{{ $row->Email }}</td>
      <td>{{ $row->NomorTelepon }}</td>
      <td>{{ $row->AsalDaerah }}</td>
      <td>
      <a href="/tampilkandata/{{ $row->id }}" class="btn btn-primary">Edit</a>
      <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>