@extends('layout')

@section('tieudetrang')
    Tin trong loại
@endsection

@section('noidung')
    <h2>Danh sách tin</h2>
    <ul>
        @foreach ($listtin as $tin)
            <li><a href="{{ route('chitiet', $tin->id) }}">{{ $tin->tieu_de }}</a></li>
        @endforeach
    </ul>
@endsection
