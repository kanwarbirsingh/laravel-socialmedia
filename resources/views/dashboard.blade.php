@extends('layouts.master')

@section('content')
@include('includes.message-block')
    <section class="row new-post">
        <div class="col-md-6 offset-md-3">
            <header><h3>What do you have to say?</h3></header>
        <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 offset-md-3">
            <header><h3>What other people say...</h3></header>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur accusamus quo adipisci, dicta quam voluptates ipsam, totam aliquid rem facere velit reiciendis! Nostrum doloribus incidunt quas nisi autem corrupti odio!</p>
                <div class="info">
                    Posted By Kanwar on 26 Aug 2019
                </div>
                <div class="interaction">
                    <a href="#">Like</a>
                    <a href="#">Dislike</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </div>
            </article>
            <article class="post">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur accusamus quo adipisci, dicta quam voluptates ipsam, totam aliquid rem facere velit reiciendis! Nostrum doloribus incidunt quas nisi autem corrupti odio!</p>
                    <div class="info">
                        Posted By Kanwar on 26 Aug 2019
                    </div>
                    <div class="interaction">
                        <a href="#">Like</a>
                        <a href="#">Dislike</a>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </div>
                </article>
        </div>
    </section>
@endsection