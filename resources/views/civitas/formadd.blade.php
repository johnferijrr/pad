@extends('layout.main')

@section('content')
    <h3>Form New Data Civitas</h3>
    <div class="card">
        <div class="card-header">
            <button type="buttton" class=" btn btn-sm btn-warning" onclick="window.location='{{ url('civitas') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('civitas') }}"
            @csrf
            <div class="row mb-3">
                <label for="txtnik" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm " id="txtnik" name="txtnik">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtnama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm " id="txtnama" name="txtnama">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtusername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm " id="txtusername" name="txtusername">
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtlevel" class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-4">
                    <select class="form-select form-select-sm" name="txtlevel" id="txtlevel"> 
                        <option value="" selected>-Pilih-</option>
                        <option value="M">User</option>
                        <option value="F">Admin</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtstatus" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-4">
                    <select class="form-select form-select-sm" name="txtstatus" id="txtstatus"> 
                        <option value="" selected>-Pilih-</option>
                        <option value="M">Aktif</option>
                        <option value="F">Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtstatus" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-sm btn-success""> 
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
