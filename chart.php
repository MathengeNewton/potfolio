<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Newton's</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Code', 4],
                ['Study', 2],
                ['work on ideas', 2],
                ['learn new things', 2],
                ['Rest/relax', 8],
                ['chore & errands', 2],
                ['Other staff', 2]
            ]);

            var options = {
                title: 'How i spend my days'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="nav-brand" href="#"><img src="images/th (1).jpg" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" active>
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="code.html">Code center</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="images/th (1).jpg" />
                    <hr class="light">
                    <p>P.O Box 75488</p>
                    <p>Nairobi-Kenya</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Services offered:</h5>
                    <hr class="light">

                    <p>Front end web development</p>
                    <p>Overal web design and development</p>
                    <p>Database management services</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>My working hours:</h5>
                    <hr class="light">

                    <p>weekdays: 8am-10pm</p>
                    <p>weekends: 10am-3pm</p>
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <h5>&copy; newtonMasterminds.com</h5>
                </div>
            </div>
    </footer>
</body>

</html>