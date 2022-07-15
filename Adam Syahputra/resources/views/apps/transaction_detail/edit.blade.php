@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Transaksi</h5></div>
            <p class="card-text">
            <form action="{{ route('transaction_detail') }}" method="POST">
                @csrf @method('PUT')
                <input type="hidden" name="id" value="{{ $transaction_detail->id }}">
                <div class="form-group mt-2 mt-2">
                    <label for="">Transaksi</label>
                    <select name="transaksi_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($transaction as $item)
                            <option value="{{ $item->id }}"
                            @if ($item->id == $transaction_detail->transaction_id)
                                selected
                            @endif>{{ $item->customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Menu</label>
                    <select name="menu_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($menu as $item)
                            <option value="{{ $item->id }}"
                                @if ($item->id == $transaction_detail->menu_id)
                                    selected
                                @endif>{{ $item->name }} | {{ $item->price }} </option>
                        @endforeach
                    </select>
                </div> 
                <div class="form-group mt-2 mt-2">
                    <label for="">Jumlah</label>
                    <input type="number" name="total" class="form-control" value="{{ $transaction_detail->total }}">
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