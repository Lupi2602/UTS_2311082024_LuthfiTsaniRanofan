@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Produk Dihapus</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($products->count())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Tanggal Masuk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->nama_produk }}</td>
                <td>{{ $product->kategori }}</td>
                <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                <td>{{ $product->stok }}</td>
                <td>{{ $product->tanggal_masuk }}</td>
                <td>
                    <form action="{{ route('products.restore', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button class="btn btn-sm btn-success" onclick="return confirm('Pulihkan produk ini?')">Pulihkan</button>
                    </form>
                </td>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        {{ $products->links() }}
    </div>

    @else
        <p>Tidak ada produk yang dihapus.</p>
    @endif
</div>
@endsection
