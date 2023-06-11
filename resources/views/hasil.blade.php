@foreach ($results as $result)
    <!-- Tampilkan data hasil -->
    <p>{{ $result->penjual }}</p>
    <p>{{ $result->alamat }}</p>
    <p>{{ $result->jam_buka }}</p>
    <p>{{ $result->alamat }}</p>
@endforeach
