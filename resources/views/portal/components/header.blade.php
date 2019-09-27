@section('portal_css')
<style>
    .intro-2 {
    background: url("{!! $urlImg !!}")no-repeat center center;
    background-size: cover;
    }
</style>
    
@endsection

<header>
    <div class="view intro-2">
        <div class="blackout-header"></div>
        <div class="full-bg-img">
            <div class="mask rgba-black-strong flex-center text-float-frente">
                <div class="container">
                    <div class="white-text text-center wow fadeInUp">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

