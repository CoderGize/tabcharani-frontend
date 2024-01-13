<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.components.css')

</head>



<body>


    @include('home.components.preloader')

    @include('home.components.top')

    @include('home.components.switcher')

    @include('home.components.offcanvas')


    <div class="has-smooth" id="has_smooth"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div class="body-wrapper">

                @include('home.components.navbar')

                <main>

                    @include('home.contact.contact')

                </main>

                @include('home.components.footer')

            </div>
        </div>
    </div>


    @include('home.components.script')

</body>

</html>
