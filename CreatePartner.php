<?php
include "header.php";
?>
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body card-block">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">NHÀ CUNG CẤP</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="TENNCC" name="TENNCC" placeholder="Text" class="form-control">
                </div>
            </div>
            <div class="card-footer">
        <button type="submit" name="add" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>
        </form>
        <a href="IndexProduct.php">
            <button class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> BACK
            </button>
        </a>
    </div>
    
</div>    
<?php
include "Connect.php";

if(isset($_POST["add"]))
{
    $NCC=$_POST['TENNCC'];
    $sql ="Insert into NHACUNGCAP (TENNCC)values('".$NCC."')";
    if ($conn->query($sql) === TRUE) {
    echo "Thêm  thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
 
// Ngắt kết nối
$conn->close();
}
?>




<?php
    include_once "fooder.php";
    ?>