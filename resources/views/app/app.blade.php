<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('asset') }}/fontawesome/css/all.css" />

    <!-- CSS Custom -->
    <link rel="stylesheet" href="{{ asset('asset') }}/style.css" />
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <title>Web Test</title>
    </head>
    <body>
        <div class="main-container d-flex">
            <!--sidebar-->
            @include('app.sidebar')

            <div class="content">
                <!--navbar-->
                @include('app.navbar')

                <!--content-->
                @yield('container')
            </div>
            
        </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                scrollX: true,
            });
        });
    </script>
    <script>
        // $(".sidebar ul li").on('click', function(){
        //     $(".sidebar ul li.active").removeClass('active')
        //     $(this).addClass('active');
        // });

        // $('.open-btn').on('click', function(){
        //     $('.sidebar').addClass('active');
        // });

        // $('.close-btn').on('click', function(){
        //     $('.sidebar').removeClass('active');
        // });

        const openBtn = document.querySelector('#open-btn');
        const closeBtn = document.querySelector('#close-btn');
        const sideNav = document.querySelector('#side_nav');

        openBtn.addEventListener('click', function() {
            openBtn.classList.add('active');
            sideNav.classList.toggle('active');
        });

        closeBtn.addEventListener('click', function() {
            closeBtn.classList.remove('active');
            sideNav.classList.toggle('active');
        })
        
    </script>
    </body>
</html>