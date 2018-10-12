        <footer>
            <div class="container-fluid navbar-footer">
                <h2>&COPY; PETS WORLD -- Todos Los Derechos Reservados</h2>
            </div>

        </footer>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
              var elems = document.querySelectorAll('.carousel');
              var instances = M.Carousel.init(elems, options);
            });

            // Or with jQuery

            $(document).ready(function(){
              $('.carousel').carousel();
            });
        </script>
        <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/js/materialize.min.js"></script>
        <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    </body>
</html>
