@extends('layout')

@section('tieudetrang')
    Kết quả tìm kiếm
@endsection

@section('noidung')
    <h2>Kết quả tìm kiếm cho: {{ $query }}</h2>
    @if (count($results) > 0)
        <ul>
            @foreach ($results as $result)
                <li>
                    <a href="{{ route('chitiet', ['id' => $result->id]) }}">{{ $result->tieu_de }}</a>
                    <p>{{ $result->noi_dung_ngan }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>Không tìm thấy kết quả nào.</p>
    @endif
@endsection
