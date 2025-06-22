@extends('frontend.layout')
@section('title')
    Home
@endsection
@section('content')

    <main class="home">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            NEW PRODUCTS
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($newProducts as $item)
                        @if ($item->reqular_price==$item->sale_price)
                            <div class="col-3">
                            <figure>
                                <div class="thumbnail">

                                    <a href="{{route('product',$item->id)}}">
                                        <img src="{{ $item->image }}" alt="" >
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        <div class="price d-none">US 10</div>
                                        {{-- <div class="regular-price "><strike> US {{ $item->reqular_price }}</strike></div> --}}
                                        <div class="sale-price ">US {{ $item->sale_price }}</div>
                                    </div>
                                    <h5 class="title">{{ $item->product_name }}</h5>
                                </div>
                            </figure>
                        </div>
                        @else
                            <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    <div class="status">
                                        Promotion
                                    </div>
                                    <a href="{{route('product',$item->id)}}">
                                        <img src="{{ $item->image }}" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        <div class="price d-none">US 10</div>
                                        <div class="regular-price "><strike> US {{ $item->reqular_price }}</strike></div>
                                        <div class="sale-price ">US {{ $item->sale_price }}</div>
                                    </div>
                                    <h5 class="title">{{ $item->product_name }}</h5>
                                </div>
                            </figure>
                        </div>
                        @endif

                    @endforeach
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    {{ $newProducts->links() }}
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            PROMOTION PRODUCTS
                        </h3>
                    </div>
                </div>
                <div class="row">
                   @foreach ($promoProducts as $item)
                     <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    <div class="status">
                                        Promotion
                                    </div>
                                    <a href="{{route('product',$item->id)}}">
                                        <img src="{{ $item->image }}" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        <div class="price d-none">US 10</div>
                                        <div class="regular-price "><strike> US {{ $item->reqular_price }}</strike></div>
                                        <div class="sale-price ">US {{ $item->sale_price }}</div>
                                    </div>
                                    <h5 class="title">{{ $item->product_name }}</h5>
                                </div>
                            </figure>
                        </div>
                   @endforeach
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    {{ $promoProducts->links() }}
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">
                            POPULAR PRODUCTS
                        </h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($popProducts as $item)
                        @if ($item->reqular_price==$item->sale_price)
                            <div class="col-3">
                            <figure>
                                <div class="thumbnail">

                                    <a href="{{route('product',$item->id)}}">
                                        <img src="{{ $item->image }}" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        <div class="price d-none">US 10</div>
                                        {{-- <div class="regular-price "><strike> US {{ $item->reqular_price }}</strike></div> --}}
                                        <div class="sale-price ">US {{ $item->sale_price }}</div>
                                    </div>
                                    <h5 class="title">{{ $item->product_name }}</h5>
                                </div>
                            </figure>
                        </div>
                        @else
                            <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    <div class="status">
                                        Promotion
                                    </div>
                                    <a href="{{route('product',$item->id)}}">
                                        <img src="{{ $item->image }}" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        <div class="price d-none">US 10</div>
                                        <div class="regular-price "><strike> US {{ $item->reqular_price }}</strike></div>
                                        <div class="sale-price ">US {{ $item->sale_price }}</div>
                                    </div>
                                    <h5 class="title">{{ $item->product_name }}</h5>
                                </div>
                            </figure>
                        </div>
                        @endif

                    @endforeach
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    {{ $popProducts->links() }}
                </div>
            </div>
        </section>

    </main>
@endsection
