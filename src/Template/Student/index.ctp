

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?= $baseurl ?>webroot/assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?= $baseurl ?>webroot/assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Student List</h2>
                                    <a href="<?= $this->Url->build(["controller"=>"Student","action"=>"addnew"]); ?>" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Add New</apache_get_modules></a>
                                </div>
                            </div>
                        </div>
                         <div class="row" style="margin-top:20px;">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Name</th>
                                                <th>Roll</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=0;
                                            foreach($students as $std):
                                            ?>
                                            <tr>
                                                <td><?php echo ++$i; ?></td>
                                                <td><?php echo $std->name; ?></td>
                                                <td><?php echo $std->roll; ?></td>
                                                <td><?php echo $std->address; ?></td>
                                                <td>
                                                    <!-- <a href="" class="btn btn-outline-secondary btn-sm"><i class="fa fa-eye"></i></a> -->
                                                    <!-- <a href="" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a> -->
                                                    <?php echo $this->Form->postLink('Edit', ['action'=>'edit', $std->id], ['class'=>'btn btn-secondary btn-sm']) ?>
                                                    <!-- <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt"></i></a> -->
                                                    <?php echo $this->Form->postLink('Delete', ['action'=>'delete', $std->id], ['class'=>'btn btn-danger btn-sm', 'confirm'=>'Are you sure?']) ?>
                                                </td>
                                            </tr>
                                            <?php
                                            endforeach;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

