
<style type="text/css">
  
  .small {
    font-size: 16px;
    color: #ff31ef;
  }

</style>

<!-- ########## START: FOOTER ########## -->
    <div class="br-mainpanel">
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2020. All Rights Reserved.</div>
          <div>Made with <i class="small material-icons pink">favorite</i> by Jana.</div>
        </div>
      </footer>

    </div><!-- br-mainpanel -->
<!-- ########## END: FOOTER ########## -->


    <script src="{{ asset($caminho.'template-dark/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/rickshaw/vendor/d3.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/rickshaw/vendor/d3.layout.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/lib/summernote/summernote-bs4.min.js') }}"></script>

    <script src="{{ asset($caminho.'template-dark/js/bkt.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/js/map.shiftworker.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset($caminho.'template-dark/js/dashboard.dark.js') }}"></script>
    {{-- CKeditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

    @yield('scripts')

  </body>

</html>
