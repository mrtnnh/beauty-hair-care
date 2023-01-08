@extends('layouts.layouts')
@section('content')
<div>
    <h1 class="successMessage">{{ $successMessage }}</h1>

    <div class="btn">
      <button type="submit" class="btn-primary" style="margin-bottom: 20%">
        <a href="{{ route('home') }}">TOP</a>
      </button>
    </div>
</div>
@endsection
