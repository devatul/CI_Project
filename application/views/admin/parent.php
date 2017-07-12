<?php include('header.php');?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List Of Parents</h4>
                                <p class="category">
								<a href="<?php echo site_url('admin/addparent');?>"class="btn btn-primary btn-fill pull-right">Create a New Parent-Id</a></p>
								<?php
									if($this->session->flashdata('errmsg'))
									{
										echo $this->session->flashdata('errmsg');
									}
								?>
								<table class="table table-responsive table-bordered">
									<thead>

									</thead>
									<tbody>
										<?php
											foreach($data as $x)
											{
												echo "<pre>";
												print_r($x);
											}

										?>
									</tbody>
								</table>
							</div>
                            <div class="content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php');?>
