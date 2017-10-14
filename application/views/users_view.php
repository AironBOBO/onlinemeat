
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $_def_css_files ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php echo $_top_navigation; ?>
    <?php echo $_side_navigation; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Accounts
        <small>Reference</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_User" class="table table-bordered table-striped">
                <thead class="tbl-header">
                    <tr>
                        <th style="width:100px !important;">User Name</th>
                        <th >Fullname</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th style="width:100px !important;">User Photo</th>
                        <th >User Name</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Furnies OL-Shoppe</a>.</strong> All rights
    reserved.
  </footer>

<?php echo $_right_navigation ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php echo $_def_js_files ?>
<script src="assets/plugins/formatter/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/formatter/accounting.js" type="text/javascript"></script>

    <script type="text/javascript">
        var initializeControls=function(){
        dt=$('#tbl_User').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "UserAccounts/transaction/list",
            "columns": [
                { targets:[0],data: "user_name"},
                { targets:[1],data: "fullname" },
                { targets:[2],data: "is_active",
                    render: function (data, type, full, meta){
                        if(data==1){
                            var _view='<button class="btn btn-sm" name="changestat" data-toggle="tooltip" data-placement="top" title="Set as inactive"><i class="fa fa-eye"></i> </button>';
                        }
                        else{
                            var _view='<button class="btn btn-md" name="changestat" data-toggle="tooltip" data-placement="top" title="Set as Active"><i class="fa fa-eye-slash"></i> </button>';
                        }
                        var _delete='<button class="btn btn-danger btn-sm" name="remove_info" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                      return '<center>'+_view+_delete+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search User"
                     },
        });

    }();

    $('#tbl_User tbody').on('click','button[name="changestat"]',function(){
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.user_id;
        _selectedStat=data.is_active;
        ChangeStat().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $.unblockUI();
                    });
    });

    $('#tbl_User tbody').on('click','button[name="remove_info"]',function(){
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.user_id;
        delete_notif();

    });


    var removeUser=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"UserAccounts/transaction/delete",
                "data":{user_id : _selectedID},
                "beforeSend": showSpinningProgress($('#'))
            });
        };

    var ChangeStat=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"UserAccounts/transaction/changestat",
            "data":{user_id : _selectedID,is_active : _selectedStat},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var delete_notif=function(type){
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this file!",
                    type: "warning",
                    closeOnConfirm: true,
                    closeOnCancel: true,
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",
                },function(isConfirm){
                    if (isConfirm) {
                            removeUser().done(function(response){
                            showNotification(response);
                                dt.row(_selectRowObj).remove().draw();
                           $.unblockUI();
                            });

                    } else {
                        swal("Cancelled", "Your file is safe :)", "error");
                    }
                });
    };

    var success_notif=function(type){
        swal("Good job!", "Sucessfully "+type, "success");
    };

    var showNotification=function(obj){
        PNotify.removeAll();
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
    };

    var clearFields=function(f){
        $('input,textarea',f).val('');
        $(f).find('input:first').focus();
    };

    $('.date-picker').datepicker({
      autoclose: true
    });


 </script>
</body>
</html>
