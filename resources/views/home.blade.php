@extends('layout')

@section('tieudetrang')
    Trang Chủ
@endsection

@section('noidung')
    <div class="jumbotron jumbotron-fluid text-back">
        <div class="container">
            <h1 class="">Chào mừng đến với Trang Tin Tức</h1>
            <p class="lead">Cập nhật tin tức mới nhất và hữu ích.</p>
            <hr class="my-4">
            <p>Khám phá các bài viết của chúng tôi ngay bây giờ.</p>
            {{-- <a class="btn btn-light btn-lg" href="{{ route('home') }}" role="button">Xem Thêm</a> --}}
        </div>
    </div>

    <h2 class="my-4">Tin tức mới nhất</h2>
    <div class="row">
        @php
            // Lấy tất cả các tệp trong thư mục public/img
            $images = \File::allFiles(public_path('img'));
            // Sắp xếp các tệp ảnh theo tên
            usort($images, function ($a, $b) {
                return strcmp($a->getFilename(), $b->getFilename());
            });
        @endphp

        @foreach ($latestNews as $index => $tin)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @php
                        // Lấy chỉ số của ảnh theo thứ tự, sử dụng chỉ số $index
                        $imageIndex = $index % count($images);
                        $selectedImage = $images[$imageIndex]->getRelativePathname();
                    @endphp

                    @if ($tin->hinh_anh && file_exists(public_path('img/' . $tin->hinh_anh)))
                        <img src="{{ asset('img/' . $tin->hinh_anh) }}" class="card-img-top" alt="{{ $tin->tieu_de }}">
                    @else
                        <img src="{{ asset('img/' . $selectedImage) }}" class="card-img-top" alt="{{ $tin->tieu_de }}">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $tin->tieu_de }}</h5>
                        <p class="card-text">{{ Str::limit($tin->noi_dung_ngan, 100) }}</p>
                        <p class="card-text"><small class="text-muted">Tác giả: {{ $tin->tac_gia }} |
                                {{ $tin->ngay_dang }}</small></p>
                        <a href="{{ route('chitiet', $tin->id) }}" class="btn btn-primary">Đọc Thêm</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
