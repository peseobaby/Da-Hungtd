<div class="col-xs-12 col-sm-6 col-md-6 text-center chartDashboard-box" style="height: 130px; margin-top: 10px; margin-bottom: 10px">
    <div class="row chartDashboard">
        <div class="{{ $id }} col-xs-12 col-sm-12 col-md-4 chartDashboard-lable">
            <span>
                <b>{{ $num }}/{{ $total }}</b>
            </span>
            <br>
            <span>{{ $label }}</span>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 chartDashboard-graph">
            <canvas id="{{ $id }}"></canvas>
        </div>
    </div>
</div>
<script>
    backgroundColors = ['#e9f3b1', '#e9cff7', '#ddf7ff', '#ffdece'];
    c = 0;
    document.querySelectorAll(".chartDashboard-box").forEach(function(a) {
        a.style.background = backgroundColors[c];
        console.log(c);
        c = c+1;
    })
</script>