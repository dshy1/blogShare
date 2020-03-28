    <style type="text/css">
      
      .small {
        font-size: 16px;
        color: #ff31ef;
      }
      .cinza-rodape p {
        font-size: 13px;
      }

    </style>

    <!-- ########## START: FOOTER ########## -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    2020 © jana.Blog
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Created with <i class="mdi mdi-heart text-danger"></i> by Jana
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Script JS -->
    <script src="{{ asset($path.'template-dark/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset($path.'template-dark/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset($path.'template-dark/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset($path.'template-dark/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset($path.'template-dark/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset($path.'template-dark/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset($path.'template-dark/assets/libs/slick-slider/slick/slick.min.js') }}"></script>
    <script src="{{ asset($path.'template-dark/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset($path.'template-dark/assets/js/app.js') }}"></script>
    <script src="{{ asset($path.'template-dark/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset($path.'js/select2.min.js') }}"></script>
    
    {{-- CKeditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

    @yield('scripts')

  </body>
</html>
