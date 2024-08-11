@extends('layouts.app')

@section('content')
    <div class="container min-vh-100">
        @include('hero')
        <hr>
        <a href="/"></a>
        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-3">
                        <h4 class="text-bold mt-4" style="font-weight: 900;">Shout out to Nickelback</h4>
                        <p>Best rock band ever? Maybe. This site is a bit of fun and hopefully will add a bit of value
                            out there to anyone who needs "lorem ipsum" text that's a little bit different, and a little bit rock flavoured.</p>
                        <p>That being said, if anyone from Nickelback wants this taken down for any reason, just shoot
                            me an email <a style="text-decoration: underline"
                                           href="mailto:michael@songbox.com">here.</a></p>
                        <h4 class="text-bold mt-4" style="font-weight: 900;">What is "Ipsum" text?</h4>
                        <p>When designers are working on a new site, they often need to pad out areas with placeholder
                            text in order to get a feel for how things look and feel. Traditionally they've used what's
                            called "Lorem Ipsum" text; essentially gibberish latin.</p>
                        <p>Over the years, different types of "ipsum" text have popped up, such as "bacon ipsum",
                            "hipster ipsum", "zombie ipsum", "obama ipsum" and literally hundreds more. "Nickelback
                            Ipsum" is my addition to the genre, and I hope you like it. </p>

                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection