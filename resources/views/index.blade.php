@extends('layouts.front')


@section('content')
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('images/banner_0.jpg') }}" style="height: 390px;" alt="...">
            </div>
            <div class="item">
                <a href="">
                    <img src="{{ asset('images/banner_1.jpg') }}" style="height: 390px;" alt="...">
                </a>
            </div>
        </div>
    </div>

    <section class="panel" id="section_0">
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <p class="text-center"><i class="fa fa-fw fa-desktop fa-3x"></i></p>
                            <div class="caption">
                                <h3 class="text-center">企业网站 / H5网站</h3>
                                <p>Ethereum is a decentralized platform that runs smart contracts: applications that run exactly as programmed without any possibility of downtime, censorship, fraud or third-party interference.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <p class="text-center"><i class="fa fa-fw fa-wechat fa-3x"></i></p>
                            <div class="caption">
                                <h3 class="text-center">公众号 / 小程序</h3>
                                <p>Ethereum is a decentralized platform that runs smart contracts: applications that run exactly as programmed without any possibility of downtime, censorship, fraud or third-party interference.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <p class="text-center"><i class="fa fa-fw fa-bar-chart-o fa-3x"></i></p>
                            <div class="caption">
                                <h3 class="text-center">舆情分析系统</h3>
                                <p>Ethereum is a decentralized platform that runs smart contracts: applications that run exactly as programmed without any possibility of downtime, censorship, fraud or third-party interference.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <p class="text-center"><i class="fa fa-fw fa-wechat fa-3x"></i></p>
                            <div class="caption">
                                <h3 class="text-center">姻缘树下小程序</h3>
                                <p>Ethereum is a decentralized platform that runs smart contracts: applications that run exactly as programmed without any possibility of downtime, censorship, fraud or third-party interference.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <h1>Build unstoppable applications</h1>
                            <p>Ethereum is a decentralized platform that runs smart contracts: applications that run exactly as programmed without any possibility of downtime, censorship, fraud or third-party interference.</p>
                            <p>These apps run on a custom built blockchain, an enormously powerful shared global infrastructure that can move value around and represent the ownership of property.</p>
                            <p>This enables developers to create markets, store registries of debts or promises, move funds in accordance with instructions given long in the past (like a will or a futures contract) and many other things that have not been invented yet, all without a middleman or counterparty risk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <h1>Build unstoppable applications</h1>
                            <p>Ethereum is a decentralized platform that runs smart contracts: applications that run exactly as programmed without any possibility of downtime, censorship, fraud or third-party interference.</p>
                            <p>These apps run on a custom built blockchain, an enormously powerful shared global infrastructure that can move value around and represent the ownership of property.</p>
                            <p>This enables developers to create markets, store registries of debts or promises, move funds in accordance with instructions given long in the past (like a will or a futures contract) and many other things that have not been invented yet, all without a middleman or counterparty risk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <h1>Build unstoppable applications</h1>
                            <p>Ethereum is a decentralized platform that runs smart contracts: applications that run exactly as programmed without any possibility of downtime, censorship, fraud or third-party interference.</p>
                            <p>These apps run on a custom built blockchain, an enormously powerful shared global infrastructure that can move value around and represent the ownership of property.</p>
                            <p>This enables developers to create markets, store registries of debts or promises, move funds in accordance with instructions given long in the past (like a will or a futures contract) and many other things that have not been invented yet, all without a middleman or counterparty risk.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="panel">
        <div class="panel-body">
            <div class="container">
                <div class="text-center">
                    <h1>战略合作</h1>
                    <hr>
                </div>
                <div class="text-center">
                    <h2>中国</h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        华东交通大学继续教育学院
                    </div>
                    <div class="col-md-3">
                        华东交通大学信息工程学院
                    </div>
                </div>
                <div class="text-center">
                    <h2>英国</h2>
                </div>
                <div class="text-center">
                    <h2>日本</h2>
                </div>
            </div>

        </div>
    </section>
@endsection