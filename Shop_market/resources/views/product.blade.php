

<html>

<head>
    <title>master</title>
    {{--see others folder--}}
    @include('others.css_stylesheet')
    <link rel="stylesheet" href="css/master.css">
</head>

<body>

@include('others.navbar')

@yield('content1')



<div class="container">
    <div class="row">

        <div class="col-md-3">
            @include('others.sidebar')
        </div>

    <div class="col-md-9">

        <div class="row">

            @foreach($products as $product)

                <div class="col-md-3">

                    <div class="card">

                        {{--<img class="card-img-top" src="{{ asset('images/products/'. '2.png') }}" alt="Card image cap">--}}

                        @foreach($product->images as $image)

                        <img class="card-img-top" src="{{ asset('images/products/'. $image->image) }}" alt="Card image cap">

                        @endforeach

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ $product->price }}$</p>
                        </div>
                    </div>      {{--end of card--}}

                </div>

            @endforeach


        </div>      {{--end of row 2--}}

    </div>

    </div>      {{--end of row 1--}}
</div>


@include('others.js_files')

</body>

</html>

