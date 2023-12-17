<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Nama Dosen</title>
  </head>
  <body>
    <h1 class="text-center mb-5">Data Nama Dosen Pendidikan Matematika</h1>
    <h2 class="text-center mb-4">FKIP Untirta</h2>

<div class="container">
<a href="/tambahdosen" type="button" class="btn btn-success mb-5">Tambah Data</a>
<div class="row">
    @if ($message = Session::get('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    {{ $message }}
  </div>
</div>
    @endif
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Dosen</th>
      <th scope="col">NIDN</th>
      <th scope="col">NIP/NIK</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $row->id }}</th>
      <td>{{ $row->namadosen }}</td>
      <td>0{{ $row->nidn }}</td>
      <td>{{ $row->nip }}</td>
      <td>{{ $row->jabatan }}</td>
      <td>
      <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</button>
      <a href="/tampilkandata/{{ $row->id }}" class="btn btn-light">Edit</a>
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