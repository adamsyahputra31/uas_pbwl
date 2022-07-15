@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px;min-height: 550px">
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title">
                    <h5>Data Detail Transaksi</h5>
                </div>
                <a href="{{ route('transaction_detail.create') }}">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>
                <p></p>
                <table class="table table-stripped">
                    <tr>
                        <th>Pelanggan</th>
                        <th>Menu</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($transaction_detail as $item)
                    <tr>
                        <td>{{ $item->transaction->customer->name }}</td>
                        <td>{{ $item->menu->name }}</td>
                        <td>{{ $item->total }}</td>
                        <td style="width: 25%">
                        <a href="{{ route('transaction_detail.edit', $item->id) }}">
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </a>
                        <form action="{{ route('transaction_detail') }}" method="POST" style="display: inline">
                            @csrf @method('DELETE')
                            <input type="text" name="id" value="{{ $item->id }}" style="display:none">
                            <button class="btn btn-sm btn-danger" name="hapus">Hapus</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </p>
        </div>
    </div>
</div>
@endsection