
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">

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
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Add New Student</h2>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Update Student</div>
                                    <div class="card-body">

                                    <?php echo $this->Form->create(null,["action"=>"editaction"]); ?>

                                    <input name="id" value="<?php echo $std->id; ?>" type="hidden" >
                                            <div class="form-group">
                                                <label for="stdname" class="control-label mb-1">Name</label>
                                                <input id="stdname" name="name" value="<?php echo $std->name; ?>" type="text" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="stdroll" class="control-label mb-1">Roll</label>
                                                <input id="stdroll" name="roll" value="<?php echo $std->roll; ?>" type="number" class="form-control" >
                                            </div>

                                            <div class="form-group">
                                                <label for="stdaddress" class="control-label mb-1">Address</label>
                                                <textarea  class="form-control" id="stdaddress" name="address"><?php echo $std->address; ?></textarea>
                                            </div>
                                            
                                        
                                                <a href="<?= $this->Url->build(["controller"=>"Student","action"=>"index"]); ?>" class="btn btn-md btn-info ">Close</a>

                                                <button  type="submit" class="btn btn-md btn-success ">Submit</span>
                                                </button>
                                            </div>
                                            <?php echo $this->Form->end(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

       