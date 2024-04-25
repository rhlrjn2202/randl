<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addElectrician"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Electrician List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>Electrician" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText1" value="<?php echo $searchText1; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      
                      <th>Sl No</th>
                      <th>Pic</th>
                      <th>Name</th>
                      <th>Designation</th>
					  <th>Join Date</th>
                      <th>Status</th>
					  <th>Jobs Done</th>
                      <th>Reviews</th>
					  <th>Age</th>
					  <th>Service Status</th>
                     
                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($userElectrician))
                    {
                        foreach($userElectrician as $record)
                        {
                    ?>
                    <tr>
                   
                      <td><?php echo $record->sl ?></td>
                      <td><img src="<?php echo base_url('assets/uploads/').$record->pic ?>" style="width:60px;height:60px;border-radius:50%;"/></td>

                      <td><?php echo $record->name ?></td>
                      <td><?php echo $record->designation ?></td>
					  <td><?php echo $record->join_date ?></td>
                      <td><?php echo $record->level ?></td>
                      <td><?php echo $record->jobs_done ?></td>
					  <td><?php echo $record->reviews ?></td>
                      <td><?php echo $record->age ?></td>
                      <td><?php echo $record->service_status ?></td>
                      <td class="text-center">
                          <a class="btn btn-sm btn-info" href="<?php echo base_url().'EditElectrician/'.$record->electrician_id; ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger deleteUser" href="#" data-electrician_id="<?php echo $record->electrician_id; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "Electrician/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
