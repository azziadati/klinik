@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Reservasi</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reservasi.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="id_catatan_medik">Nomor Rekam Medik</label>
                            <input id="id_catatan_medik" type="text" class="form-control @error('id_catatan_medik') is-invalid @enderror" name="id_catatan_medik" value="{{ old('id_catatan_medik') }}" required autofocus>

                            @error('id_catatan_medik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="booking_tanggal">Tanggal Booking</label>
                            <input id="booking_tanggal" type="date" class="form-control @error('booking_tanggal') is-invalid @enderror" name="booking_tanggal" value="{{ old('booking_tanggal') }}" required>

                            @error('booking_tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Submit Reservasi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('.alert').alert();
            });
        </script>
    @endif
@endsection

