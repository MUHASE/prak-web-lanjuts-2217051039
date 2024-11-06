@extends('layouts.app2')
@section('content')
<div class="card">
    <div class="profile-pp">
        <img src="{{ asset('storage/'. $user->foto) }}" alt="Profile Image" class="profile-img">
    </div>
    <div class="info">
        <h1 class="label">{{ $user->nama }} </h1>
        <h1 class="label">{{ $user->npm }}  </h1>
        <h1 class="label">{{ $nama_kelas  ?? 'Kelas tidak ditemukan' }}</h1>
        <a href="{{ route('user.list') }}" class="btn-kembali">Kembali ke List</a>
    </div>
</div>
@endsection
