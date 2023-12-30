<html>
    <head>
        <title>eBook</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <style>
            .img-text-container {
                position: relative;
            }

            .inner {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.3);
                color: #fff;
            }
            @page { margin: 0px; }
            body { margin: 0px; }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="img-text-container">
                    <img src="{{public_path($book->front_cover)}}" class="img-fluid" alt="Responsive image" width="100%">
                    <div class="bg-text inner">
                        <h1 class="text-white"> {{$book->book_name}} </h1>
                        <p>Written by {{$book->author_name}}</p>
                    </div>
                </div>
                <div class="page-break" style="page-break-after:always;"><span style="display:none;">&nbsp;</span></div>
                <div class="container">
                    {!! html_entity_decode($book->page_content)!!}
                </div>
                <div class="page-break" style="page-break-after:always;"><span style="display:none;">&nbsp;</span></div>
                <div style="background: {{$book->back_cover}};" class="text-white">
                    <div class="container" style="padding-top: 60px; padding-bottom:60px">
                        <div class="pt-3">
                            <h2>{{$book->book_name}}</h2>
                            <p>Written by {{$book->author_name}}</p>
                        </div>
                        <hr style="border-color: #fff" class="mt-5 mb-5">

                        <div class="row">
                            <div class="col-xs-4 col-md-4 col-sm-4">
                                <img src="{{public_path($book->author_photo)}}" class="img-fluid rounded" alt="">
                                <h5>{{$book->author_name}}</h5>
                            </div>
                            <div class="col-xs-8 col-md-8 col-sm-8">
                                <p>{{$book->about_author}}</p>
                            </div>
                        </div>
                        <hr style="border-color: #fff" class="mt-5 mb-5">

                        <div class="mt-5">
                            <h3>Published By BriBooks.</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid veritatis autem neque sapiente sed odio, hic soluta consectetur totam tenetur!
                            Consequuntur quis amet quia ratione tempore dolore, facere sint fugiat beatae, rerum corporis sapiente eos itaque optio. Atque, at officia!
                            Eius fugit nesciunt dolores corrupti cupiditate veniam nulla, officiis dolorem tenetur voluptatum sint quam deleniti asperiores natus et neque delectus.
                            Recusandae vitae dolore, deleniti totam inventore asperiores dolorum sed quam laborum? Quidem voluptas perspiciatis optio! Ullam temporibus id ratione. Odit!
                            Soluta officiis mollitia nisi eligendi laborum deleniti, a voluptatum eos beatae fuga temporibus maxime numquam repudiandae. Consequuntur aut facere impedit.
                            Perferendis ratione magni, explicabo sequi ea maxime consectetur eveniet numquam omnis saepe ducimus corporis rem ipsam ex cum nobis laboriosam?
                            Deleniti recusandae consectetur laborum itaque illo sed sunt at qui animi, suscipit amet non dolore. Nemo cumque esse modi voluptas?
                            Amet nostrum fugiat voluptatem cupiditate molestiae temporibus accusamus doloribus qui, recusandae ipsam consequatur, id eos possimus enim sint. Autem,
                            earum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda velit in cum quae cupiditate fuga ratione suscipit est voluptates aspernatur.Nihil inventore 
                            aut dolorem rem eaque quibusdam eos non sit. Perspiciatis dolore obcaecati iure maiores voluptatem consequuntur suscipit enim consequatur!</p>
                            <h6 class="mt-3">&copy; BriBooks</h6>
                        </div>
                        <hr style="border-color: #fff" class="mt-5 mb-5">

                        <div class="row">
                            <div class="col-xs-6 col-md-6 col-sm-6">
                                <div style="width: 40%">
                                    <img src="{{public_path('assets/img/logo.png')}}" class="img-fluid rounded">
                                    <p class="text-center">www.bribooks.com</p>
                                    <p class="text-center">Preview copy of limited distributation</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 col-sm-6">
                                <div style="float: right; width:30%">
                                    <img src="{{public_path('assets/img/qr_code.svg')}}" class="img-fluid rounded">
                                    <h5 class="text-center">Version 1</h5>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCasx9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>