<div class="showcase-universal">
    <div class="scroll-buttons">
        <button class="btn btnNext flex-center">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </button>
        <button class="btn btnPrev flex-center">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </button>
    </div>
    <div class="indicators">
        <ol style="list-style-type: none" class="d-flex flex-row">
            <li class="li-indicator">
                <div class="row align-items-center">
                    <img class="col-4 rounded-circle img-fluid" src="{{ asset('img/front/100.jpg') }}" alt="">
                    <div class="col-8">
                        <div class="flex-column">
                            <h3 class="text-center">PRODUCT NAME</h3>
                            <h6 class="text-center font-weight-bolder">KES 5,000</h6>
                        </div>
                    </div>
                </div>
            </li>
            <li class="li-indicator">
                <div class="row align-items-center">
                    <img class="col-4 rounded-circle img-fluid" src="{{ asset('img/front/1001.jpg') }}" alt="">
                    <div class="col-8">
                        <div class="flex-column">
                            <h3 class="text-center">PRODUCT NAME</h3>
                            <h6 class="text-center font-weight-bolder">KES 5,000</h6>
                        </div>
                    </div>
                </div>
            </li>
            <li class="li-indicator">
                <a href="#" class="btn">
                    <div class="row align-items-center">
                        <img class="col-4 rounded-circle img-fluid" src="{{ asset('img/front/1002.jpg') }}" alt="">
                        <div class="col-8">
                            <div class="flex-column">
                                <h3 class="text-center">PRODUCT NAME</h3>
                                <h6 class="text-center font-weight-bolder">KES 5,000</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ol>
    </div>

    <div class="showcase-outer one active">
        <div class="showcase">
            <div class="nav">
                @include('front.home.nav')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="content d-flex flex-column">
                                <h1 class='non-diplay text-white'>SNEAKERS</h1>
                                <h3 class="display display-4 text-white">Kicks for Cliques</h3>
                                <P class="text-white    ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus porro eveniet
                                    cupiditate suscipit commodi ipsam, rem illum necessitatibus atque, qui perferendis
                                    laboriosam eum nesciunt reprehenderit? Id nostrum iusto eligendi quidem.
                                </P>
                                <a href="products/" class="btn btn-lg">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="showcase-outer two">
        <div class="showcase">
            <div class="nav">
                @include('front.home.nav')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="content d-flex flex-column">
                                <h1 class='non-diplay text-white'>KITCHEN WARE</h1>
                                <h3 class="display display-4 text-white">Style up your Kitchen</h3>
                                <p class="text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus porro eveniet
                                    cupiditate suscipit commodi ipsam, rem illum necessitatibus atque, qui perferendis
                                    laboriosam eum nesciunt reprehenderit? Id nostrum iusto eligendi quidem.
                                </p>
                                <button class="btn btn-lg">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
