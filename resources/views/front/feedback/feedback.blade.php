@extends('front.layout.layout-front')
@section('title')
    Đánh giá khách sạn
@endsection
@section('before_styles')
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dangphongchu.css') }}">
    <!-- endbuild -->
@endsection

@section('header')
    @include('front.layout.header-host')
@endsection

@section('content')
    <!-- Content -->
    <section class="host--content">
        <h2 class="title">Đánh giá phòng {{ $room->name }} </h2>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="mota">
                <p class="font-weight-bold">Đánh giá khách sạn</p>
                <form method="post" action="{{ route('store.feedback', $room->id) }}" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-form-label" for="loaicanho">Đánh giá<span class="important">*</span></label>

                        <div class="input">
                            <input type ="textarea" name="feedback" class="form-control form-control-lg" required></input>
                        </div>
                        @if ($errors->has('name'))
                            <span class="error">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                        <h3>Đánh giá</h3>
                        <div class="show">
                            <div class="rating">
                                <div class="item">
                                    <div class="item__start item__flex">
                                        <input type="radio" name="rate" value="1">
                                        <label for="rate-1">1 sao</label>
                                    </div>

                                    <div class="item__end item__flex">
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>

                                </div>

                                <div class="item">
                                    <div class="item__flex">
                                        <input type="radio" name="rate" value="2">
                                        <label for="rate-2">2 sao</label>
                                    </div>
                                    
                                    <div class="item__flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>  


                                <div class="item">
                                    <div class="item__flex">
                                        <input type="radio" name="rate" value="3">
                                        <label for="rate-3">3 sao</label>
                                    </div>

                                    <div class="item__flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>  


                                <div class="item">
                                    <div class="item__flex">
                                        <input type="radio" name="rate" value="4">
                                        <label for="rate-4">4 sao</label>
                                    </div>
                                    
                                    <div class="item__flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item__flex">
                                        <input type="radio" name="rate" value="5">
                                        <label for="rate-5">5 sao</label>
                                    </div>

                                    <div class="item__flex">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                        </div>
                        <div class="btn-control" style="justify-content: center">
                            <button class="btn submit">Đánh giá</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection


@section('after_scripts')
    <script src="{{ asset('assets/js/dangphongchu.js') }}"></script>
@endsection
