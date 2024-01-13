<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.components.css')
</head>



<body>

    @include('home.components.preloader')

    @include('home.components.top')

    @include('home.components.switcher')

    @include('home.landing.offcanvas')

    <div class="has-smooth" id="has_smooth"></div>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div class="body-wrapper">

                @include('home.landing.navbar')

                <main>

                    @include('home.landing.hero')

                    @include('home.landing.about')

                    @include('home.landing.service')

                    @include('home.landing.brand')

                    @include('home.landing.portfolio')

                    @include('home.landing.award')

                    @include('home.landing.cta')

                    @include('home.landing.slider')

                </main>

                @include('home.landing.footer')

            </div>
        </div>
    </div>

    @include('home.components.script')

</body>

</html>
