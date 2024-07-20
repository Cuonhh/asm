@extends('layout')

@section('tieudetrang')
    Chi Tiết Tin
@endsection

@section('noidung')
    <div class="card my-3">
        <div class="card-body">
            <h1 class="card-title">{{ $tin->tieu_de }}</h1>
            <p class="card-text">{{ $tin->noi_dung }}</p>
            <p class="card-text">{{ $tin->noi_dung_ngan }}</p>
            
            @php
                // Lấy tất cả các tệp trong thư mục public/img
                $images = \File::allFiles(public_path('img'));
                // Chọn một ảnh ngẫu nhiên
                $randomImage = $images[array_rand($images)]->getRelativePathname();
            @endphp

            <div class="text-center my-3">
                <img src="{{ asset('img/' . $randomImage) }}" class="img-fluid" alt="Ảnh liên quan">
            </div>

            <p class="card-text"><small class="text-muted">Tác giả: {{ $tin->tac_gia }} | {{ $tin->ngay_dang }}</small></p>
            <a href="{{ route('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Quay lại</a>
        </div>
    </div>
@endsection
