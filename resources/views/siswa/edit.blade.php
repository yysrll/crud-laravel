@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inputs</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputNama">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="inputNama" value="{{$siswa->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="selectJK">Pilih Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="selectJK">
                                    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                                    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputAgama">Agama</label>
                                    <input name="agama" type="text" class="form-control" id="inputAgama" value="{{$siswa->agama}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputAlamat">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="inputAlamat" rows="3">{{$siswa->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputAlamat">Avatar</label>
                                    <input type="file" name="avatar" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-info">Update</button>
                            </form>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>



@stop
@section('content1')
    <h1>Edit Data Siswa</h1>
        <div class="row">
            <div class="col-lg-12">
                <form action="/siswa/{{$siswa->id}}/update" method="POST">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="inputNama" value="{{$siswa->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="selectJK">Pilih Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="selectJK">
                        <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                        <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAgama">Agama</label>
                        <input name="agama" type="text" class="form-control" id="inputAgama" value="{{$siswa->agama}}">
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="inputAlamat" rows="3">{{$siswa->alamat}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>

@endsection
