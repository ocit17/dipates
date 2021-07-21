<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOAL BAGIAN 2</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
</head>
<body>
    <div class="container mt-3">
        <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#soalSatu">Soal Satu</button>
        <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#soalDuaa">Soal Dua</button>
        <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#soalTiga">Soal Tiga</button>
    </div>

    <form id="formsoalSatu" method="post">
        <div class="modal fade" id="soalSatu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Soal 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <span id="respon_data"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </form>

    <form id="formsoalDua" method="post">
        <div class="modal fade" id="soalDuaa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Soal 2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <div class="form-group">
                    <label>Masukan Text</label>
                    <input type="text" class="form-control" name="kata" required onkeypress="return allLetter(event)">
                </div>
                
                <h4>Output: </h4>
	            <span id="hasilDua"></span>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary submitDua">Submit</button>
            </div>
            </div>
        </div>
        </div>
    </form>

    <form id="formsoalTiga" method="post">
        <div class="modal fade" id="soalTiga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Soal 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                    <div class="form-group">
                        <label>Bilangan Prima</label>
                        <input type="number" class="form-control" name="prima" id="prima">
                    </div>
                    
                    <h4>Output: </h4>
                    <span id="result"></span>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="btn">Submit</button>
                </div>
                </div>
            </div>
        </div>
    </form>

<script src="/js/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('#formsoalSatu').on('shown.bs.modal', function (e) {
            e.preventDefault();
            var form= $("#formsoalSatu");
            $.ajax({
                url : '<?php base_url() ?>/tes/soal_satu', 
                type : 'GET',
                data : form.serialize(),
                success : function(data) {
                    $("#respon_data").html(data);
                }
            });
        });

        $('#btn').on('click', function(e){
            e.preventDefault();
            var form= $("#formsoalTiga");
            $.ajax({
                url : '<?php base_url() ?>/tes/soal_tiga', 
                type : 'POST',
                data : form.serialize(),
                success : function(data) {
                    $("#result").html(data);
                }
            });
        });

        $('.submitDua').on('click', function(e){
            e.preventDefault();
            var form= $("#formsoalDua");
            $.ajax({
                url : '<?php base_url() ?>/tes/soal_dua', 
                type : 'POST',
                data : form.serialize(),
                success : function(data) {
                    $("#hasilDua").html(data);
                }
            });
        });
    });

    function allLetter(inputtxt)
    {
        var letters = /^[A-Za-z]+$/;
        if(inputtxt.value.match(letters))
        {
            return true;
        }
        else
        {
            alert("message");
            return false;
        }
    }
	</script>
</body>
</html>