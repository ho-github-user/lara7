<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Script -->
        <script type="text/javascript" src="/js/Chart.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <!-- Styles -->
        <link type="text/css" href="/css/test.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <div>
                        test:{{ $chart }}
                    </div>
<!--                    <canvas id="myChart" class="chart" width="300px" height="300px"></canvas>-->
                    <canvas class="chart"
                            width="300px", height="200px"
                            data-1="12"
                            data-2="19"
                            data-3="3"
                            data-4="17"
                            data-5="6"
                            data-6="3">
                    </canvas>
                </div>
            </div>
        </div>
        <script>
            // https://www.chartjs.org/docs/latest/charts/radar.html
            $('.chart').each(function(){
                // var ctx = document.getElementById('myChart').getContext('2d');
                var ctx = this.getContext('2d');
                data = $(this).data();
                var myChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: ['type1', 'type2', 'type3', 'type4', 'type5', 'type6'],
                        datasets: [
                            {
                                // label: 'apples',
                                data: [data[1], data[2], data[3], data[4], data[5], data[6]],
                                backgroundColor: "rgba(153,255,51,0.4)"
                            }
                            ,{
                                label: 'oranges',
                                data: [2, 15, 5, 5, 2, 10],
                                backgroundColor: "rgba(255,153,0,0.4)"
                            }
                        ]
                    },
                    // ラベルの消去
                    options: {
                        legend: {
                            display: false
                        }
                    },
                    scale: {

                        ticks: {
                            stepSize: 0.5, // 目盛の間隔
                            max: 20, //最大値
                            beginAtZero: true
                        }
                    }
                });
            });
        </script>
    </body>
</html>
