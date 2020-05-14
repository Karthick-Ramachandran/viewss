<!DOCTYPE html>
<html>
  <head>
    <title>FreshVegges</title>
    <link rel="stylesheet" href="{{asset('mapping/style.css')}}" />
    <link rel="stylesheet" href="{{asset("mapping/core.css")}}" />
    <script src="{{asset('core.js/core.js')}}"></script>
  </head>
  <body>
    <center>
      <div>
        Filter By date
        <input type="date" />
        <input type="date" class="date" />
        <button type="button">Fetch results</button>
      </div>
      <br />
      <br />
</center>
      <div id="wrapper">
        <div id="mynetwork" style="width:100vw;"></div>
        <div id="loadingBar">
          <div class="outerBorder">
            <div id="text">0%</div>
            <div id="border">
              <div id="bar"></div>
            </div>
          </div>
        </div>
      </div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="{{asset('mapping/app.js')}}"></script>
  </body>
</html>

