<?php include_once "header.php"; ?>
<?php include_once "nav.php"; ?>





<style>
  .myclass { margin: 0; margin-top: -20px; }
  .hide { display:none; }
</style>



<div class="container-fluid">

  <table style="width:100%; margin-bottom:-30px;">
    <tr>
        <td>
            <?php include_once "contract_view_ul.php"; ?>  
        </td>

        <td>
            <?php include_once "contract_view_ur.php"; ?>              
        </td>
    </tr>
    <tr>
        <td>
            <?php include_once "contract_view_left.php"; ?>                        
        </td>
        <td>
            <?php include_once "contract_view_right.php"; ?>                               
        </td>
    </tr>

    <tr>
        <td style="width:50%;">
            <?php include_once "contract_view_ll.php"; ?>          
        </td>
        <td>
            <?php include_once "contract_view_lr.php"; ?>          
        </td>
    </tr>


  </table>
</div>





<?php include_once "footer.php"; ?>
<?php include_once "jsonp.php"; ?>
<?php include_once "java.php"; ?>
