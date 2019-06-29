<footer class="py-5  ">
        <div class="container footer">
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
    @if(Request::is('userDetail'))
      <script>
        $( function() {
          $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '-50:+0',
          }).attr([
              'autocomplete','off'
          ]);
        } );
        </script>
    @endif
    @if(Request::is('userBusinessDetail'))
    <script>

    $(".monthPicker").datepicker({
            dateFormat: 'MM yy',
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            yearRange: '-50:+0',

            onClose: function(dateText, inst) {
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).val($.datepicker.formatDate('MM yy', new Date(year, month, 1)));
            }
        });

        $(".monthPicker").focus(function () {
            $(".ui-datepicker-calendar").hide();
            $("#ui-datepicker-div").position({
                my: "center top",
                at: "center bottom",
                of: $(this)
            });
        });

    </script>
    @endif
</div>
    </body>

    </html>


