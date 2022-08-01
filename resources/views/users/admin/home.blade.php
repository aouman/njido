@extends('layouts.adminApp')

@section('content')
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
@include('includes.adminSidebar')
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Tableau de bord</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->
        <div class="row justify-content-center">
          <a class="col-lg-4 col-md-12" href="#">
            <div class="shadow text-center font-bold text-uppercase" >
                <div class="white-box analytics-info">
                    <h1><i class="fas fa-city"></i></h1>
                    <h3 class="box-title">Mes appartements</h3>
                </div>
            </div>
          </a>

          <a class="col-lg-4 col-md-12" href="admin/meslocataires">
            <div class="shadow text-center font-bold text-uppercase" >
                <div class="white-box analytics-info">
                    <h1><i class="fas fa-users"></i></h1>
                    <h3 class="box-title">Mes locataires</h3>
                </div>
            </div>
          </a>
          <a class="col-lg-4 col-md-12" href="#">
            <div class="shadow text-center font-bold text-uppercase" >
                <div class="white-box analytics-info">
                  <h1><i class="fas fa-coins"></i></h1>
                    <h3 class="box-title">Les payements</h3>
                </div>
            </div>
          </a>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

@endsection
