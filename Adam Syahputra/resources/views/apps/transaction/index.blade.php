@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px;min-height: 550px">
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title">
                    <h5>Data Transaksi</h5>
                </div>
                <a href="{{ route('transaction.create') }}">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>
                <p></p>
                <table class="table table-stripped">
                    <tr>
                        <th>Pelanggan</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($transaction as $item)
                    <tr>
                        <td>{{ $item->customer->name }}</td>
                        <td>Rp. {{ number_format($item->total) }}</td>
                        <td style="width: 25%">
                        <a href="{{ route('transaction.edit', $item->id) }}">
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </a>
                        <form action="{{ route('transaction') }}" method="POST" style="display: inline">
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