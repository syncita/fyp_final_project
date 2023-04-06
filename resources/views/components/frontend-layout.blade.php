<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Sayari</title>
</head>

<body>
    {{-- Navbar --}}
    <x-frontend-navbar />

    {{ $slot }}

    {{-- Footer --}}
    <section class="py-5 bg-secondary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Paid stories</h4>
                    <p>Live, laugh, love Sayari</p>


                </div>
                <div class="col-md-4">
                    <h4>About Us</h4>

                    <span> <a class="text-white" href="https://www.facebook.com/"><i
                                class="fa-brands fa-square-facebook fs-2"> </i> </a> </span>
                    <span class="mx-2"> <a class="text-white" href="https://twitter.com/"> <i
                                class="fa-brands fa-twitter fs-2"></i></a> </span>
                    <span class="mx-2"> <a class="text-white" href="https://www.instagram.com/"> <i
                                class="fa-brands fa-instagram fs-2"></i></a></span>

                </div>
                <div class="col-md-4">
                    <h4>
                        <i class="bi bi-book fs-2 px-2"></i>SAYARI
                    </h4>
                    <p>Sayari <i class="bi bi-c-circle"></i> Copyright 2023 </p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

<style>
h1,h2,h3,h4,h5,p{
   font-family: 'Bitter';
}
p{
   font-size: 20px;
}
</style>

</html>
