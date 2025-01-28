@extends('layouts.default')

@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Dashboard v2</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard v2</li>
            </ol>
          </div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon text-bg-primary shadow-sm">
                <i class="bi bi-gear-fill"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon text-bg-danger shadow-sm">
                <i class="bi bi-hand-thumbs-up-fill"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- fix for small devices only -->
          <!-- <div class="clearfix hidden-md-up"></div> -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon text-bg-success shadow-sm">
                <i class="bi bi-cart-fill"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon text-bg-warning shadow-sm">
                <i class="bi bi-people-fill"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!--begin::Row-->
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-4">
              <div class="card-header">
                <h5 class="card-title">Monthly Recap Report</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-bs-toggle="dropdown">
                      <i class="bi bi-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item"> Something else here </a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                    <i class="bi bi-x-lg"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!--begin::Row-->
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Sales: 1 Jan, 2023 - 30 Jul, 2023</strong>
                    </p>
                    <div id="sales-chart" style="min-height: 195px;"><div id="apexchartsyahw3ruc" class="apexcharts-canvas apexchartsyahw3ruc apexcharts-theme-light" style="width: 675px; height: 180px;"><svg id="SvgjsSvg1457" width="675" height="180" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1464" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1534" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)"><g id="SvgjsG1535" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1537" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1538">100</tspan><title>100</title></text><text id="SvgjsText1540" font-family="Helvetica, Arial, sans-serif" x="20" y="55.14" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1541">80</tspan><title>80</title></text><text id="SvgjsText1543" font-family="Helvetica, Arial, sans-serif" x="20" y="78.78" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1544">60</tspan><title>60</title></text><text id="SvgjsText1546" font-family="Helvetica, Arial, sans-serif" x="20" y="102.42" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1547">40</tspan><title>40</title></text><text id="SvgjsText1549" font-family="Helvetica, Arial, sans-serif" x="20" y="126.06" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1550">20</tspan><title>20</title></text><text id="SvgjsText1552" font-family="Helvetica, Arial, sans-serif" x="20" y="149.7" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1553">0</tspan><title>0</title></text></g></g><g id="SvgjsG1459" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)"><defs id="SvgjsDefs1458"><clipPath id="gridRectMaskyahw3ruc"><rect id="SvgjsRect1469" width="627.640625" height="122.19999999999999" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskyahw3ruc"></clipPath><clipPath id="nonForecastMaskyahw3ruc"></clipPath><clipPath id="gridRectMarkerMaskyahw3ruc"><rect id="SvgjsRect1470" width="623.640625" height="122.19999999999999" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1475" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1476" stop-opacity="0.65" stop-color="rgba(13,110,253,0.65)" offset="0"></stop><stop id="SvgjsStop1477" stop-opacity="0.5" stop-color="rgba(134,183,254,0.5)" offset="1"></stop><stop id="SvgjsStop1478" stop-opacity="0.5" stop-color="rgba(134,183,254,0.5)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1484" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1485" stop-opacity="0.65" stop-color="rgba(32,201,151,0.65)" offset="0"></stop><stop id="SvgjsStop1486" stop-opacity="0.5" stop-color="rgba(144,228,203,0.5)" offset="1"></stop><stop id="SvgjsStop1487" stop-opacity="0.5" stop-color="rgba(144,228,203,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1465" x1="0" y1="0" x2="0" y2="118.19999999999999" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="118.19999999999999" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1494" x1="0" y1="119.19999999999999" x2="0" y2="125.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1495" x1="106.12629488950276" y1="119.19999999999999" x2="106.12629488950276" y2="125.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1496" x1="201.98230317679557" y1="119.19999999999999" x2="201.98230317679557" y2="125.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1497" x1="308.1085980662983" y1="119.19999999999999" x2="308.1085980662983" y2="125.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1498" x1="410.81146408839777" y1="119.19999999999999" x2="410.81146408839777" y2="125.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1499" x1="516.9377589779006" y1="119.19999999999999" x2="516.9377589779006" y2="125.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG1490" class="apexcharts-grid"><g id="SvgjsG1491" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1501" x1="0" y1="23.639999999999997" x2="619.640625" y2="23.639999999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1502" x1="0" y1="47.279999999999994" x2="619.640625" y2="47.279999999999994" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1503" x1="0" y1="70.91999999999999" x2="619.640625" y2="70.91999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1504" x1="0" y1="94.55999999999999" x2="619.640625" y2="94.55999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1492" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1507" x1="0" y1="118.19999999999999" x2="619.640625" y2="118.19999999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1506" x1="0" y1="1" x2="0" y2="118.19999999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1493" class="apexcharts-grid-borders"><line id="SvgjsLine1500" x1="0" y1="0" x2="619.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1505" x1="0" y1="118.19999999999999" x2="619.640625" y2="118.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1533" x1="0" y1="119.19999999999999" x2="619.640625" y2="119.19999999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1471" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1472" class="apexcharts-series" seriesName="DigitalxGoods" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1479" d="M 0 118.19999999999999 L 0 85.10399999999998C 37.144203211325966 85.10399999999998 68.9820916781768 61.464 106.12629488950276 61.464C 139.67589779005525 61.464 168.43270027624308 70.91999999999999 201.98230317679557 70.91999999999999C 239.12650638812153 70.91999999999999 270.96439485497234 95.74199999999999 308.1085980662983 95.74199999999999C 344.0546011740331 95.74199999999999 374.865460980663 16.548000000000002 410.81146408839777 16.548000000000002C 447.95566729972376 16.548000000000002 479.79355576657457 86.286 516.9377589779006 86.286C 552.8837620856353 86.286 583.6946218922652 11.820000000000007 619.640625 11.820000000000007C 619.640625 11.820000000000007 619.640625 11.820000000000007 619.640625 118.19999999999999M 619.640625 11.820000000000007z" fill="url(#SvgjsLinearGradient1475)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskyahw3ruc)" pathTo="M 0 118.19999999999999 L 0 85.10399999999998C 37.144203211325966 85.10399999999998 68.9820916781768 61.464 106.12629488950276 61.464C 139.67589779005525 61.464 168.43270027624308 70.91999999999999 201.98230317679557 70.91999999999999C 239.12650638812153 70.91999999999999 270.96439485497234 95.74199999999999 308.1085980662983 95.74199999999999C 344.0546011740331 95.74199999999999 374.865460980663 16.548000000000002 410.81146408839777 16.548000000000002C 447.95566729972376 16.548000000000002 479.79355576657457 86.286 516.9377589779006 86.286C 552.8837620856353 86.286 583.6946218922652 11.820000000000007 619.640625 11.820000000000007C 619.640625 11.820000000000007 619.640625 11.820000000000007 619.640625 118.19999999999999M 619.640625 11.820000000000007z" pathFrom="M -1 118.19999999999999 L -1 118.19999999999999 L 106.12629488950276 118.19999999999999 L 201.98230317679557 118.19999999999999 L 308.1085980662983 118.19999999999999 L 410.81146408839777 118.19999999999999 L 516.9377589779006 118.19999999999999 L 619.640625 118.19999999999999"></path><path id="SvgjsPath1480" d="M 0 85.10399999999998C 37.144203211325966 85.10399999999998 68.9820916781768 61.464 106.12629488950276 61.464C 139.67589779005525 61.464 168.43270027624308 70.91999999999999 201.98230317679557 70.91999999999999C 239.12650638812153 70.91999999999999 270.96439485497234 95.74199999999999 308.1085980662983 95.74199999999999C 344.0546011740331 95.74199999999999 374.865460980663 16.548000000000002 410.81146408839777 16.548000000000002C 447.95566729972376 16.548000000000002 479.79355576657457 86.286 516.9377589779006 86.286C 552.8837620856353 86.286 583.6946218922652 11.820000000000007 619.640625 11.820000000000007" fill="none" fill-opacity="1" stroke="#0d6efd" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskyahw3ruc)" pathTo="M 0 85.10399999999998C 37.144203211325966 85.10399999999998 68.9820916781768 61.464 106.12629488950276 61.464C 139.67589779005525 61.464 168.43270027624308 70.91999999999999 201.98230317679557 70.91999999999999C 239.12650638812153 70.91999999999999 270.96439485497234 95.74199999999999 308.1085980662983 95.74199999999999C 344.0546011740331 95.74199999999999 374.865460980663 16.548000000000002 410.81146408839777 16.548000000000002C 447.95566729972376 16.548000000000002 479.79355576657457 86.286 516.9377589779006 86.286C 552.8837620856353 86.286 583.6946218922652 11.820000000000007 619.640625 11.820000000000007" pathFrom="M -1 118.19999999999999 L -1 118.19999999999999 L 106.12629488950276 118.19999999999999 L 201.98230317679557 118.19999999999999 L 308.1085980662983 118.19999999999999 L 410.81146408839777 118.19999999999999 L 516.9377589779006 118.19999999999999 L 619.640625 118.19999999999999" fill-rule="evenodd"></path><g id="SvgjsG1473" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1557" r="0" cx="0" cy="0" class="apexcharts-marker wvnoy6e67 no-pointer-events" stroke="#ffffff" fill="#0d6efd" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1481" class="apexcharts-series" seriesName="Electronics" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1488" d="M 0 118.19999999999999 L 0 41.370000000000005C 37.144203211325966 41.370000000000005 68.9820916781768 48.462 106.12629488950276 48.462C 139.67589779005525 48.462 168.43270027624308 23.64 201.98230317679557 23.64C 239.12650638812153 23.64 270.96439485497234 22.458 308.1085980662983 22.458C 344.0546011740331 22.458 374.865460980663 52.007999999999996 410.81146408839777 52.007999999999996C 447.95566729972376 52.007999999999996 479.79355576657457 53.19 516.9377589779006 53.19C 552.8837620856353 53.19 583.6946218922652 70.91999999999999 619.640625 70.91999999999999C 619.640625 70.91999999999999 619.640625 70.91999999999999 619.640625 118.19999999999999M 619.640625 70.91999999999999z" fill="url(#SvgjsLinearGradient1484)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskyahw3ruc)" pathTo="M 0 118.19999999999999 L 0 41.370000000000005C 37.144203211325966 41.370000000000005 68.9820916781768 48.462 106.12629488950276 48.462C 139.67589779005525 48.462 168.43270027624308 23.64 201.98230317679557 23.64C 239.12650638812153 23.64 270.96439485497234 22.458 308.1085980662983 22.458C 344.0546011740331 22.458 374.865460980663 52.007999999999996 410.81146408839777 52.007999999999996C 447.95566729972376 52.007999999999996 479.79355576657457 53.19 516.9377589779006 53.19C 552.8837620856353 53.19 583.6946218922652 70.91999999999999 619.640625 70.91999999999999C 619.640625 70.91999999999999 619.640625 70.91999999999999 619.640625 118.19999999999999M 619.640625 70.91999999999999z" pathFrom="M -1 118.19999999999999 L -1 118.19999999999999 L 106.12629488950276 118.19999999999999 L 201.98230317679557 118.19999999999999 L 308.1085980662983 118.19999999999999 L 410.81146408839777 118.19999999999999 L 516.9377589779006 118.19999999999999 L 619.640625 118.19999999999999"></path><path id="SvgjsPath1489" d="M 0 41.370000000000005C 37.144203211325966 41.370000000000005 68.9820916781768 48.462 106.12629488950276 48.462C 139.67589779005525 48.462 168.43270027624308 23.64 201.98230317679557 23.64C 239.12650638812153 23.64 270.96439485497234 22.458 308.1085980662983 22.458C 344.0546011740331 22.458 374.865460980663 52.007999999999996 410.81146408839777 52.007999999999996C 447.95566729972376 52.007999999999996 479.79355576657457 53.19 516.9377589779006 53.19C 552.8837620856353 53.19 583.6946218922652 70.91999999999999 619.640625 70.91999999999999" fill="none" fill-opacity="1" stroke="#20c997" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskyahw3ruc)" pathTo="M 0 41.370000000000005C 37.144203211325966 41.370000000000005 68.9820916781768 48.462 106.12629488950276 48.462C 139.67589779005525 48.462 168.43270027624308 23.64 201.98230317679557 23.64C 239.12650638812153 23.64 270.96439485497234 22.458 308.1085980662983 22.458C 344.0546011740331 22.458 374.865460980663 52.007999999999996 410.81146408839777 52.007999999999996C 447.95566729972376 52.007999999999996 479.79355576657457 53.19 516.9377589779006 53.19C 552.8837620856353 53.19 583.6946218922652 70.91999999999999 619.640625 70.91999999999999" pathFrom="M -1 118.19999999999999 L -1 118.19999999999999 L 106.12629488950276 118.19999999999999 L 201.98230317679557 118.19999999999999 L 308.1085980662983 118.19999999999999 L 410.81146408839777 118.19999999999999 L 516.9377589779006 118.19999999999999 L 619.640625 118.19999999999999" fill-rule="evenodd"></path><g id="SvgjsG1482" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1558" r="0" cx="0" cy="0" class="apexcharts-marker wbnee8vb no-pointer-events" stroke="#ffffff" fill="#20c997" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1474" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1483" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1508" x1="0" y1="0" x2="619.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1509" x1="0" y1="0" x2="619.640625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1510" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1511" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1513" font-family="Helvetica, Arial, sans-serif" x="0" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1514">Jan '23</tspan><title>Jan '23</title></text><text id="SvgjsText1516" font-family="Helvetica, Arial, sans-serif" x="106.12629488950276" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1517">Feb '23</tspan><title>Feb '23</title></text><text id="SvgjsText1519" font-family="Helvetica, Arial, sans-serif" x="201.98230317679557" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1520">Mar '23</tspan><title>Mar '23</title></text><text id="SvgjsText1522" font-family="Helvetica, Arial, sans-serif" x="308.1085980662983" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1523">Apr '23</tspan><title>Apr '23</title></text><text id="SvgjsText1525" font-family="Helvetica, Arial, sans-serif" x="410.81146408839777" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1526">May '23</tspan><title>May '23</title></text><text id="SvgjsText1528" font-family="Helvetica, Arial, sans-serif" x="516.9377589779006" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1529">Jun '23</tspan><title>Jun '23</title></text><text id="SvgjsText1531" font-family="Helvetica, Arial, sans-serif" x="619.640625" y="147.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1532"></tspan><title></title></text></g></g><g id="SvgjsG1554" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1555" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1556" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1559" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1560" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1460" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 90px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(13, 110, 253);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 201, 151);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center"><strong>Goal Completion</strong></p>
                    <div class="progress-group">
                      Add Products to Cart
                      <span class="float-end"><b>160</b>/200</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar text-bg-primary" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Complete Purchase
                      <span class="float-end"><b>310</b>/400</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar text-bg-danger" style="width: 75%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Visit Premium Page</span>
                      <span class="float-end"><b>480</b>/800</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar text-bg-success" style="width: 60%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Send Inquiries
                      <span class="float-end"><b>250</b>/500</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar text-bg-warning" style="width: 50%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!--end::Row-->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <!--begin::Row-->
                <div class="row">
                  <div class="col-md-3 col-6">
                    <div class="text-center border-end">
                      <span class="text-success">
                        <i class="bi bi-caret-up-fill"></i> 17%
                      </span>
                      <h5 class="fw-bold mb-0">$35,210.43</h5>
                      <span class="text-uppercase">TOTAL REVENUE</span>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-3 col-6">
                    <div class="text-center border-end">
                      <span class="text-info"> <i class="bi bi-caret-left-fill"></i> 0% </span>
                      <h5 class="fw-bold mb-0">$10,390.90</h5>
                      <span class="text-uppercase">TOTAL COST</span>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-3 col-6">
                    <div class="text-center border-end">
                      <span class="text-success">
                        <i class="bi bi-caret-up-fill"></i> 20%
                      </span>
                      <h5 class="fw-bold mb-0">$24,813.53</h5>
                      <span class="text-uppercase">TOTAL PROFIT</span>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-3 col-6">
                    <div class="text-center">
                      <span class="text-danger">
                        <i class="bi bi-caret-down-fill"></i> 18%
                      </span>
                      <h5 class="fw-bold mb-0">1200</h5>
                      <span class="text-uppercase">GOAL COMPLETIONS</span>
                    </div>
                  </div>
                </div>
                <!--end::Row-->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row">
          <!-- Start col -->
          <div class="col-md-8">
            <!--begin::Row-->
            <div class="row g-4 mb-4">
              <div class="col-md-6">
                <!-- DIRECT CHAT -->
                <div class="card direct-chat direct-chat-warning">
                  <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>
                    <div class="card-tools">
                      <span title="3 New Messages" class="badge text-bg-warning"> 3 </span>
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button type="button" class="btn btn-tool" title="Contacts" data-lte-toggle="chat-pane">
                        <i class="bi bi-chat-text-fill"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                      <!-- Message. Default to the start -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-start"> Alexander Pierce </span>
                          <span class="direct-chat-timestamp float-end"> 23 Jan 2:00 pm </span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="public/assets/img/user1-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Is this template really for free? That's unbelievable!
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->
                      <!-- Message to the end -->
                      <div class="direct-chat-msg end">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-end"> Sarah Bullock </span>
                          <span class="direct-chat-timestamp float-start">
                            23 Jan 2:05 pm
                          </span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="public/assets/img/user3-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">You better believe it!</div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->
                      <!-- Message. Default to the start -->
                      <div class="direct-chat-msg">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-start"> Alexander Pierce </span>
                          <span class="direct-chat-timestamp float-end"> 23 Jan 5:37 pm </span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="public/assets/img/user1-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          Working with AdminLTE on a great new app! Wanna join?
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->
                      <!-- Message to the end -->
                      <div class="direct-chat-msg end">
                        <div class="direct-chat-infos clearfix">
                          <span class="direct-chat-name float-end"> Sarah Bullock </span>
                          <span class="direct-chat-timestamp float-start">
                            23 Jan 6:10 pm
                          </span>
                        </div>
                        <!-- /.direct-chat-infos -->
                        <img class="direct-chat-img" src="public/assets/img/user3-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">I would love to.</div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->
                    </div>
                    <!-- /.direct-chat-messages-->
                    <!-- Contacts are loaded here -->
                    <div class="direct-chat-contacts">
                      <ul class="contacts-list">
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="public/assets/img/user1-128x128.jpg" alt="User Avatar">
                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Count Dracula
                                <small class="contacts-list-date float-end"> 2/28/2023 </small>
                              </span>
                              <span class="contacts-list-msg">
                                How have you been? I was...
                              </span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="public/assets/img/user7-128x128.jpg" alt="User Avatar">
                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Sarah Doe
                                <small class="contacts-list-date float-end"> 2/23/2023 </small>
                              </span>
                              <span class="contacts-list-msg"> I will be waiting for... </span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="public/assets/img/user3-128x128.jpg" alt="User Avatar">
                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Nadia Jolie
                                <small class="contacts-list-date float-end"> 2/20/2023 </small>
                              </span>
                              <span class="contacts-list-msg"> I'll call you back at... </span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="public/assets/img/user5-128x128.jpg" alt="User Avatar">
                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Nora S. Vans
                                <small class="contacts-list-date float-end"> 2/10/2023 </small>
                              </span>
                              <span class="contacts-list-msg"> Where is your new... </span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="public/assets/img/user6-128x128.jpg" alt="User Avatar">
                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                John K.
                                <small class="contacts-list-date float-end"> 1/27/2023 </small>
                              </span>
                              <span class="contacts-list-msg"> Can I take a look at... </span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                        <li>
                          <a href="#">
                            <img class="contacts-list-img" src="public/assets/img/user8-128x128.jpg" alt="User Avatar">
                            <div class="contacts-list-info">
                              <span class="contacts-list-name">
                                Kenneth M.
                                <small class="contacts-list-date float-end"> 1/4/2023 </small>
                              </span>
                              <span class="contacts-list-msg"> Never mind I found... </span>
                            </div>
                            <!-- /.contacts-list-info -->
                          </a>
                        </li>
                        <!-- End Contact Item -->
                      </ul>
                      <!-- /.contacts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <form action="#" method="post">
                      <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <span class="input-group-append">
                          <button type="button" class="btn btn-warning">Send</button>
                        </span>
                      </div>
                    </form>
                  </div>
                  <!-- /.card-footer-->
                </div>
                <!-- /.direct-chat -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>
                    <div class="card-tools">
                      <span class="badge text-bg-danger"> 8 New Members </span>
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <div class="row text-center m-1">
                      <div class="col-3 p-2">
                        <img class="img-fluid rounded-circle" src="public/assets/img/user1-128x128.jpg" alt="User Image">
                        <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                          Alexander Pierce
                        </a>
                        <div class="fs-8">Today</div>
                      </div>
                      <div class="col-3 p-2">
                        <img class="img-fluid rounded-circle" src="public/assets/img/user1-128x128.jpg" alt="User Image">
                        <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                          Norman
                        </a>
                        <div class="fs-8">Yesterday</div>
                      </div>
                      <div class="col-3 p-2">
                        <img class="img-fluid rounded-circle" src="public/assets/img/user7-128x128.jpg" alt="User Image">
                        <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                          Jane
                        </a>
                        <div class="fs-8">12 Jan</div>
                      </div>
                      <div class="col-3 p-2">
                        <img class="img-fluid rounded-circle" src="public/assets/img/user6-128x128.jpg" alt="User Image">
                        <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                          John
                        </a>
                        <div class="fs-8">12 Jan</div>
                      </div>
                      <div class="col-3 p-2">
                        <img class="img-fluid rounded-circle" src="public/assets/img/user2-160x160.jpg" alt="User Image">
                        <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                          Alexander
                        </a>
                        <div class="fs-8">13 Jan</div>
                      </div>
                      <div class="col-3 p-2">
                        <img class="img-fluid rounded-circle" src="public/assets/img/user5-128x128.jpg" alt="User Image">
                        <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                          Sarah
                        </a>
                        <div class="fs-8">14 Jan</div>
                      </div>
                      <div class="col-3 p-2">
                        <img class="img-fluid rounded-circle" src="public/assets/img/user4-128x128.jpg" alt="User Image">
                        <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                          Nora
                        </a>
                        <div class="fs-8">15 Jan</div>
                      </div>
                      <div class="col-3 p-2">
                        <img class="img-fluid rounded-circle" src="public/assets/img/user3-128x128.jpg" alt="User Image">
                        <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0" href="#">
                          Nadia
                        </a>
                        <div class="fs-8">15 Jan</div>
                      </div>
                    </div>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript:" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
            <!--begin::Latest Order Widget-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Latest Orders</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                    <i class="bi bi-x-lg"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Item</th>
                        <th>Status</th>
                        <th>Popularity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a>
                        </td>
                        <td>Call of Duty IV</td>
                        <td><span class="badge text-bg-success"> Shipped </span></td>
                        <td><div id="table-sparkline-1" style="min-height: 30px;"><div id="apexcharts7s9d6897" class="apexcharts-canvas apexcharts7s9d6897 apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1562" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1567" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1603" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1564" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1563"><clipPath id="gridRectMask7s9d6897"><rect id="SvgjsRect1569" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask7s9d6897"></clipPath><clipPath id="nonForecastMask7s9d6897"></clipPath><clipPath id="gridRectMarkerMask7s9d6897"><rect id="SvgjsRect1570" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1568" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1576" class="apexcharts-grid"><g id="SvgjsG1577" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1581" x1="0" y1="6" x2="150" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1582" x1="0" y1="12" x2="150" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1583" x1="0" y1="18" x2="150" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1584" x1="0" y1="24" x2="150" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1578" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1587" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1586" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1579" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1580" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1585" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1571" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1572" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1575" d="M 0 22.5 L 15 10.2 L 30 17.700000000000003 L 45 3.3000000000000007 L 60 11.100000000000001 L 75 22.5 L 90 16.8 L 105 26.4 L 120 19.200000000000003 L 135 27.3 L 150 13.8" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask7s9d6897)" pathTo="M 0 22.5 L 15 10.2 L 30 17.700000000000003 L 45 3.3000000000000007 L 60 11.100000000000001 L 75 22.5 L 90 16.8 L 105 26.4 L 120 19.200000000000003 L 135 27.3 L 150 13.8" pathFrom="M -1 30 L -1 30 L 15 30 L 30 30 L 45 30 L 60 30 L 75 30 L 90 30 L 105 30 L 120 30 L 135 30 L 150 30" fill-rule="evenodd"></path><g id="SvgjsG1573" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1607" r="0" cx="0" cy="0" class="apexcharts-marker wooufruy5 no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1574" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1588" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1589" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1590" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1591" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1604" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1605" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1606" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1565" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR1848</a>
                        </td>
                        <td>Samsung Smart TV</td>
                        <td><span class="badge text-bg-warning">Pending</span></td>
                        <td><div id="table-sparkline-2" style="min-height: 30px;"><div id="apexcharts99th0jay" class="apexcharts-canvas apexcharts99th0jay apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1609" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1614" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1649" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1611" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1610"><clipPath id="gridRectMask99th0jay"><rect id="SvgjsRect1616" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask99th0jay"></clipPath><clipPath id="nonForecastMask99th0jay"></clipPath><clipPath id="gridRectMarkerMask99th0jay"><rect id="SvgjsRect1617" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1615" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1623" class="apexcharts-grid"><g id="SvgjsG1624" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1628" x1="0" y1="7.5" x2="150" y2="7.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1629" x1="0" y1="15" x2="150" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1630" x1="0" y1="22.5" x2="150" y2="22.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1625" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1633" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1632" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1626" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1627" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1631" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1618" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1619" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1622" d="M 0 25.5 L 15 9 L 30 22.125 L 45 15.375 L 60 2.625 L 75 13.125 L 90 6 L 105 10.5 L 120 16.5 L 135 7.875 L 150 13.5" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask99th0jay)" pathTo="M 0 25.5 L 15 9 L 30 22.125 L 45 15.375 L 60 2.625 L 75 13.125 L 90 6 L 105 10.5 L 120 16.5 L 135 7.875 L 150 13.5" pathFrom="M -1 30 L -1 30 L 15 30 L 30 30 L 45 30 L 60 30 L 75 30 L 90 30 L 105 30 L 120 30 L 135 30 L 150 30" fill-rule="evenodd"></path><g id="SvgjsG1620" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1653" r="0" cx="0" cy="0" class="apexcharts-marker wyavecpsq no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1621" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1634" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1635" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1636" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1637" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1650" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1651" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1652" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1612" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                        </td>
                        <td>iPhone 6 Plus</td>
                        <td><span class="badge text-bg-danger"> Delivered </span></td>
                        <td><div id="table-sparkline-3" style="min-height: 30px;"><div id="apexcharts0q77neea" class="apexcharts-canvas apexcharts0q77neea apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1655" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1660" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1697" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1657" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1656"><clipPath id="gridRectMask0q77neea"><rect id="SvgjsRect1662" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask0q77neea"></clipPath><clipPath id="nonForecastMask0q77neea"></clipPath><clipPath id="gridRectMarkerMask0q77neea"><rect id="SvgjsRect1663" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1661" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1669" class="apexcharts-grid"><g id="SvgjsG1670" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1674" x1="0" y1="5" x2="150" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1675" x1="0" y1="10" x2="150" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1676" x1="0" y1="15" x2="150" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1677" x1="0" y1="20" x2="150" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1678" x1="0" y1="25" x2="150" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1671" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1681" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1680" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1672" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1673" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1679" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1664" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1665" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1668" d="M 0 27.5 L 15 12 L 30 24.5 L 45 5.5 L 60 18.5 L 75 27.5 L 90 18 L 105 14 L 120 7 L 135 25.5 L 150 3" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask0q77neea)" pathTo="M 0 27.5 L 15 12 L 30 24.5 L 45 5.5 L 60 18.5 L 75 27.5 L 90 18 L 105 14 L 120 7 L 135 25.5 L 150 3" pathFrom="M -1 35 L -1 35 L 15 35 L 30 35 L 45 35 L 60 35 L 75 35 L 90 35 L 105 35 L 120 35 L 135 35 L 150 35" fill-rule="evenodd"></path><g id="SvgjsG1666" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1701" r="0" cx="0" cy="0" class="apexcharts-marker wk9r48cdv no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1667" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1682" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1683" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1684" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1685" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1698" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1699" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1700" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1658" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                        </td>
                        <td>Samsung Smart TV</td>
                        <td><span class="badge text-bg-info">Processing</span></td>
                        <td><div id="table-sparkline-4" style="min-height: 30px;"><div id="apexchartsxntiz51p" class="apexcharts-canvas apexchartsxntiz51p apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1703" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1708" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1745" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1705" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1704"><clipPath id="gridRectMaskxntiz51p"><rect id="SvgjsRect1710" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskxntiz51p"></clipPath><clipPath id="nonForecastMaskxntiz51p"></clipPath><clipPath id="gridRectMarkerMaskxntiz51p"><rect id="SvgjsRect1711" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1709" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1717" class="apexcharts-grid"><g id="SvgjsG1718" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1722" x1="0" y1="5" x2="150" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1723" x1="0" y1="10" x2="150" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1724" x1="0" y1="15" x2="150" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1725" x1="0" y1="20" x2="150" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1726" x1="0" y1="25" x2="150" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1719" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1729" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1728" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1720" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1721" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1727" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1712" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1713" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1716" d="M 0 25 L 15 12 L 30 24.5 L 45 5.5 L 60 18.5 L 75 22.5 L 90 28 L 105 24 L 120 17 L 135 25.5 L 150 8" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskxntiz51p)" pathTo="M 0 25 L 15 12 L 30 24.5 L 45 5.5 L 60 18.5 L 75 22.5 L 90 28 L 105 24 L 120 17 L 135 25.5 L 150 8" pathFrom="M -1 40 L -1 40 L 15 40 L 30 40 L 45 40 L 60 40 L 75 40 L 90 40 L 105 40 L 120 40 L 135 40 L 150 40" fill-rule="evenodd"></path><g id="SvgjsG1714" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1749" r="0" cx="0" cy="0" class="apexcharts-marker we9fm6x2e no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1715" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1730" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1731" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1732" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1733" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1746" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1747" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1748" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1706" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR1848</a>
                        </td>
                        <td>Samsung Smart TV</td>
                        <td><span class="badge text-bg-warning">Pending</span></td>
                        <td><div id="table-sparkline-5" style="min-height: 30px;"><div id="apexchartsspi52qmh" class="apexcharts-canvas apexchartsspi52qmh apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1751" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1756" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1792" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1753" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1752"><clipPath id="gridRectMaskspi52qmh"><rect id="SvgjsRect1758" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskspi52qmh"></clipPath><clipPath id="nonForecastMaskspi52qmh"></clipPath><clipPath id="gridRectMarkerMaskspi52qmh"><rect id="SvgjsRect1759" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1757" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1765" class="apexcharts-grid"><g id="SvgjsG1766" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1770" x1="0" y1="6" x2="150" y2="6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1771" x1="0" y1="12" x2="150" y2="12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1772" x1="0" y1="18" x2="150" y2="18" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1773" x1="0" y1="24" x2="150" y2="24" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1767" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1776" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1775" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1768" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1769" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1774" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1760" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1761" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1764" d="M 0 24 L 15 7.199999999999999 L 30 14.700000000000001 L 45 6.300000000000001 L 60 14.100000000000001 L 75 19.5 L 90 13.8 L 105 23.4 L 120 19.200000000000003 L 135 15.3 L 150 10.8" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskspi52qmh)" pathTo="M 0 24 L 15 7.199999999999999 L 30 14.700000000000001 L 45 6.300000000000001 L 60 14.100000000000001 L 75 19.5 L 90 13.8 L 105 23.4 L 120 19.200000000000003 L 135 15.3 L 150 10.8" pathFrom="M -1 30 L -1 30 L 15 30 L 30 30 L 45 30 L 60 30 L 75 30 L 90 30 L 105 30 L 120 30 L 135 30 L 150 30" fill-rule="evenodd"></path><g id="SvgjsG1762" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1796" r="0" cx="0" cy="0" class="apexcharts-marker w17rg144e no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1763" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1777" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1778" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1779" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1780" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1793" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1794" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1795" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1754" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                        </td>
                        <td>iPhone 6 Plus</td>
                        <td><span class="badge text-bg-danger"> Delivered </span></td>
                        <td><div id="table-sparkline-6" style="min-height: 30px;"><div id="apexchartsofd67egn" class="apexcharts-canvas apexchartsofd67egn apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1798" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1803" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1838" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1800" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1799"><clipPath id="gridRectMaskofd67egn"><rect id="SvgjsRect1805" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskofd67egn"></clipPath><clipPath id="nonForecastMaskofd67egn"></clipPath><clipPath id="gridRectMarkerMaskofd67egn"><rect id="SvgjsRect1806" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1804" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1812" class="apexcharts-grid"><g id="SvgjsG1813" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1817" x1="0" y1="7.5" x2="150" y2="7.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1818" x1="0" y1="15" x2="150" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1819" x1="0" y1="22.5" x2="150" y2="22.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1814" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1822" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1821" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1815" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1816" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1820" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1807" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1808" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1811" d="M 0 28.125 L 15 16.5 L 30 25.875 L 45 4.125 L 60 21.375 L 75 24.375 L 90 24.75 L 105 14.25 L 120 20.25 L 135 22.875 L 150 13.5" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskofd67egn)" pathTo="M 0 28.125 L 15 16.5 L 30 25.875 L 45 4.125 L 60 21.375 L 75 24.375 L 90 24.75 L 105 14.25 L 120 20.25 L 135 22.875 L 150 13.5" pathFrom="M -1 30 L -1 30 L 15 30 L 30 30 L 45 30 L 60 30 L 75 30 L 90 30 L 105 30 L 120 30 L 135 30 L 150 30" fill-rule="evenodd"></path><g id="SvgjsG1809" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1842" r="0" cx="0" cy="0" class="apexcharts-marker we667kcnu no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1810" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1823" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1824" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1825" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1826" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1839" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1840" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1841" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1801" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a>
                        </td>
                        <td>Call of Duty IV</td>
                        <td><span class="badge text-bg-success">Shipped</span></td>
                        <td><div id="table-sparkline-7" style="min-height: 30px;"><div id="apexchartswkvhwiml" class="apexcharts-canvas apexchartswkvhwiml apexcharts-theme-light" style="width: 150px; height: 30px;"><svg id="SvgjsSvg1844" width="150" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><rect id="SvgjsRect1849" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1884" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1846" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1845"><clipPath id="gridRectMaskwkvhwiml"><rect id="SvgjsRect1851" width="156" height="32" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskwkvhwiml"></clipPath><clipPath id="nonForecastMaskwkvhwiml"></clipPath><clipPath id="gridRectMarkerMaskwkvhwiml"><rect id="SvgjsRect1852" width="154" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1850" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1858" class="apexcharts-grid"><g id="SvgjsG1859" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1863" x1="0" y1="7.5" x2="150" y2="7.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1864" x1="0" y1="15" x2="150" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1865" x1="0" y1="22.5" x2="150" y2="22.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1860" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1868" x1="0" y1="30" x2="150" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1867" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1861" class="apexcharts-grid-borders" style="display: none;"><line id="SvgjsLine1862" x1="0" y1="0" x2="150" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1866" x1="0" y1="30" x2="150" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1853" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1854" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1857" d="M 0 25.5 L 15 9 L 30 22.125 L 45 15.375 L 60 2.625 L 75 13.125 L 90 6 L 105 10.5 L 120 16.5 L 135 7.875 L 150 2.25" fill="none" fill-opacity="1" stroke="var(--bs-primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskwkvhwiml)" pathTo="M 0 25.5 L 15 9 L 30 22.125 L 45 15.375 L 60 2.625 L 75 13.125 L 90 6 L 105 10.5 L 120 16.5 L 135 7.875 L 150 2.25" pathFrom="M -1 30 L -1 30 L 15 30 L 30 30 L 45 30 L 60 30 L 75 30 L 90 30 L 105 30 L 120 30 L 135 30 L 150 30" fill-rule="evenodd"></path><g id="SvgjsG1855" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1888" r="0" cx="0" cy="0" class="apexcharts-marker wm1pl8tot no-pointer-events" stroke="#ffffff" fill="var(--bs-primary)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1856" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1869" x1="0" y1="0" x2="150" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1870" x1="0" y1="0" x2="150" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1871" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1872" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1885" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1886" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1887" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1847" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 15px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: var(--bs-primary);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-primary float-start">
                  Place New Order
                </a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-end">
                  View All Orders
                </a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 text-bg-warning">
              <span class="info-box-icon"> <i class="bi bi-tag-fill"></i> </span>
              <div class="info-box-content">
                <span class="info-box-text">Inventory</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 text-bg-success">
              <span class="info-box-icon"> <i class="bi bi-heart-fill"></i> </span>
              <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 text-bg-danger">
              <span class="info-box-icon"> <i class="bi bi-cloud-download"></i> </span>
              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 text-bg-info">
              <span class="info-box-icon"> <i class="bi bi-chat-fill"></i> </span>
              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="card mb-4">
              <div class="card-header">
                <h3 class="card-title">Browser Usage</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                    <i class="bi bi-x-lg"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!--begin::Row-->
                <div class="row">
                  <div class="col-12"><div id="pie-chart" style="min-height: 170.7px;"><div id="apexchartsgcmc8nosk" class="apexcharts-canvas apexchartsgcmc8nosk apexcharts-theme-light" style="width: 303px; height: 170.7px;"><svg id="SvgjsSvg1913" width="303" height="170.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1915" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)"><defs id="SvgjsDefs1914"><clipPath id="gridRectMaskgcmc8nosk"><rect id="SvgjsRect1917" width="174" height="192" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskgcmc8nosk"></clipPath><clipPath id="nonForecastMaskgcmc8nosk"></clipPath><clipPath id="gridRectMarkerMaskgcmc8nosk"><rect id="SvgjsRect1918" width="172" height="194" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1919" class="apexcharts-pie"><g id="SvgjsG1920" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1921" r="49.36829268292683" cx="84" cy="84" fill="transparent"></circle><g id="SvgjsG1922" class="apexcharts-slices"><g id="SvgjsG1923" class="apexcharts-series apexcharts-pie-series" seriesName="Chrome" rel="1" data:realIndex="0"><path id="SvgjsPath1924" d="M 84 8.048780487804876 A 75.95121951219512 75.95121951219512 0 0 1 159.39744960832536 93.15490786134332 L 133.00834224541148 89.95069010987315 A 49.36829268292683 49.36829268292683 0 0 0 84 34.63170731707317 L 84 8.048780487804876 z" fill="rgba(13,110,253,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="96.92307692307692" data:startAngle="0" data:strokeWidth="2" data:value="700" data:pathOrig="M 84 8.048780487804876 A 75.95121951219512 75.95121951219512 0 0 1 159.39744960832536 93.15490786134332 L 133.00834224541148 89.95069010987315 A 49.36829268292683 49.36829268292683 0 0 0 84 34.63170731707317 L 84 8.048780487804876 z" stroke="#ffffff"></path></g><g id="SvgjsG1925" class="apexcharts-series apexcharts-pie-series" seriesName="Edge" rel="2" data:realIndex="1"><path id="SvgjsPath1926" d="M 159.39744960832536 93.15490786134332 A 75.95121951219512 75.95121951219512 0 0 1 102.17631655101113 157.74421510889573 L 95.81460575815724 131.93373982078225 A 49.36829268292683 49.36829268292683 0 0 0 133.00834224541148 89.95069010987315 L 159.39744960832536 93.15490786134332 z" fill="rgba(32,201,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="69.23076923076921" data:startAngle="96.92307692307692" data:strokeWidth="2" data:value="500" data:pathOrig="M 159.39744960832536 93.15490786134332 A 75.95121951219512 75.95121951219512 0 0 1 102.17631655101113 157.74421510889573 L 95.81460575815724 131.93373982078225 A 49.36829268292683 49.36829268292683 0 0 0 133.00834224541148 89.95069010987315 L 159.39744960832536 93.15490786134332 z" stroke="#ffffff"></path></g><g id="SvgjsG1927" class="apexcharts-series apexcharts-pie-series" seriesName="FireFox" rel="3" data:realIndex="2"><path id="SvgjsPath1928" d="M 102.17631655101113 157.74421510889573 A 75.95121951219512 75.95121951219512 0 0 1 33.63502542044306 140.85030414158075 L 51.26276652328799 120.95269769202747 A 49.36829268292683 49.36829268292683 0 0 0 95.81460575815724 131.93373982078225 L 102.17631655101113 157.74421510889573 z" fill="rgba(255,193,7,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="55.38461538461539" data:startAngle="166.15384615384613" data:strokeWidth="2" data:value="400" data:pathOrig="M 102.17631655101113 157.74421510889573 A 75.95121951219512 75.95121951219512 0 0 1 33.63502542044306 140.85030414158075 L 51.26276652328799 120.95269769202747 A 49.36829268292683 49.36829268292683 0 0 0 95.81460575815724 131.93373982078225 L 102.17631655101113 157.74421510889573 z" stroke="#ffffff"></path></g><g id="SvgjsG1929" class="apexcharts-series apexcharts-pie-series" seriesName="Safari" rel="4" data:realIndex="3"><path id="SvgjsPath1930" d="M 33.63502542044306 140.85030414158075 A 75.95121951219512 75.95121951219512 0 0 1 21.49337174651592 40.8547897238825 L 43.370691635235346 55.955613320523625 A 49.36829268292683 49.36829268292683 0 0 0 51.26276652328799 120.95269769202747 L 33.63502542044306 140.85030414158075 z" fill="rgba(214,51,132,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="83.07692307692307" data:startAngle="221.53846153846152" data:strokeWidth="2" data:value="600" data:pathOrig="M 33.63502542044306 140.85030414158075 A 75.95121951219512 75.95121951219512 0 0 1 21.49337174651592 40.8547897238825 L 43.370691635235346 55.955613320523625 A 49.36829268292683 49.36829268292683 0 0 0 51.26276652328799 120.95269769202747 L 33.63502542044306 140.85030414158075 z" stroke="#ffffff"></path></g><g id="SvgjsG1931" class="apexcharts-series apexcharts-pie-series" seriesName="Opera" rel="5" data:realIndex="4"><path id="SvgjsPath1932" d="M 21.49337174651592 40.8547897238825 A 75.95121951219512 75.95121951219512 0 0 1 65.82368344898885 10.255784891104256 L 72.18539424184274 36.06626017921777 A 49.36829268292683 49.36829268292683 0 0 0 43.370691635235346 55.955613320523625 L 21.49337174651592 40.8547897238825 z" fill="rgba(111,66,193,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-4" index="0" j="4" data:angle="41.53846153846155" data:startAngle="304.6153846153846" data:strokeWidth="2" data:value="300" data:pathOrig="M 21.49337174651592 40.8547897238825 A 75.95121951219512 75.95121951219512 0 0 1 65.82368344898885 10.255784891104256 L 72.18539424184274 36.06626017921777 A 49.36829268292683 49.36829268292683 0 0 0 43.370691635235346 55.955613320523625 L 21.49337174651592 40.8547897238825 z" stroke="#ffffff"></path></g><g id="SvgjsG1933" class="apexcharts-series apexcharts-pie-series" seriesName="IE" rel="6" data:realIndex="5"><path id="SvgjsPath1934" d="M 65.82368344898885 10.255784891104256 A 75.95121951219512 75.95121951219512 0 0 1 83.98674401155336 8.048781644608098 L 83.99138360750969 34.631708068995266 A 49.36829268292683 49.36829268292683 0 0 0 72.18539424184274 36.06626017921777 L 65.82368344898885 10.255784891104256 z" fill="rgba(173,181,189,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-5" index="0" j="5" data:angle="13.846153846153868" data:startAngle="346.15384615384613" data:strokeWidth="2" data:value="100" data:pathOrig="M 65.82368344898885 10.255784891104256 A 75.95121951219512 75.95121951219512 0 0 1 83.98674401155336 8.048781644608098 L 83.99138360750969 34.631708068995266 A 49.36829268292683 49.36829268292683 0 0 0 72.18539424184274 36.06626017921777 L 65.82368344898885 10.255784891104256 z" stroke="#ffffff"></path></g></g></g></g><line id="SvgjsLine1935" x1="0" y1="0" x2="168" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1936" x1="0" y1="0" x2="168" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1916" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend apexcharts-align-center apx-legend-position-right" style="position: absolute; left: auto; top: 24px; right: 5px;"><div class="apexcharts-legend-series" rel="1" seriesname="Chrome" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(13, 110, 253) !important; color: rgb(13, 110, 253); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Chrome" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Chrome</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Edge" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(32, 201, 151) !important; color: rgb(32, 201, 151); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Edge" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Edge</span></div><div class="apexcharts-legend-series" rel="3" seriesname="FireFox" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 193, 7) !important; color: rgb(255, 193, 7); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="FireFox" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">FireFox</span></div><div class="apexcharts-legend-series" rel="4" seriesname="Safari" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="4" data:collapsed="false" style="background: rgb(214, 51, 132) !important; color: rgb(214, 51, 132); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="4" i="3" data:default-text="Safari" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Safari</span></div><div class="apexcharts-legend-series" rel="5" seriesname="Opera" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="5" data:collapsed="false" style="background: rgb(111, 66, 193) !important; color: rgb(111, 66, 193); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="5" i="4" data:default-text="Opera" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Opera</span></div><div class="apexcharts-legend-series" rel="6" seriesname="IE" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="6" data:collapsed="false" style="background: rgb(173, 181, 189) !important; color: rgb(173, 181, 189); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="6" i="5" data:default-text="IE" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">IE</span></div></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(13, 110, 253);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(32, 201, 151);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 193, 7);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(214, 51, 132);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 5;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(111, 66, 193);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 6;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(173, 181, 189);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div></div>
                  <!-- /.col -->
                </div>
                <!--end::Row-->
              </div>
              <!-- /.card-body -->
              <div class="card-footer p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      United States of America
                      <span class="float-end text-danger">
                        <i class="bi bi-arrow-down fs-7"></i>
                        12%
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      India
                      <span class="float-end text-success">
                        <i class="bi bi-arrow-up fs-7"></i> 4%
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      China
                      <span class="float-end text-info">
                        <i class="bi bi-arrow-left fs-7"></i> 0%
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.footer -->
            </div>
            <!-- /.card -->
            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Added Products</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                    <i class="bi bi-x-lg"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="px-2">
                  <div class="d-flex border-top py-2 px-1">
                    <div class="col-2">
                      <img src="public/assets/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="col-10">
                      <a href="javascript:void(0)" class="fw-bold">
                        Samsung TV
                        <span class="badge text-bg-warning float-end"> $1800 </span>
                      </a>
                      <div class="text-truncate">Samsung 32" 1080p 60Hz LED Smart HDTV.</div>
                    </div>
                  </div>
                  <!-- /.item -->
                  <div class="d-flex border-top py-2 px-1">
                    <div class="col-2">
                      <img src="public/assets/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="col-10">
                      <a href="javascript:void(0)" class="fw-bold">
                        Bicycle
                        <span class="badge text-bg-info float-end"> $700 </span>
                      </a>
                      <div class="text-truncate">
                        26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                      </div>
                    </div>
                  </div>
                  <!-- /.item -->
                  <div class="d-flex border-top py-2 px-1">
                    <div class="col-2">
                      <img src="public/assets/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="col-10">
                      <a href="javascript:void(0)" class="fw-bold">
                        Xbox One
                        <span class="badge text-bg-danger float-end"> $350 </span>
                      </a>
                      <div class="text-truncate">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </div>
                    </div>
                  </div>
                  <!-- /.item -->
                  <div class="d-flex border-top py-2 px-1">
                    <div class="col-2">
                      <img src="public/assets/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="col-10">
                      <a href="javascript:void(0)" class="fw-bold">
                        PlayStation 4
                        <span class="badge text-bg-success float-end"> $399 </span>
                      </a>
                      <div class="text-truncate">PlayStation 4 500GB Console (PS4)</div>
                    </div>
                  </div>
                  <!-- /.item -->
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase"> View All Products </a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content-->
  </main>
@endsection