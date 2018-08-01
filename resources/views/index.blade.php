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
                <img src="http://pic.90sjimg.com/back_pic/qk/back_origin_pic/00/02/07/2dedc747d6ad3a06885b129630ef6850.jpg" style="height: 390px;" alt="...">
                <div class="carousel-caption">
                    <h1>兰亭微客</h1>
                    <p>自主研发的微信服务系统</p>
                    <p style="margin-top: 20px;">
                        <a href="" class="btn btn-info">了解详情</a>
                    </p>
                </div>
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
                    <div class="col-md-6">
                        <h1>Build unstoppable applications</h1>
                        <p>Ethereum is a decentralized platform that runs smart contracts: applications that run exactly as programmed without any possibility of downtime, censorship, fraud or third-party interference.</p>
                        <p>These apps run on a custom built blockchain, an enormously powerful shared global infrastructure that can move value around and represent the ownership of property.</p>
                        <p>This enables developers to create markets, store registries of debts or promises, move funds in accordance with instructions given long in the past (like a will or a futures contract) and many other things that have not been invented yet, all without a middleman or counterparty risk.</p>
                        <p>The project was bootstrapped via an ether presale in August 2014 by fans all around the world. It is developed by the Ethereum Foundation, a Swiss non-profit, with contributions from great minds across the globe.</p>
                        <p>On traditional server architectures, every application has to set up its own servers that run their own code in isolated silos, making sharing of data hard. If a single app is compromised or goes offline, many users and other apps are affected.</p>
                        <p>On a blockchain, anyone can set up a node that replicates the necessary data for all nodes to reach an agreement and be compensated by users and app developers. This allows user data to remain private and apps to be decentralized like the Internet was supposed to work.</p>
                    </div>
                    <div class="col-md-6 text-center">

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