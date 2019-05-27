<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SECURITIES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            
                <div class="title m-b-md">
                    SECURITIES 
                    
                </div>
                {{$time}}
                @forelse($data as $rs)
               
               <table class="table table-striped table-dark">
                     <thead>
                     <tr>
                        <th scope="col"> FBMEMAS </th>
                        <th scope="col"> FBMT100 </th>
                        <th scope="col"> FBMSHA </th>
                        <th scope="col"> F4GBM </th>
                        <th scope="col"> FBM70 </th>
                    </tr>
                    </thead>
                    <tbody>
                     
                      
                      <tr>
                        <td scope="row">{{$rs->fbmemas}}</td>
                        <td scope="row">{{$rs->fbmt100}}</td>
                        <td scope="row">{{$rs->fbmsha}}</td>
                        <td scope="row">{{$rs->f4gbm}}</td>
                        <td scope="row">{{$rs->fbm70}}</td>
                      </tr>
                      @empty
                      <tr>
                      <td class="text-center" colspan="6">Tidak ada data</td>
                     </tr>
                     @endforelse
                    </tbody>
               </table>
               
            </div>
        </div>
    </body>
</html>
