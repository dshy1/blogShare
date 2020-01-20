

    <div class="preloader">
        <img src="{{ asset($caminho.'template-front/images/preloader.html') }}"  alt="" />
    </div>

    <script type="text/javascript" src="{{ asset($caminho.'template-front/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($caminho.'template-front/js/jquery.migrate.js') }}"></script>
    <script type="text/javascript" src="{{ asset($caminho.'template-front/js/jquery.imagesloaded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($caminho.'template-front/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($caminho.'template-front/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($caminho.'template-front/js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset($caminho.'template-front/js/retina-1.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($caminho.'template-front/js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($caminho.'template-front/js/script.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function(){
            
            $("#ascrail2000").children().css({"background": "rgba(16, 137, 222, 0.5)"});
        });

    </script>
    
    @yield('scripts')
    
  </body>

</html>
