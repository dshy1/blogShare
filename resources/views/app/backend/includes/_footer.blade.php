
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
    <div class="br-mainpanel">
      <footer class="br-footer">
        <div class="footer-left">
          <div class="cinza-rodape"><p>2020 &copy;Made with <i class="small material-icons pink cinza-rodape">favorite</i> and <i class="small material-icons">free_breakfast</i> by Jana.</p></div>
        </div>
      </footer>
    </div>
    <!-- br-mainpanel -->


    <!-- Script JS -->
    
    <script src="{{ asset($caminho.'template-dark/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/assets/libs/slick-slider/slick/slick.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/assets/libs/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/assets/libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/assets/js/app.js') }}"></script>

    {{-- <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
    <script src="{{ asset($caminho.'js/select2.min.js') }}"></script>


    {{-- CKeditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

    @yield('scripts')

  </body>

</html>
