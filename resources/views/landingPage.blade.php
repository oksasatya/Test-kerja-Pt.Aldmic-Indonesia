@extends('layouts.footer')
@extends('layouts.global')
@extends('layouts.navbar')


@section('content')
    <section>
        <div class="container mt-5" style="max-width: 1024px">
            <div class="row d-flex justify-content-center  py-0 py-md-4 py-xxl-5">
                <div class="col-md-5 col-lg-5">
                    <div class="card border-0 radius-default shadow py-2 px-2 px-md-4">
                        <div class="d-flex justify-content-between align-items-center mb-3"> <span
                                class="text-line me-2">HALLOW10</span> <button onclick="copy('HALLOW10','#copy_button_1')"
                                id="copy_button_1"
                                class="btn btn-sm btn-success copy-button position-absolute top-0 end-0">Copy
                            </button>
                        </div>
                        <a href="https://apps.apple.com/us/app/online-florist-floweradvisor"
                            class=" d-flex justify-content-center">
                            <img src="{{ asset('img/app-store-logo.png') }}" class="img-fluid w-50 h-50 " alt="">
                        </a>

                        <div class="d-flex justify-content-center mt-5">
                            <a href="https://www.floweradvisor.com.ph/"><button class="btn btn-warning">Click
                                    Me!</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function copy(text, target) {
                setTimeout(function() {
                    $('#copied_tip').remove();
                }, 800);
                $(target).append("<div class='tip' id='copied_tip'>Copied!</div>");
                var input = document.createElement('input');
                input.setAttribute('value', text);
                document.body.appendChild(input);
                input.select();
                var result = document.execCommand('copy');
                document.body.removeChild(input)
                return result;
            }
        </script>
    </section>
@endsection
