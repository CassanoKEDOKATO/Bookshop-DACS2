@extends('layouts.main')

@section('title')
    Contact
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('assets/css/subPage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/head.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/preload.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/roll.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ReposiveTablet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reposive.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-free-6.1.1-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Icon/themify-icons/themify-icons.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,400;1,500&family=Source+Sans+Pro:wght@200&display=swap"
        rel="stylesheet">
    <script src="{{ asset('assets/js/home1.css') }}"></script>
@endsection

@section('navigation')
    <div class="navigation" id="nav">

        <div class="logo">
            <a href="{{ route('home.') }}"><img src="{{ asset('assets/images/logoes/logo3.png') }}" alt=""></a>
        </div>
        <form action="{{ URL::to('/tim-kiem') }}" method="POST" autocomplete="off">
            @csrf
        <div class="search">
            <input type="text" placeholder="" name="keyword" id="keywords" value="{{ old('keyword') }}">
            <button><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
        <button id="menu-an"><i class="ti-menu"></i></button>
        <div class=" menu-bar" style="display: flex ">

            <a id="test" href="{{ route('home.') }}" class="color-line">Trang ch???</a>
            <a href="{{ route('shop.') }}" class="gen-a">Shop</a>
            <a href="{{ route('blog.') }}" class="gen-a">Blog</a>
            <a href="#" class="gen-a" style="color: red; ">Li??n h??? </a>
            <a href="{{ route('event.') }}" class="gen-a">S??? ki???n</a>
            <a id="cart" href="{{ route('cart.') }}"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <div class="qty-2">{{Cart::count()}}</div>
        </div>

        <div class="menu-bartemp" id="hide">
            <a id="test" href="{{ route('home.') }}" class="color-line">Trang ch???</a>
            <a href="{{ route('shop.') }}" class="gen-a">Shop</a>
            <a href="{{ route('blog.') }}" class="gen-a">Blog</a>
            <a href="#" class="gen-a" style="color: red; ">Li??n h??? </a>
            <a href="{{ route('event.') }}" class="gen-a">S??? ki???n</a>
            <a id="cart" href="{{ route('cart.') }}"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
        </div>

    </div>
@endsection

@section('indexing')
    <div class="content-menu" style="width : 100%;">
        <div class="title-menu">
            <h2>Li??n h???</h2>
            <p><a href="">Trang ch???</a>-><a href="">Li??n h???</a></p>
        </div>
    </div>
@endsection

@section('content')
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.738810240357!2d108.25323739999999!3d15.975010600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2s!4v1653383390115!5m2!1svi!2s"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>


    <div class="contact row">

        <div class="col-md-4 contactwithus">
            <h1>Li??n h???</h1>
            <span class="infor">
                <span class="address"><span style="color: rgb(0, 0, 0); font-size: 24px;">?????a ch??? : </span> 470 Tr???n ?????i
                    Ngh??a, H??a H???i, Ng?? H??nh S??n, ???? N???ng</span>
                <span class="telephone"><span style="color: rgb(0, 0, 0); font-size: 24px;">S??? ??i???n tho???i : </span> +84
                    705256624</span> <br>
                <span class="mail mail1"><a href="">hanhlv.21it@vku.udn.vn</a></span> <br>
                <span class="mail"><a href="">quanna.21it@vku.udn.vn</a></span> <br>

                <span class="social">
                    <a href=""><i class="ti-instagram"></i></a>
                    <a href=""><i class="ti-facebook"></i></a>
                    <a href=""><i class="ti-twitter"></i></a>
                </span>
            </span>

        </div>

        <div class="col-md-8 feedback">
            <form action="" method="POST">
                @csrf
                <div class="row towcol">
                    <div class="col-md-6">
                        <input type="text" name="name" id="name" placeholder="Nh???p t??n c???a b???n..."
                            value="{{ old('name') }}">
                        @error('name')
                            <p style="color:red; text-align: left; text-transform:none;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            placeholder="?????a ch??? Email">
                        @error('email')
                            <p style="color:red; text-align: left; text-transform:none;">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="row towcol">
                    <div class="col-md-6">
                        <input type="phone" name="phone" id="phone" value="{{ old('phone') }}"
                            placeholder="S??? ??i???n tho???i">
                        @error('phone')
                            <p style="color:red; text-align: left; text-transform:none;">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="col-md-6">
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                            placeholder="Ti??u ?????">
                        @error('subject')
                            <p style="color:red; text-align: left; text-transform:none;">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row textarea">
                    <textarea name="message" cols="30" rows="10"
                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required fill_inited" aria-required="true"
                        aria-invalid="false" placeholder="N???i dung">
                    {{ old('message') }}
                </textarea>
                    @error('message')
                        <p style="color:red; text-align: left; text-transform:none;">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="G???i ph???n h???i" id="button">
            </form>
        </div>
    </div>
    @php
        $msg = request()
            ->session()
            ->get('thank');
    @endphp

    @if ($msg)
        <script>
            alert('C???m ??n b???n ???? ????ng g??p ?? ki???n');
        </script>
    @endif
    @php
        request()
            ->session()
            ->put('thank', null);
    @endphp
@endsection
