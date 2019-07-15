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
			  LAPORAN
			</div>
			<div class="container-fluid">
			<br>
			  <table class="table table-bordered table-hover">
				<thead>
        <button type="submit" class="btn btn-success">Print</button>
        <br>
        <br>
				  <tr>
					<th scope="col">No</th>
      <th scope="col">Mobil</th>
      <th scope="col">Tgl Sewa</th>
      <th scope="col">Tgl Kembali</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Alamat Pelanggan</th>
      <th scope="col">No Tlp</th>
      <th scope="col">Total Biaya Sewa</th>
				  </tr>
				</thead>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Honda Jazz</td>
      <td>01-05-2019</td>
      <td>03-05-2019</td>
      <td>Sodikin</td>
      <td>Pemalang</td>
      <td>087890108000</td>
      <td>Rp. 800.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Honda Jazz</td>
      <td>15-05-2019</td>
      <td>18-05-2019</td>
      <td>Arif</td>
      <td>Brebes</td>
      <td>083821453221</td>
      <td>Rp. 1.200.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Travel</td>
      <td>21-05-2019</td>
      <td>23-05-2019</td>
      <td>Tarno</td>
      <td>Tegal</td>
      <td>082139871152</td>
      <td>Rp. 1.400.000</td>
    </tr>
  </tbody>
</table>
</div>
			</div>
		</div>
      </div>
</div>
  </div>
  <br>

@stop

@section('footer')
<div id="footer">
	<p>&copy;2019<b> Dwiki S_16090103</b>.</p>
</div>
@stop