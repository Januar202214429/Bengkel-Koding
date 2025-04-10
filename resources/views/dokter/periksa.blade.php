@extends('layout.app')

@section('content-header')
        <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Periksa</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active"
                  aria-current="page">Periksa</li>
                </ol>
              </div>
            </div>
@endsection

@section('content')
<div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Striped Full Width Table</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">No</th>
                          <th>Id Periksa</th>
                          <th>Pasien</th>
                          <th>Tanggal Periksa</th>
                          <th>Catatan</th>
                          <th>Biaya Periksa</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>1.</td>
                          <td>1</td>
                          <td>Isna</td>
                          <td>01/01/2025</td>
                          <td>Sakit</td>
                          <td>Biaya Periksa</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
@endsection
