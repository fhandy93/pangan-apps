<x-HomeLayout>
     <!--app-content open-->
     <div class="main-content app-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Dashboard</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                 <x-notify />
                    
                   
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12" style="text-align: center;">
                    <div >{{ __('Welcome '). Auth::user()->name }}</div>
                    <div class="card-body">
                     
                        {{ __('You are logged in!') }}<p>
                             <img style="align-items: center;" src="{{ asset('vendor/images/media/Balla_pokja.png') }}">
                    </div>
                </div>
            </div>
          
    </div>
    <!--app-content closed-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">                
            </div>
        </div>
    </div>
<!-- JQUERY JS -->
<script src="{{ asset('vendor/js/jquery.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('vendor/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- SPARKLINE JS-->
<script src="{{ asset('vendor/js/jquery.sparkline.min.js') }}"></script>

<!-- Sticky js -->
<script src="{{ asset('vendor/js/sticky.js') }}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('vendor/js/circle-progress.min.js') }}"></script>

<!-- PIETY CHART JS-->
<script src="{{ asset('vendor/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/peitychart/peitychart.init.js') }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ asset('vendor/plugins/sidebar/sidebar.js') }}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('vendor/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('vendor/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="{{ asset('vendor/plugins/chart/chart.bundle.js') }}"></script>
<script src="{{ asset('vendor/plugins/chart/rounded-barchart.js') }}"></script>
<script src="{{ asset('vendor/plugins/chart/utils.js') }}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('vendor/plugins/select2/select2.full.min.js') }}"></script>

<!-- INTERNAL Data tables js-->
<script src="{{ asset('vendor/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatable/dataTables.responsive.min.js') }}"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="{{ asset('vendor/js/apexcharts.js') }}"></script>
<script src="{{ asset('vendor/plugins/apexchart/irregular-data-series.js') }}"></script>

<!-- C3 CHART JS -->
<script src="{{ asset('vendor/plugins/charts-c3/d3.v5.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/charts-c3/c3-chart.js') }}"></script>

<!-- CHART-DONUT JS -->
<script src="{{ asset('vendor/js/charts.js') }}"></script>

<!-- CHARTJS JS -->
<script src="{{ asset('vendor/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ asset('vendor/js/chart.js') }}"></script>

<!-- INTERNAL Flot JS -->
<script src="{{ asset('vendor/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('vendor/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('vendor/plugins/flot/chart.flot.sampledata.js') }}"></script>
<script src="{{ asset('vendor/plugins/flot/dashboard.sampledata.js') }}"></script> 

<!-- INTERNAL Vector js -->
<script src="{{ asset('vendor/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- SIDE-MENU JS-->
<script src="{{ asset('vendor/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- INTERNAL INDEX JS -->
<script src="{{ asset('vendor/js/index1.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ asset('vendor/js/themeColors.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('vendor/js/custom.js') }}"></script>
</x-HomeLayout>
