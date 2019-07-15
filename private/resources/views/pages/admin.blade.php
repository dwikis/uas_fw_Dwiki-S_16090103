@extends('tema')

@section('main')
<div class="container-fluid">
<br>
  <div class="row">
    <div class="col-sm-2">
      <div class="card">
        <div class="card-header">
          DATA
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Data Mobil</li>
          <li class="list-group-item">Laporan Data Pelanggan</li>
        </ul>
      </div>
    </div>
    <div class="col-sm-10">
      <div class="card">
        <div class="card-header">
          Data Mobil
        </div>
        <div class="container-fluid">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
        @endif
        <form class="" action="{{ url('store') }}" method="post">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="">Nama Mobil</label>
            <input type="text" class="form-control" name="nama_mobil">
          </div>
          <div class="form-group">
            <label for="">Fasilitas</label>
            <input type="text" class="form-control" name="fasilitas">
          </div>
          <div class="form-group">
            <label for="">Harga Sewa</label>
            <input type="text" class="form-control" name="harga">
          </div>
  <div class="form-group">
    <label for="">Gambar</label>
    <input type="file" class="form-control-file" name="gambar">
  </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <br>
          <br>
        </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Mobil</th>
        <th scope="col">Fasilitas</th>
        <th scope="col">Harga Sewa</th>
        <th scope="col">Gambar</th>
        <th scope="col">Pilihan</th>
      </tr>
    </thead>
    <tbody>
    @foreach($mobil as $mobil)

      <tr>
        <th scope="row">{{$mobil->id}}</th>
        <td>{{$mobil->nama_mobil}}</td>
        <td>{{$mobil->fasilitas}}</td>
        <td>{{$mobil->harga}}</td>
        <td>{{$mobil->gambar}}</td>
        <td><a class="btn btn-sm btn-warning" href="{{route('edit.mobil',$mobil)}}">Edit</a>|<a href="{{route('mobil.delete',$mobil)}}" class="btn btn-sm btn-danger">Hapus</a></td>
      </tr>
      @endforeach
      </div>
    </div>
  </div>
</div>
    </tbody>
  </table>
</div>

@stop

@section('footer')
<div id="footer">
	<p>&copy;2019<b> Dwiki S_16090103</b>.</p>
</div>
@stop