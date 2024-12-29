@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- Stock Report -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan Stok</h4>
                </div>
                <div class="card-body">
                    <!-- Stock Report Filter -->
                    <div class="form-group">
                        <label for="start-date-stock">Tanggal Awal</label>
                        <input type="date" id="start-date-stock" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="end-date-stock">Tanggal Akhir</label>
                        <input type="date" id="end-date-stock" class="form-control">
                    </div>
                    <button class="btn btn-primary mt-3">Generate Laporan</button>
                </div>
            </div>
        </div>

        <!-- Incoming Goods Report -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan Barang Masuk</h4>
                </div>
                <div class="card-body">
                    <!-- Incoming Goods Report Filter -->
                    <div class="form-group">
                        <label for="start-date-incoming">Tanggal Awal</label>
                        <input type="date" id="start-date-incoming" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="end-date-incoming">Tanggal Akhir</label>
                        <input type="date" id="end-date-incoming" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="supplier">Supplier</label>
                        <select id="supplier" class="form-control">
                            <option value="">Pilih Supplier</option>
                            <!-- Add dynamic supplier options here -->
                            <option value="supplier1">Supplier 1</option>
                            <option value="supplier2">Supplier 2</option>
                        </select>
                    </div>
                    <button class="btn btn-primary mt-3">Generate Laporan</button>
                </div>
            </div>
        </div>

        <!-- Outgoing Goods Report -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan Barang Keluar</h4>
                </div>
                <div class="card-body">
                    <!-- Outgoing Goods Report Filter -->
                    <div class="form-group">
                        <label for="start-date-outgoing">Tanggal Awal</label>
                        <input type="date" id="start-date-outgoing" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="end-date-outgoing">Tanggal Akhir</label>
                        <input type="date" id="end-date-outgoing" class="form-control">
                    </div>
                    <button class="btn btn-primary mt-3">Generate Laporan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
