@extends('tema')

@section('main')
<br>
<div class="container">
  <form class="" action="{{ route('mobil.update', $mobil) }}" method="post">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="">Nama Mobil</label>
              <input type="text" class="form-control" name="nama_mobil" value="{{$mobil->nama_mobil}}">
            </div>
            <div class="form-group">
              <label for="">Fasilitas</label>
              <input type="text" class="form-control" name="fasilitas" value="{{$mobil->fasilitas}}">
            </div>
            <div class="form-group">
              <label for="">Harga Sewa</label>
              <input type="text" class="form-control" name="harga" value="{{$mobil->harga}}">
            </div>
    <div class="form-group">
      <label for="">Gambar</label>
      <input type="file" class="form-control-file" name="gambar" value="{{$mobil->gambar}}">
    </div>
    <button type="submit" class="btn btn-warning">Simpan</button>
  </form>
</div>
@stop

@section('footer')
<div id="footer">
	<p>&copy;2019<b> Dwiki S_16090103</b>.</p>
</div>
@stop