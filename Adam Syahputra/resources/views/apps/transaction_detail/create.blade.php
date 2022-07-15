@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Detail Transaksi</h5></div>
            <p class="card-text">
            <form action="{{ route('transaction_detail') }}" method="POST">
                @csrf @method('POST')
                <div class="form-group mt-2 mt-2">
                    <label for="">Transaksi</label>
                    <select name="transaction_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($transaction as $item)
                            <option value="{{ $item->id }}">{{ $item->customer->name }}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="form-group mt-2 mt-2">
                    <label for="">Menu</label>
                    <select name="menu_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($menu as $item)
                            <option value="{{ $item->id }}">{{ $item->name }} | {{ $item->price }} </option>
                        @endforeach
                    </select>
                </div> 
                <div class="form-group mt-2 mt-2">
                    <label for="">Jumlah</label>
                    <input type="number" name="total" class="form-control" value="">
                </div> 
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-sm btn-success" name="simpan">Simpan</button>
                </div>
            </form>
            </p>
        </div>
        
    </div>
</div>
@endsection