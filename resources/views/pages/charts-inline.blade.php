@section('active-charts-inline','active')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Inline Charts</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('dashboard')}}/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dashboard')}}/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <!-- Bootstrap 4 RTL -->
      <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
      <!-- Custom style for RTL -->
      <link rel="stylesheet" href="{{asset('dashboard')}}/assets/dist/css/custom.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{asset('dashboard')}}/assets/index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dashboard')}}/assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dashboard')}}/assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dashboard')}}/assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('dashboard.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inline Charts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inline Charts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  jQuery Knob
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                      class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc">

                    <div class="knob-label">New Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954">

                    <div class="knob-label">Bounce Rate</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="-80" data-min="-150" data-max="150" data-width="90"
                           data-height="90" data-fgColor="#00a65a">

                    <div class="knob-label">Server Load</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                    <div class="knob-label">Disk Space</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-6 text-center">
                    <input type="text" class="knob" value="90" data-width="90" data-height="90" data-fgColor="#932ab6">

                    <div class="knob-label">Bandwidth</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <input type="text" class="knob" value="50" data-width="90" data-height="90" data-fgColor="#39CCCC">

                    <div class="knob-label">CPU</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  jQuery Knob Different Sizes
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                      class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc"
                           data-readonly="true">

                    <div class="knob-label">data-width="90"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="30" data-width="120" data-height="120"
                           data-fgColor="#f56954">

                    <div class="knob-label">data-width="120"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="30" data-thickness="0.1" data-width="90" data-height="90"
                           data-fgColor="#00a65a">

                    <div class="knob-label">data-thickness="0.1"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                           value="30" data-width="120" data-height="120" data-fgColor="#00c0ef">

                    <div class="knob-label">data-angleArc="250"</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  jQuery Knob Tron Style
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                      class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90"
                           data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                    <div class="knob-label">data-width="90"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120"
                           data-height="120" data-fgColor="#f56954">

                    <div class="knob-label">data-width="120"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="10" data-skin="tron" data-thickness="0.1" data-width="90"
                           data-height="90" data-fgColor="#00a65a">

                    <div class="knob-label">data-thickness="0.1"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2"
                           data-angleArc="250" data-angleOffset="-125" data-width="120" data-height="120"
                           data-fgColor="#00c0ef">

                    <div class="knob-label">data-angleArc="250"</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('dashboard')}}/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard')}}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('dashboard')}}/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dashboard')}}/assets/dist/js/demo.js"></script>
<!-- jQuery Knob -->
<script src="{{asset('dashboard')}}/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('dashboard')}}/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    $('.sparkline').each(function () {
      var $this = $(this)
      $this.sparkline('html', $this.data())
    })

    /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
    drawDocSparklines()
    drawMouseSpeedDemo()

  })

  function drawDocSparklines() {

    // Bar + line composite charts
    $('#compositebar').sparkline('html', {
      type    : 'bar',
      barColor: '#aaf'
    })
    $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
      {
        composite: true,
        fillColor: false,
        lineColor: 'red'
      })


    // Line charts taking their values from the tag
    $('.sparkline-1').sparkline()

    // Larger line charts for the docs
    $('.largeline').sparkline('html',
      {
        type  : 'line',
        height: '2.5em',
        width : '4em'
      })

    // Customized line chart
    $('#linecustom').sparkline('html',
      {
        height      : '1.5em',
        width       : '8em',
        lineColor   : '#f00',
        fillColor   : '#ffa',
        minSpotColor: false,
        maxSpotColor: false,
        spotColor   : '#77f',
        spotRadius  : 3
      })

    // Bar charts using inline values
    $('.sparkbar').sparkline('html', { type: 'bar' })

    $('.barformat').sparkline([1, 3, 5, 3, 8], {
      type               : 'bar',
      tooltipValueLookups: {
        levels: $.range_map({
          ':2' : 'Low',
          '3:6': 'Medium',
          '7:' : 'High'
        })
      }
    })

    // Tri-state charts using inline values
    $('.sparktristate').sparkline('html', { type: 'tristate' })
    $('.sparktristatecols').sparkline('html',
      {
        type    : 'tristate',
        colorMap: {
          '-2': '#fa7',
          '2' : '#44f'
        }
      })

    // Composite line charts, the second using values supplied via javascript
    $('#compositeline').sparkline('html', {
      fillColor     : false,
      changeRangeMin: 0,
      chartRangeMax : 10
    })
    $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
      {
        composite     : true,
        fillColor     : false,
        lineColor     : 'red',
        changeRangeMin: 0,
        chartRangeMax : 10
      })

    // Line charts with normal range marker
    $('#normalline').sparkline('html',
      {
        fillColor     : false,
        normalRangeMin: -1,
        normalRangeMax: 8
      })
    $('#normalExample').sparkline('html',
      {
        fillColor       : false,
        normalRangeMin  : 80,
        normalRangeMax  : 95,
        normalRangeColor: '#4f4'
      })

    // Discrete charts
    $('.discrete1').sparkline('html',
      {
        type     : 'discrete',
        lineColor: 'blue',
        xwidth   : 18
      })
    $('#discrete2').sparkline('html',
      {
        type          : 'discrete',
        lineColor     : 'blue',
        thresholdColor: 'red',
        thresholdValue: 4
      })

    // Bullet charts
    $('.sparkbullet').sparkline('html', { type: 'bullet' })

    // Pie charts
    $('.sparkpie').sparkline('html', {
      type  : 'pie',
      height: '1.0em'
    })

    // Box plots
    $('.sparkboxplot').sparkline('html', { type: 'box' })
    $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
      {
        type        : 'box',
        raw         : true,
        showOutliers: true,
        target      : 6
      })

    // Box plot with specific field order
    $('.boxfieldorder').sparkline('html', {
      type                     : 'box',
      tooltipFormatFieldlist   : ['med', 'lq', 'uq'],
      tooltipFormatFieldlistKey: 'field'
    })

    // click event demo sparkline
    $('.clickdemo').sparkline()
    $('.clickdemo').bind('sparklineClick', function (ev) {
      var sparkline = ev.sparklines[0],
          region    = sparkline.getCurrentRegionFields()
      value         = region.y
      alert('Clicked on x=' + region.x + ' y=' + region.y)
    })

    // mouseover event demo sparkline
    $('.mouseoverdemo').sparkline()
    $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
      var sparkline = ev.sparklines[0],
          region    = sparkline.getCurrentRegionFields()
      value         = region.y
      $('.mouseoverregion').text('x=' + region.x + ' y=' + region.y)
    }).bind('mouseleave', function () {
      $('.mouseoverregion').text('')
    })
  }

  /**
   ** Draw the little mouse speed animated graph
   ** This just attaches a handler to the mousemove event to see
   ** (roughly) how far the mouse has moved
   ** and then updates the display a couple of times a second via
   ** setTimeout()
   **/
  function drawMouseSpeedDemo() {
    var mrefreshinterval = 500 // update display every 500ms
    var lastmousex       = -1
    var lastmousey       = -1
    var lastmousetime
    var mousetravel      = 0
    var mpoints          = []
    var mpoints_max      = 30
    $('html').mousemove(function (e) {
      var mousex = e.pageX
      var mousey = e.pageY
      if (lastmousex > -1) {
        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey))
      }
      lastmousex = mousex
      lastmousey = mousey
    })
    var mdraw = function () {
      var md      = new Date()
      var timenow = md.getTime()
      if (lastmousetime && lastmousetime != timenow) {
        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000)
        mpoints.push(pps)
        if (mpoints.length > mpoints_max) {
          mpoints.splice(0, 1)
        }
        mousetravel = 0
        $('#mousespeed').sparkline(mpoints, {
          width        : mpoints.length * 2,
          tooltipSuffix: ' pixels per second'
        })
      }
      lastmousetime = timenow
      setTimeout(mdraw, mrefreshinterval)
    }
    // We could use setInterval instead, but I prefer to do it this way
    setTimeout(mdraw, mrefreshinterval);
  }
</script>
</body>
</html>
