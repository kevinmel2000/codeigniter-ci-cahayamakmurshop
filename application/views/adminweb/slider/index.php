<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-edit"></i>Slider</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="btn-group">
										
										<a  class="btn green" href="<?php echo base_url();?>adminweb/slider_tambah" >
													Add New <i class="icon-plus"></i>
													</a> 
									</div>
									<?php 
									
													if ($this->session->flashdata('message')){
														echo "<div class='alert alert-block alert-error show'>
															  <button type='button' class='close' data-dismiss='alert'>×</button>
																 <span>Slider Berhasil Dihapus</span>
																</div>";
													}
													else if($this->session->flashdata('berhasil')){
														echo "<div class='alert alert-block alert-success show'>
															  <button type='button' class='close' data-dismiss='alert'>×</button>
																 <span>Slider Berhasil Disimpan</span>
																</div>";
													}
													else if($this->session->flashdata('update')){
														echo "<div class='alert alert-block alert-success show'>
															  <button type='button' class='close' data-dismiss='alert'>×</button>
																 <span>Slider Berhasil Diupdate</span>
																</div>";
													}
												
							?>
								</div>
								<table id="table_id" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Gambar</th>
											<th>Tittle</th>
											<th>Status</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										if ($data_slider->num_rows()>0) {
											foreach ($data_slider->result_array() as $tampil) { ?>
										<tr >
											<td><?php echo $no;?></td>
											<td width="10%"><a href="<?php echo base_url()?>images/slider/<?=$tampil['gambar']?>"><img width="100px" src="<?php echo base_url()?>images/slider/<?=$tampil['gambar']?>"></a></td>
											<td><?php echo $tampil['tittle'];?></td>
											<td>
												<?php
												if ($tampil['status']=="0") {
													echo "Tidak Aktif";
												}
												else {
													echo "Aktif";
												}
												?>
											</td>
											

											
											<td><a class="btn green" href="<?php echo base_url();?>adminweb/slider_edit/<?php echo $tampil['id_slider'];?>"><i class="icon-edit"></i> Edit</a>
											<a class="btn red" href="<?php echo base_url();?>adminweb/slider_delete/<?php echo $tampil['id_slider'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['tittle'];?>?')"><i class="icon-trash"></i> Delete</a>


										</td>
										</tr>
										<?php
										$no++;
										}
										}
										
										else { ?>
										<tr>
											<td colspan="4">No Result Data</td>
										</tr>
										<?php

										}
										?>
										
									</tbody>
								</table>
							</div>
						</div>
						
					</div>
				</div>

				


				


