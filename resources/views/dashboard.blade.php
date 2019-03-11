@extends('layout.master')
@section('content')
<section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
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
            <div class="col-md-6 col-md-offset-3">
                    <header><h3>What other people say...</h3></header>
                    <article class="post">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis reiciendis libero incidunt beatae vitae consectetur magnam quisquam odio culpa, animi ullam rem velit nemo tempora repellendus laborum aliquam ipsum placeat.</p>
                        <div class="info">
                                posted by hesham on 11 march 2019
                        </div>
                        <div class="interaction">
                                <a href="#">like</a>
                                <a href="#">Dislike</a>
                                <a href="#">Edite</a>
                                <a href="#">Delete</a>
                        </div>
                    </article>
                    <article class="post">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis reiciendis libero incidunt beatae vitae consectetur magnam quisquam odio culpa, animi ullam rem velit nemo tempora repellendus laborum aliquam ipsum placeat.</p>
                            <div class="info">
                                    posted by hesham on 11 march 2019
                            </div>
                            <div class="interaction">
                                    <a href="#">like</a>
                                    <a href="#">Dislike</a>
                                    <a href="#">Edite</a>
                                    <a href="#">Delete</a>
                            </div>
                        </article>
    </section>
@endsection
