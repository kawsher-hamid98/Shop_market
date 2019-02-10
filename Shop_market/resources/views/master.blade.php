

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

                    <div class="col-md-3">

                        <div class="card">
                            <img class="card-img-top" src="{{ asset('images/products/'. '2.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Iphone 8</h5>
                                <h6 class="card-subtitle mb-2 text-muted">1000$</h6>
                                <p class="card-text">64gb</p>
                            </div>
                        </div>      {{--end of card--}}

                    </div>

                    <div class="col-md-3">

                        <div class="card">
                            <img class="card-img-top" src="{{ asset('images/products/'. 'iphonex-TA.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Iphone X</h5>
                                <h6 class="card-subtitle mb-2 text-muted">1300$</h6>
                                <p class="card-text">128gb</p>
                            </div>
                        </div>      {{--end of card--}}

                    </div>

                    <div class="col-md-3">

                        <div class="card">
                            <img class="card-img-top" src="{{ asset('images/products/'. 'iphonex-TA.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Iphone X</h5>
                                <h6 class="card-subtitle mb-2 text-muted">1300$</h6>
                                <p class="card-text">128gb</p>
                            </div>
                        </div>      {{--end of card--}}

                    </div>

                    <div class="col-md-3">

                        <div class="card">
                            <img class="card-img-top" src="{{ asset('images/products/'. '1.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Iphone X</h5>
                                <h6 class="card-subtitle mb-2 text-muted">1300$</h6>
                                <p class="card-text">128gb</p>
                            </div>
                        </div>      {{--end of card--}}

                    </div>



                </div>      {{--end of row 2--}}

            </div>

    </div>      {{--end of row 1--}}
</div>


@include('others.js_files')

</body>

</html>

