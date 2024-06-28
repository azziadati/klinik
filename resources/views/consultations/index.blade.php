@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Consultations</div>

                <div class="card-body">
                    <ul class="list-group mb-4">
                        @foreach($consultations as $consultation)
                            <li class="list-group-item">
                                <strong>{{ $consultation->is_admin ? 'Admin' : 'You' }}:</strong>
                                {{ $consultation->message }}
                                <span class="text-muted float-right">{{ $consultation->created_at }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <form action="{{ route('consultations.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
