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
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Ajouter un locataire</h4>
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
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-sm-3"></div>
            <div class="col-sm-6">
              <div class="card shadow rounded rounded-3">
                  <div class="card-body">
                      <form class="form-horizontal form-material">
                          <div class="form-group mb-4">
                              <label class="col-md-12 p-0">Nom et Prénoms</label>
                              <div class="col-md-12 border-bottom p-0">
                                  <input type="text" placeholder="Koffi jean"
                                      class="form-control p-0 border-0" name="name"> </div>
                          </div>
                          <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">N° de téléphone</label>
                              <div class="col-md-12 border-bottom p-0">
                                  <input type="tel" placeholder="05 05 0478562"
                                      class="form-control p-0 border-0" name="phone"
                                      id="phone">
                              </div>
                          </div>
                          <div class="form-group mb-4">
                              <label for="example-email" class="col-md-12 p-0">Date de la location</label>
                              <div class="col-md-12 border-bottom p-0">
                                  <input type="datetime" placeholder="25/03/2022"
                                      class="form-control p-0 border-0" name="date"
                                      id="date">
                              </div>
                          </div>
                          <div class="form-group mb-4">
                              <label class="col-sm-12">Type d'appartement</label>

                              <div class="col-sm-12 border-bottom">
                                  <select class="form-select shadow-none p-0 border-0 form-control-line">
                                      <option>Studio</option>
                                      <option>2 pièces</option>
                                      <option>3 pièces</option>
                                  </select>
                              </div>
                          </div>



                          <div class="form-group mb-4">
                              <div class="col-sm-12">
                                  <button type="submit" class="btn btn-success text-uppercase px-md-5">Ajouter</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->

</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

@endsection
