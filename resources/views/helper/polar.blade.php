<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

<!-- Usage -->
<h6 class="docs-header">Simple usage of pie chart</h6>
<div class="row">
    <pre>
        <code class="html">
            var data = [
                {
                    value: 300,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Red"
                },
                {
                    value: 50,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Green"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#FFC870",
                    label: "Yellow"
                },
                {
                    value: 40,
                    color: "#949FB1",
                    highlight: "#A8B3C5",
                    label: "Grey"
                }
            ];


            $.ajax({
                type: 'post',
                url: 'http://this-very-application-url/charts/polar-area',
                data: { 'data' : data },
                success: function(data) {
                    $('#some-div').html(data)
                }
            })
        </code>
    </pre>

    <p>You can also use options available in the documentation at <a target="_blank" href="http://www.chartjs.org/docs/#polar-area-chart">ChartJS</a>
</div>


<!-- Result -->
<h6 class="docs-header">Result</h6>
<div class="row">
    <div id="spinner" style="display: none;"><img src="{{ URL::asset('img/loader.gif') }}" width="25" /></div>
    <div class="row">
        <canvas id="chart"></canvas>        
    </div>
</div>

<script type="text/javascript">
    var data = [
        {
            value: 300,
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "Red"
        },
        {
            value: 50,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Green"
        },
        {
            value: 100,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "Yellow"
        },
        {
            value: 40,
            color: "#949FB1",
            highlight: "#A8B3C5",
            label: "Grey"
        }
    ];

    $('#spinner').show();
    setTimeout(function(){
        var ctx = document.getElementById("chart").getContext("2d");
        var chart = new Chart(ctx).PolarArea(data);
        $('#spinner').hide();
    },1000);            
</script>

<!-- Other options -->

