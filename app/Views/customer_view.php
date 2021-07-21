<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Lists</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
</head>
<body>
    <div class="container mt-3">
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add Customer</button>

    <a class="btn btn-success mb-2" href="<?php echo base_url('alamat') ?>">Add Alamat</a>
    <a class="btn btn-success mb-2" href="<?php echo base_url('preview') ?>">Preview Data</a>
    <a class="btn btn-success mb-2" href="<?php echo base_url('tes') ?>" target="_blank">Soal Bagian 2</a>

        <table class="table table-striped" id="table_id">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>NPWP</th>
                    <th>Area</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($customers as $row):?>
                <tr>
                    <td><?= $row->nama;?></td>
                    <td><?= $row->npwp;?></td>
                    <td><?= $row->area;?></td>
                    <td><?= $row->type;?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit" 
                        data-id="<?= $row->customer_id;?>" 
                        data-npwp="<?= $row->npwp;?>" 
                        data-nama="<?= $row->nama;?>"
                        data-area="<?= $row->area;?>"
                        data-type="<?= $row->type;?>"
                        >Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->customer_id;?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </div>
    
    <!-- Modal Add Customer-->
    <form action="/customer/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                
                <div class="form-group">
                    <label>NPWP</label>
                    <input type="text" class="form-control" name="npwp" required>
                </div>
                
                <div class="form-group">
                    <label>Area</label>
                    <div class="radio">
                        <label><input type="radio" name="area" value="Jawa" checked> Jawa</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="area" value="Luar Jawa"> Luar Jawa</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Type</label>
                    <div class="radio">
                        <label><input type="radio" name="type" value="Industry" checked> Industry</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="type" value="Non Industry"> Non Industry</label>
                    </div>
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Customer-->

    <!-- Modal Edit Customer-->
    <form action="/customer/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label>NPWP</label>
                    <input type="text" class="form-control npwp" name="npwp" required>
                </div>
                
                <div class="form-group">
                    <label>Area</label>
                    <div class="radio">
                        <label><input type="radio" class="jawa" name="area" value="Jawa"> Jawa</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" class="luar" name="area" value="Luar Jawa"> Luar Jawa</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Type</label>
                    <div class="radio">
                        <label><input type="radio" class="industri" name="type" value="Industry"> Industry</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" class="non" name="type" value="Non Industry"> Non Industry</label>
                    </div>
                </div>
            
            </div>
            <div class="modal-footer">
                <input type="hidden" name="customer_id" class="customer_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Customer-->

    <!-- Modal Delete Customer-->
    <form action="/customer/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
               <h4>Are you sure want to delete this Customer?</h4>
            
            </div>
            <div class="modal-footer">
                <input type="hidden" name="customer_id" class="customerID">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete Product-->

<script src="/js/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $('#table_id').DataTable();
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const npwp = $(this).data('npwp');
            const nama = $(this).data('nama');
            const area = $(this).data('area');
            const type = $(this).data('type');
            // Set data to Form Edit
            
            $('.customer_id').val(id);
            $('.name').val(nama);
            $('.npwp').val(npwp);
            if (area == 'Jawa') {
                $(".jawa").prop("checked", true);
            }
            if (area == 'Luar Jawa') {
                $(".luar").prop("checked", true);
            }
            if (type == 'Industry') {
                $(".industri").prop("checked", true);
            }
            if (type == 'Non Industry') {
                $(".non").prop("checked", true);
            }
            // Call Modal Edit
            $('#editModal').modal('show');
        });

        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.customerID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
        
    });
</script>
</body>
</html>