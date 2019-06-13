
  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  {{-- jquery calendar picker --}}
  {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
  <script src="{!! URL::asset('/js/jquery/calendar/jquery-1.12.4.js') !!}"></script>
  <script src="{!! URL::asset('/js/jquery/calendar/jquery-ui.js') !!}"></script>

  <script>
    $( function() {
      $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true
      });
    } );
    </script>
</body>

</html>
