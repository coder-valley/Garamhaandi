

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Index Images List
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Index
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    
                    <div class="col-lg-12">
                        <h2>Index Page Main Slider Images</h2>
						<a href="<?php echo HTTP_ROOT.'admin/users/add_image'?>"><h2>Add Image</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Image</th>
                                        <th>Action</th>                                       
                                    </tr>
                                </thead>
                                <tbody>
									<?php $i=1;
									if(!empty($images)){
										foreach($images as $image){?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $image['IndexImage']['image'];?></td>
												
												
												<td>
													<a href="<?php echo HTTP_ROOT.'admin/users/delete/IndexImage'.$image['IndexImage']['id']?>">
														<i class="glyphicon glyphicon-remove"></i>
													</a>
												</td>
											</tr>
									<?php }
									}else{?>
										<tr>
											<td colspan="3">
												No Images
											</td>	
										</tr>
									<?php }?>		
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                

            </div>
            <!-- /.container-fluid -->

        </div>
         