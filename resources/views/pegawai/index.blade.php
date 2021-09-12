@extends('pegawai.master')
@section('judul', 'Data Pegawai')
			@section('konten')
				<p>Cari Data Pegawai :</p>
				<form action="/pegawai/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input type="submit" value="CARI" class="btn btn-primary">
				</form>
				<a href="/pegawai/daftar"> + Daftar Pegawai Baru</a>
				<br>
				<?php 
					if(isset($_GET['cari'])){
						?>

						<a href="/pegawai">Kembali</a>
						<?php
					}
				?>
				
				<br/>
				<br/>
			
				<table border="1">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					<?php $no = 1; ?>
					@foreach($pegawai as $p)
					<tr>
						<td>{{$no}} </td>
						<td>{{ $p->pegawai_nama }}</td>
						<td>{{ $p->pegawai_alamat }}</td>
						<td>
							<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
							|
							<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
						</td>
					</tr>
					<?php $no++; ?>
					@endforeach
					
				</table>
				<br/>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
			
			
				{{ $pegawai->links() }}
			@endsection