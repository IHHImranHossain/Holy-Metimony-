<?= $this->extend('layout/adminlayout')?>

<?= $this->section('content')?>

<?php $session = session(); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Items</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section>
        <!-- Button trigger modal -->
        <button style="margin-left: 20px;" type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#exampleModalCenter">
            Add Items
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Items</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('iteminsert'); ?>" method="POST" style="margin-left: 20px;">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="items_name" class="required" class="form-control">Item
                                        Name</label>
                                    <input type="text" name="items_name" id="items_name" class="form-control" />
                                </div>
                                <div class="form-select">

                                    <label for="attribute_id" class="required" class="form-control">Parent Name</label>

                                    <select name="attribute_id" id="attribute_id" class="form-control">
                                        <option selected disabled>__Select Parent Name__</option>
                                        <?php 
                                            foreach($groups as $each)
                                            {
                                        ?>
                                            <option value="<?php echo $each['id']; ?>">
                                            <?php echo $each['attribute_name']; ?></option>';

                                        <?php
                                            } 
                                        ?>

                                    </select>
                                </div><br>

                                <div class="form-submit">
                                    <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section>


        <div class="container">
            <h1>User Data Fetching</h1>
            <div class="table-container">
                <table class="table table-hover table-dark table-bordered table-striped table-sm table-responsive-sm"
                    id="displaytable" class="placeholder">
                    <thead>
                        <tr>
                            <th scope="col ">Id</th>
                            <th scope="col">Attribute ID</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    if(count($find)>0)
                    {
                        foreach($find as $row)  
                        {  
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['attribute_id']; ?></td>
                            <td><?php echo $row['items_name']; ?></td>
                            <td><button   class="btn btn-danger btn-xs" data-toggle="modal" data-target="#message<?php echo $row['id'];?>" >Delete</button></td>
                        </tr>

                        <div class="modal modal-danger fade" id="message<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        
                                    </div>

                
                                    <div class="modal-body">
                                            <p class="text-center">
                                                Are you sure you want to delete?
                                            </p>
                                            
                                            <center>
                                            <a href="<?= site_url('AdminController/itemdelete/').$row['id'];?>" id="'btn-'<?php echo $row['id']?>"  class="btn btn-danger">Yes, Delete</a>
                                            </center>
                                    </div>
                
            
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php       
                        }  
                    }
                    else
                    {
                        echo "No data found";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

  


    <?= $this->endSection()?>