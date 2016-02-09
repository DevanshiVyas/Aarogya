<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Easy Pie Chart</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="excanvas.js"></script>
        <script type="text/javascript" src="../jquery.easy-pie-chart.js"></script>

        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../jquery.easy-pie-chart.css" media="screen">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script type="text/javascript">
            var initPieChart = function() {
                $('.percentage').easyPieChart({
                    animate: 1000
                });
                $('.percentage-light').easyPieChart({
                    barColor: function(percent) {
                        percent /= 100;
                        return "rgb(" + Math.round(255 * (1-percent)) + ", " + Math.round(255 * percent) + ", 0)";
                    },
                    trackColor: '#666',
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: 15,
                    animate: 1000
                });

                $('.updateEasyPieChart').on('click', function(e) {
                  e.preventDefault();
                  $('.percentage, .percentage-light').each(function() {
                    var newValue = Math.round(100*Math.random());
                    $(this).data('easyPieChart').update(newValue);
                    $('span', this).text(newValue);
                  });
                });
            };
        </script>
    </head>
    <body onload="initPieChart();">
        <div class="container">
            <h1>EASY PIE CHART</h1>
            <div class="chart">
                <div class="percentage" data-percent="55"><span>55</span>%</div>
                <div class="label">New visits</div>
            </div>
            <div class="chart">
                <div class="percentage" data-percent="46"><span>46</span>%</div>
                <div class="label">Bounce rate</div>
            </div>
            <div class="chart">
                <div class="percentage" data-percent="92"><span>92</span>%</div>
                <div class="label">Server load</div>
            </div>
            <div class="chart">
                <div class="percentage" data-percent="84"><span>752</span>MB</div>
                <div class="label">Used RAM</div>
            </div>
            <div style="clear:both;"></div>
            <div class="dark">
                <div class="chart">
                    <div class="percentage-light" data-percent="55"><span>55</span>%</div>
                    <div class="label">New visits</div>
                </div>
                <div class="chart">
                    <div class="percentage-light" data-percent="46"><span>46</span>%</div>
                    <div class="label">Bounce rate</div>
                </div>
                <div class="chart">
                    <div class="percentage-light" data-percent="92"><span>92</span>%</div>
                    <div class="label">Server load</div>
                </div>
                <div class="chart">
                    <div class="percentage-light" data-percent="84"><span>752</span>MB</div>
                    <div class="label">Used RAM</div>
                </div>
                <div style="clear:both;"></div>
            </div>

            <p><a href="#" class="button updateEasyPieChart">Update pie charts</a></p>

            <p class="credits">Inspired by: <a href="http://drbl.in/ezuc" target="_blank">Simple Pie Charts II by Rafal Bromirski on dribble</a></p>
        </div>
    </body>
</html>
