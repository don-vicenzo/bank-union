

        <!-- footer -->
        <footer class="bg-color1 text-white text-center mt-4 py-3">
            <h5 class="mb-0">Find us on social</h5>
            <div class="social py-1">
              <!-- <img src="images/social_icons.png" class="img img-fluid" alt=""> -->
                  <a href="https://www.facebook.com" target="_blank" class="pr-3">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                  <a href="https://www.linkedin.com" target="_blank" class="pr-3">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                  <a href="https://www.instagram.com" target="_blank">
                    <i class="fab fa-instagram"></i>
                  </a>
              </div><!-- /.social -->
            <!-- copyright -->
            <p>© Copyright <?= date('Y'); ?> World Union Bank. All Rights Reserved |
                Made by Singularity</p>
            <div>

            </div>
        </footer>
        <!-- /.footer -->


    </div><!-- /.wrapper -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script>
    

      $(document).ready(function() {

        // Function for active link in navbar
        function navActive() {
            var navBar = document.getElementById('navActive');
            var url2 = navBar.getElementsByTagName('a');

            for ( var hrefActive of url2 ) {
              if( window.location.href.includes(hrefActive.href)) {
                $(hrefActive).addClass('active')
              }else {
                $(hrefActive).removeClass('active');
              }
            }
        }
        navActive();


        // Sort table button
        var $sortable = $('.sortable');
        $sortable.on('click', function(){
          var $this = $(this);
          var asc = $this.hasClass('asc');
          var desc = $this.hasClass('desc');
          $sortable.removeClass('asc').removeClass('desc');
          if (desc || (!asc && !desc)) {
            $this.addClass('asc');
          } else {
            $this.addClass('desc');
          }
        });


        // On click sort table - AJAX/PHP
        $(document).on('click', '.sortBtn', function(event){
            var self = $(event.target);
            var varVal = self.val();
            var file = self.data('file');

            // nameVal = $('input[name ="sortV"]');
            var url = "ajax.php?sortV=" + varVal + '&file=' + file;

            $.get( url, function(data) {
              self.closest('table').html(data);
            });


            // testni ispis parametra za sortiranje u konzoli, izbrisati nakon testiranja!
            // console.log(varVal);

        });

         //Search in table function
         $("#mySearch").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#dtBasicExample tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });

          $("#mySearch2").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#dtBasicExample tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });


      });

      


    </script>
