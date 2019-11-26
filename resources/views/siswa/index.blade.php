@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Siswa</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                            </div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
										</thead>
										<tbody>
                                            @foreach($data_siswa as $siswa)
                                            <tr>
                                                <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama}}</a></td>
                                                <td>{{$siswa->jenis_kelamin}}</td>
                                                <td>{{$siswa->agama}}</td>
                                                <td>{{$siswa->alamat}}</td>
                                                <td>
                                                    <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-info btn-sm">edit</a>
                                                    <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
						</div>
                    </div>
                </div>
            </div>
        </div>      
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="siswa/create" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input name="nama" type="text" class="form-control" id="inputNama" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="selectJK">Pilih Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="selectJK">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputAgama">Agama</label>
                    <input name="agama" type="text" class="form-control" id="inputAgama" placeholder="Agama">
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <textarea name="alamat" class="form-control" id="inputAlamat" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            </div>
        </div>
    </div>
@endsection