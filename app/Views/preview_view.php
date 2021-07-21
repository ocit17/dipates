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
        <a class="btn btn-success mb-2" href="<?php echo base_url('alamat') ?>">Add Alamat</a>
        <a class="btn btn-success mb-2" href="<?php echo base_url('customer') ?>">Add Customer</a>
        <a class="btn btn-success mb-2" href="<?php echo base_url('tes') ?>" target="_blank">Soal Bagian 2</a>
        
        <table class="table table-striped" id="table_id">
            <thead>
                <tr>
                    <th>Cust ID</th>
                    <th>Nama</th>
                    <th>NPWP</th>
                    <th>Area</th>
                    <th>Type</th>
                    <th>Alamat</th>
                    <th>Nama Kota</th>
                    <th>Kode Pos</th>
                    <th>No. Telp</th>
                    <th>Contact Person</th>
                    <th>Type Alamat</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($preview as $row):?>
                <tr>
                    <td><?= $row->customer_id;?></td>
                    <td><?= $row->customer_name;?></td>
                    <td><?= $row->npwp;?></td>
                    <td><?= $row->area;?></td>
                    <td><?= $row->type;?></td>
                    <td><?= $row->alamat;?></td>
                    <td><?= $row->nama_kota;?></td>
                    <td><?= $row->kode_pos;?></td>
                    <td><?= $row->no_telp;?></td>
                    <td><?= $row->contact_person;?></td>
                    <td><?= $row->type_alamat;?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

    </div>

<script src="/js/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $('#table_id').DataTable();        
    });
</script>
</body>
</html>