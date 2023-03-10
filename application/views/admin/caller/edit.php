<div class="main-content">

    <section class="section">

        <div class="section-body">

            <div class="row">

                <div class="col-12 col-md-12 col-lg-12">

                    <?php if ($this->session->flashdata('success')) { ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">

                            <strong>Success!</strong> <?= $this->session->flashdata('success'); ?>.

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                                <span aria-hidden="true">&times;</span>

                            </button>

                        </div>

                    <?php } ?>

                    <?php if ($this->session->flashdata('error')) { ?>

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">

                            <strong>Error!</strong> <?= $this->session->flashdata('error'); ?>.

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                                <span aria-hidden="true">&times;</span>

                            </button>

                        </div>

                    <?php } ?>

                    <div class="card">

                        <div class="card-header">

                            <h4>Franchise</h4>

                            <a href="<?= base_url('caller-add'); ?>" class="btn btn-warning" style="position:absolute;right:10px">List</a>

                        </div>

                        <style>
                            .error {
                                color: red
                            }
                        </style>

                        <?= validation_errors(); ?>


                        <?= form_open_multipart($action); ?>

                        <div class="card-body">

                            <div class="row">

                                <div class="form-group col-5">
                                    <label for="last_name">Franchise</label>
                                    <select name="franchise_id" id="" class="form-control">
                                        <option value="">Select</option>

                                        <?php foreach ($franchise_rec as $r) : ?>
                                            <option value="<?php echo  $r->id; ?>"  <?php if($r->id ==$rec[0]->id){ echo "selected";  }?>   ><?php echo  $r->franchise_name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="form-group col-5">

                                    <label for="last_name">Name</label>

                                    <input id="caller_name" type="text" class="form-control" name="caller_name" value="<?php echo $rec[0]->caller_name;?>">

                                    <input id="id" type="hidden" class="form-control" name="id" value="<?php echo $rec[0]->id;?>">


                                </div>




                            </div>
                            <input type="submit"  class="btn btn-primary" value="Update">

                        </div>

                        <?= form_close(); ?>



                    </div>

                </div>

            </div>

        </div>

    </section>



</div>