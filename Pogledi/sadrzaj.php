<!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
            <?php Sesija::init(); ?>
                    <?php if (Sesija::vrati('ulogovan') == false):?>
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Login forma</h4>
                    <div class="input-group">
                    <form action="index/login" method="post">
                        <input type="text" name="ime" class="form-control">
                        <input type="password" name="lozinka" class="form-control">
                        <input type="submit" class="btn-primary" value="Login">                        
                        </span>
                    </form>
                    </div>
                    <!-- /.input-group -->
                </div>
                 <?php endif; ?>   
               
                


            </div>

        </div>
        <!-- /.row -->

        <hr>
