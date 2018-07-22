

<?php
/**
 * Created by PhpStorm.
 * User: Kunal
 * Date: 14-07-2018
 * Time: 21:35
 */
?>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="admin_dashboard.php">Tech1 - Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <strong><?php echo $_SESSION['username']?></strong>
</h5>
<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
<p>Lorem ipsum dolor sit amet, consectetur...</p>
</div>
</div>
</a>
</li>
<li class="message-preview">
    <a href="#">
        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
            <div class="media-body">
                <h5 class="media-heading">
                    <strong><?php echo $_SESSION['username']?></strong>
                </h5>
                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
            </div>
        </div>
    </a>
</li>
<li class="message-preview">
    <a href="#">
        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
            <div class="media-body">
                <h5 class="media-heading">
                    <strong><?php echo $_SESSION['username']?></strong>
                </h5>
                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
            </div>
        </div>
    </a>
</li>
<li class="message-footer">
    <a href="#">Read All New Messages</a>
</li>
</ul>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
    <ul class="dropdown-menu alert-dropdown">
        <li>
            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
        </li>
        <li>
            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
        </li>
        <li>
            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
        </li>
        <li>
            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
        </li>
        <li>
            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
        </li>
        <li>
            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">View All</a>
        </li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username']?> <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li>
            <a href="#"><i class="fa fa-fw fa-user"></i>Profile</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-envelope"></i>Inbox</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
        </li>
        <li class="divider"></li>
        <li>
            <a href='admin_logout.php' name='logout' type='submit'><i class='fa fa-fw fa-power-off'></i> Log Out</a>";
        </li>
    </ul>
</li>
</ul>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="add_category.php"><i class="fa fa-fw fa-table"></i>Add Category</a>
        </li>
        <li>
            <a href="add_product.php"><i class="fa fa-fw fa-table"></i>Add Product</a>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">
    <!---->
