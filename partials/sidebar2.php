
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>DATA CAMP</h3>
                    <strong>DC</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="../index.php" >
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>

                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-th"></i>
                            See all
                        </a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-thumbs-up"></i>
                            Auto suggestion
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-paperclip"></i>
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-send"></i>
                            Contact
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">vy_t@etna-alternance.net</a></li>
                            <li><a href="#">courta_f@etna-alternance.net</a></li>
                            <li><a href="#">chonvi_d@etna-alternance.net</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false">
                           <i class="glyphicon glyphicon-user"></i>
                           User
                       </a>
                       <ul class="collapse list-unstyled" id="userSubmenu">
                        <li><a href="login.php#">Sign in</a></li>
                        <li><a href="register.php#">Sign up</a></li>
                        <li><a href="logout.php#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->



        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript">
           $(document).ready(function () {
               $('#sidebarCollapse').on('click', function () {
                   $('#sidebar').toggleClass('active');
               });
           });
       </script>