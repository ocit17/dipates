<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alamat Lists</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
</head>
<body>
    <div class="container mt-3">
        <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add Alamat</button>
        <a class="btn btn-success mb-2" href="<?php echo base_url('customer') ?>">Add Customer</a>
        <a class="btn btn-success mb-2" href="<?php echo base_url('preview') ?>">Preview Data</a>
        <a class="btn btn-success mb-2" href="<?php echo base_url('tes') ?>" target="_blank">Soal Bagian 2</a>
        
        <table class="table table-striped" id="table_id">
            <thead>
                <tr>
                    <th>Alamat</th>
                    <th>Customer</th>
                    <th>Kota</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($alamat as $row):?>
                <tr>
                    <td><?= $row->alamat;?></td>
                    <td><?= $row->customer_name;?></td>
                    <td><?= $row->nama_kota;?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit" 
                        data-id="<?= $row->address_id;?>" 
                        data-customer="<?= $row->customer_id;?>"
                        data-alamat="<?= $row->alamat;?>"
                        data-kodepos="<?= $row->kode_pos;?>"
                        data-telp="<?= $row->no_telp;?>"
                        data-contact="<?= $row->contact_person;?>"
                        data-kota="<?= $row->kota_id;?>"
                        data-type="<?= $row->type_alamat;?>">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->address_id;?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </div>
    
    <!-- Modal Add Alamat-->
    <form action="/alamat/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="form-group">
                    <label>Customer</label>
                    <select name="customer" class="form-control">
                        <?php foreach($customer as $row):?>
                        <option value="<?= $row->customer_id ;?>"><?= $row->nama;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                
                <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" class="form-control" name="kode_pos">
                </div>
                
                <div class="form-group">
                    <label>No. Tepl</label>
                    <input type="text" class="form-control" name="telp">
                </div>
                
                <div class="form-group">
                    <label>Contact Person</label>
                    <input type="text" class="form-control" name="contact">
                </div>

                <div class="form-group">
                    <label>Kota</label>
                    <select name="kota" class="form-control">
                        <?php foreach($kota as $row):?>
                        <option value="<?= $row->kota_id ;?>"><?= $row->nama_kota;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Type Alamat</label>
                    <div class="radio">
                        <label><input type="radio" name="type" value="Alamat Faktur" checked> Alamat Faktur</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="type" value="Alamat Pengirim"> Alamat Pengirim</label>
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
    <!-- End Modal Add Alamat-->

    <!-- Modal Edit Alamat-->
    <form action="/alamat/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <div class="form-group">
                    <label>Customer</label>
                    <select name="customer" class="form-control customer">
                        <?php foreach($customer as $row):?>
                        <option value="<?= $row->customer_id ;?>"><?= $row->nama;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control alamat" name="alamat">
                </div>
                
                <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" class="form-control kode_pos" name="kode_pos">
                </div>
                
                <div class="form-group">
                    <label>No. Tepl</label>
                    <input type="text" class="form-control telp" name="telp">
                </div>
                
                <div class="form-group">
                    <label>Contact Person</label>
                    <input type="text" class="form-control contact" name="contact">
                </div>

                <div class="form-group">
                    <label>Kota</label>
                    <select name="kota" class="form-control kota">
                        <?php foreach($kota as $row):?>
                        <option value="<?= $row->kota_id ;?>"><?= $row->nama_kota;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Type Alamat</label>
                    <div class="radio">
                        <label><input type="radio" name="type" class="faktur" value="Alamat Faktur"> Alamat Faktur</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="type" class="pengirim" value="Alamat Pengirim"> Alamat Pengirim</label>
                    </div>
                </div>
            
            </div>
            <div class="modal-footer">
                <input type="hidden" name="address_id" class="address_id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->

    <!-- Modal Delete Product-->
    <form action="/alamat/delete" method="post">
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
                <input type="hidden" name="address_id" class="address_id">
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
            const customer = $(this).data('customer');
            const alamat = $(this).data('alamat');
            const kode_pos = $(this).data('kodepos');
            const telp = $(this).data('telp');
            const contact = $(this).data('contact');
            const kota = $(this).data('kota');
            const type = $(this).data('type');

            
            // Set data to Form Edit
            $('.address_id').val(id);
            $('.customer').val(customer).trigger('change');
            $('.alamat').val(alamat);
            $('.kode_pos').val(kode_pos);
            $('.telp').val(telp);
            $('.contact').val(contact);
            $('.kota').val(kota).trigger('change');
            console.log( $('.alamat').val());
            if (type == 'Alamat Faktur') {
                $(".faktur").prop("checked", true);
            }
            if (type == 'Alamat Pengirim') {
                $(".pengirim").prop("checked", true);
            }
            // Call Modal Edit
            $('#editModal').modal('show');
        });

        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.address_id').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
        
    });
</script>
</body>
</html>