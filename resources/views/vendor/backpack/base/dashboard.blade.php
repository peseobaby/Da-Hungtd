@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            <span class="text-capitalize">
                {{ trans('backpack::base.dashboard') }}<small class="content_title_header">{{ trans('backpack::base.first_page_you_see') }}</small>
            </span>
        </h1>
    <!--  <ol class="breadcrumb">
            <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{ trans('backpack::base.dashboard') }}</li>
        </ol> -->
    </section>
@endsection

@section('before_styles')
    <style>
        div.statistical i {
            -webkit-transition: font-size 2s; /* For Safari 3.1 to 6.0 */
            transition: font-size 0.5s;
        }
        div.statistical:hover i  {
            font-size: 90px;
        }
    </style>
@endsection
@section('content')

    <div class="row" style="background: #ffffff;border: 1px solid;padding: 20px;">
        <div class="col-md-6">
            {{--    number  --}}
            <div class="box dashboard dashboardChart">
                @include('backpack::panel', ['id' => 'rooms_activate', 'num' => $rooms_activate->count(), 'total' => $rooms->count(), 'label' => 'Phòng đang hoạt động'])
                @include('backpack::panel', ['id' => 'rooms_free_4_hours', 'num' => $rooms_free_4_hours->count(), 'total' => $rooms->count(), 'label' => 'Phòng trống trong vòng 4 giờ tới'])
                @include('backpack::panel', ['id' => 'hotels_have_rooms', 'num' => $hotels_have_rooms->count(), 'total' => $hotels->count(), 'label' => 'Khách sạn nhà nghỉ còn phòng'])
                @include('backpack::panel', ['id' => 'orders_success', 'num' => $orders_success->count(), 'total' => $orders->count(), 'label' => 'Đặt phòng thành công'])
                <div class="col-md-12" style="background: #f3f5f3">
                    <div class="">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="background: #295f2c9c; margin-top:10px">
            <div class="table_listDashboard">
                <div class="col-md-12" style=" margin-top:10px">
                    <div class="box dashboard">
                        <div class="box-header text-center">
                            <h2>10 đơn phòng được đặt gần nhất</h2>
                        </div>
                        <div class="box-body dashboard">
                            <div class="table-responsive">
                                <table class="table no-margin table-striped table-hover dashboard">
                                    <thead class="bg-primary">
                                    <tr>
                                        <th>Tên khách</th>
                                        <th>Phòng</th>
                                        <th>Khách sạn</th>
                                        <th>Thời gian</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($top10Orders as $order)
                                        <tr>
                                            <td>{{ @$order->user->name }}</td>
                                            <td>{{ @$order->room->name }}</td>
                                            <td>{{ @$order->hotel->name }}</td>
                                            <td>{{ $order->create_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('after_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.min.js"></script>
    <script src="{{ asset('vendor/adminlte/bower_components/moment/moment.js') }}"></script>
    <script type="text/javascript">
        let newPanel = function(options, id, data, backgroundColor, hoverBackgroundColor) {
            new Chart($("#" + id), {
                type: 'doughnut',
                tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                data: {
                    labels: [
                    ],
                    datasets: [{
                        data: data,
                        backgroundColor: backgroundColor,
                        hoverBackgroundColor: hoverBackgroundColor
                    }]
                },
                options: options
            });
        };
        let options = {
            // legend: false,
            responsive: true,
            tooltips: {
                enabled: false,
            }
        };
        let data1 = [{{ $rooms_activate->count() }}, {{ $rooms->count() }}];
        newPanel(options, 'rooms_activate', data1, ["#aee0f9", "#13a7fd"], ["#aee0f9", "#13a7fd"]);
        let data2 = [{{ $rooms_free_4_hours->count() }}, {{ $rooms->count() }}];
        newPanel(options, 'rooms_free_4_hours', data2, ["#febf72", "#fb9e1b"], ["#febf72", "#fb9e1b"]);
        let data3 = [{{ $hotels_have_rooms->count() }}, {{ $hotels->count() }}];
        newPanel(options, 'hotels_have_rooms', data3, ["#7cd5bf", "#00bc8c"], ["#7cd5bf", "#00bc8c"]);
        let data4 = [{{ $orders_success->count() }}, {{ $orders->count() }}];
        newPanel(options, 'orders_success', data4, ["#dd8f8f", "#d75c5c"], ["#dd8f8f", "#d75c5c"])
    </script>

    <script>
        data = @json($orders_done);
        window.chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        };
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ['I', 'II', 'III', 'IV' ],
            datasets: [{
                label: 'Đơn đặt phòng hoàn thành theo quý',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: data
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById('myChart').getContext('2d');
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Biểu đồ'
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontColor: "rgba(0,0,0,0.5)",
                                fontStyle: "bold",
                                beginAtZero: true,
                                maxTicksLimit: 5,
                                padding: 20,
                                min:0,
                                max: Math.max(...data) + 1,
                                stepSize: 1,
                            },
                            gridLines: {
                                drawTicks: false,
                                display: false
                            }

                        }],
                        xAxes: [{
                            gridLines: {
                                zeroLineColor: "transparent"
                            },
                            ticks: {
                                padding: 20,
                                fontColor: "rgba(0,0,0,0.5)",
                                fontStyle: "bold",
                                beginAtZero: true,
                            }
                        }]
                    }
                }
            });

        };
    </script>
@endsection