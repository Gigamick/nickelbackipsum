<div class="row">
    <div class="col-12 col-md-6 offset-md-3 d-flex justify-content-end align-items-center py-3">
        <!-- Share to Twitter Button -->
        @if(request()->is('/'))
            <a href="/about">About</a>
        @elseif(request()->is('about'))
            <a href="/">Home</a>
        @endif

        <button id="share-to-twitter" style="border:none; background: transparent" class="twitter-share-button p-0 m-0 bg-light">
            <span style="font-size: 30px; line-height: 0px;" class="ms-3">𝕩</span>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-12 d-flex justify-content-center flex-column align-items-center">
        <h1 class="mb-0 pb-0 mt-4 display-1" style="font-weight: 900;">Nickelback</h1>
        <h3 class="mt-0 pt-0 display-3" style="font-weight: 200; line-height: 50px"><i>IPSUM</i></h3>
        <p class="mt-4 tagline text-center">This is how you remind me of what my design looks like with copy.</p>
    </div>
</div>