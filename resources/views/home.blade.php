@extends('layout/main')
@section('title', 'Bitanic - Home')
@section('main-content')
    <div class="tron d-flex">
        <div class="text-tron" style="height: 100%;
                                                                                                            width: 40%;">
            <div class="item" style="margin: 50px 20px">
                <h1 class="">Bitanic</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat corrupti ipsum, sequi eaque incidunt
                    doloremque aliquam omnis quas repudiandae at ipsam.</p>
            </div>
        </div>
        <div class="foto-tron" style="margin:0 auto">
            <img src="{{ asset('img/bitanic.jpg') }}" alt="Bitanic Image" height="100%">
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 deskripsi my-5">
                    <h4>Project Description</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sapiente similique fuga ex ipsa quaerat
                        ab
                        rerum, sequi laudantium, doloremque esse a veniam sit iusto eveniet quisquam ullam provident non.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore tempora et dolor voluptatem magnam
                        eum beatae
                        ratione cupiditate placeat sequi quos suscipit, eveniet eius consequuntur amet quas officiis, dolore
                        minus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio non impedit vel repellendus eveniet
                        dicta
                        voluptatum, reprehenderit soluta mollitia, maiores veritatis. Mollitia voluptatibus quidem veritatis
                        expedita autem dolore odit minima?
                    </p>
                </div>
                <div class="col-md-12 video">
                    <h4>Demontration Video</h4>
                    <div class="text-center">
                        <iframe width="80%" height="500px" src="https://www.youtube.com/embed/fTNh3tSKl40"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
