@extends('layout')

@section('content')
<br/><br/><br/>
<center><div class="container">
    <h1 class="display-1">Dashboard</h1>
    <p class="lead">This is a simple intro for the RSB Hands-on.</p>
    <hr class="my-4"><br/>

    <h1 class="display-4">Most Entries</h1><br/>
    <div class="row">
        <div class="col-md-4">
          <div class="card-counter primary">
            <i class="fa fa-users"></i>
            <span class="count-numbers">{{ $dashboardCollections['most_top_recipient']['total'] }}</span>
            <span class="count-name">{{ $dashboardCollections['most_top_recipient']['name'] }}</span>
          </div>
          <span class="count-numbers font-weight-light">Recipient</span>
        </div>

        <div class="col-md-4">
            <div class="card-counter success">
              <i class="fa fa-database"></i>
              <span class="count-numbers">{{ $dashboardCollections['most_top_country']['total'] }}</span>
              <span class="count-name">{{ $dashboardCollections['most_top_country']['name'] }}</span>
            </div>
            <span class="count-numbers font-weight-light">Country</span>
        </div>

        <div class="col-md-4">
            <div class="card-counter info">
              <i class="fa fa-code-fork"></i>
              <span class="count-numbers">{{ $dashboardCollections['most_top_career']['total'] }}</span>
              <span class="count-name">{{ $dashboardCollections['most_top_career']['name'] }}</span>
            </div>
            <span class="count-numbers font-weight-light">Career</span>
          </div>
    </div>

    <br/><br/><br/>

    <h1 class="display-4">Most Career</h1>
    <canvas id="chrCareer" style="width:100%;"></canvas>
    <script type="text/javascript">
        var xValues = {!! json_encode($dashboardCollections['list_top_careers']['names']) !!};
        var yValues = {!! json_encode($dashboardCollections['list_top_careers']['totals']) !!};
        var barColors = ["crimson", "yellowgreen","purple","dodgerblue","orange", "pink", "violet", "brown"];

        new Chart("chrCareer", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: ""
                },
                legend: {
                    display: true
                }
            }
        });
    </script>

    <br/><br/>

    <h1 class="display-4">Most Recipient</h1>
    <canvas id="chrRecipient" style="width:100%;"></canvas>
    <script type="text/javascript">
        var xValues = {!! json_encode($dashboardCollections['list_top_recipients']['names']) !!};
        var yValues = {!! json_encode($dashboardCollections['list_top_recipients']['totals']) !!};
        var barColors = ["crimson", "yellowgreen","purple","dodgerblue","orange", "pink", "violet", "brown"];

        new Chart("chrRecipient", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: ""
                },
                legend: {
                    display: false
                }
            }
        });
    </script>

    <br/><br/>

    <h1 class="display-4">Most Country</h1>
    <canvas id="chrCountry" style="width:100%;<br/>"></canvas>
    <script type="text/javascript">
        var xValues = {!! json_encode($dashboardCollections['list_top_countries']['names']) !!};
        var yValues = {!! json_encode($dashboardCollections['list_top_countries']['totals']) !!};
        var barColors = ["crimson", "yellowgreen","purple","dodgerblue","orange", "pink", "violet", "brown"];

        new Chart("chrCountry", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: ""
                },
                legend: {
                    display: true
                }
            }
        });
    </script>

</div></center>
@endsection
