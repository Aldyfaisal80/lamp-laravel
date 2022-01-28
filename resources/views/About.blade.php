@extends('layouts.main')

@section("container")
<h1>Halaman About</h1>
<h3><?= $Nama; ?></h3>
<p><?= $Email; ?></p>
<img src="img/<?= $Image; ?>"alt="<?= $Nama; ?>"width="800" class="img-thumbnail rounded-circle">

@endsection



