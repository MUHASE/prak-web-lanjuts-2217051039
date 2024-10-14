@extends('layouts.app2')
@section('content')
<div class="card">
    <div class="profile-pp">
        <img src="/asset/images/profile.jpeg" alt="Profile Image" class="profile-img">
    </div>
    <div class="info">
        <div class="label">{{ $nama }}</div>
        <div class="label">{{ $npm }}</div>
        <div class="label">{{ $nama_kelas }}</div>
    </div>
</div>

@endsection
