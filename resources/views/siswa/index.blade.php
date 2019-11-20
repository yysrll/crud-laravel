@extends('layouts.master')

@section('content')

        @if(session('sukses'))
            <div class="alert alert-success mt-2" role="alert">
            {{session('sukses')}}
            </div>
        @endif

        <div class="row">
            <div class="col-6">
                <h1>Data Siswa</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right mt-2" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Siswa
                </button>
            </div>
            
                <table class="table table-hover">
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>

                    @foreach($data_siswa as $siswa)
                    <tr>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                        <td>{{$siswa->agama}}</td>
                        <td>{{$siswa->alamat}}</td>
                        <td>
                            <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-info btn-sm">edit</a>
                            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
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