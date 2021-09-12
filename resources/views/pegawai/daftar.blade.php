@extends('pegawai.master')
@section('judul', 'Daftar Pegawai')
	@section('konten') 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
	{{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required" value = "{{old('nama')}}"> <br/>
		Alamat <textarea name="alamat" required="required">{{old('alamat')}}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endsection