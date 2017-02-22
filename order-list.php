<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Dodol Shop</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

  <nav class="navbar navbar-default" role="navigation"> 
            <div class="container-fluid"> 
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>                     
                    <a class="navbar-brand" href="index.html">Dodol <b>Shop</b></a> 
                </div>                 

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                    <ul class="nav navbar-nav navbar-right"> 
                    	<li>
                            <a href="index.html">Home</a>
                        </li> 
                        <li>
                            <a href="order-list.php">Order List</a>
                        </li>                         
                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">How To: <b class="caret"></b></a> 
                            <ul class="dropdown-menu"> 
                                <li>
                                    <a href="#">Order</a>
                                </li>                                 
                                <li>
                                    <a href="#">Dropshipping</a>
                                </li>                                     
                            </ul>                             
                        </li>                         
                    </ul>                     
                </div>                 
            </div>             	
        </nav>
    <div class="container">
	<h1>DODOL <b>SHOP</b></h1>
	<h4>ORDER LIST</h4>
	
	<table cellpadding="5" cellspacing="0" border="1" class="tbl_fixed">
		<tr bgcolor="#CCCCCC">
			<th width="10%">No</th>
			<th width="10%">Nama</th>
			<th width="10%">Alamat</th>
			<th width="10%">Kode Pesanan</th>
			<th width="10%">Jumlah Pesanan</th>
			<th width="10%">No Telepon</th>
		</tr>
		
		<?php
		include("connect.php");
		
		$query = mysql_query("SELECT * FROM tbl_order ORDER BY id ASC") or die(mysql_error());
		
		if(mysql_num_rows($query) == 0){	//ini artinya jika data 
			echo '<tr><td colspan="6">Tidak ada data pemesanan!</td></tr>';
		}else{
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';
					echo '<td>'.$data['nama_db'].'</td>';
					echo '<td>'.$data['alamat_db'].'</td>';	
					echo '<td>'.$data['kd_barang_db'].'</td>';
					echo '<td>'.$data['jml_pesan_db'].'</td>';
					echo '<td>'.$data['no_tlp_db'].'</td>';	
				echo '</tr>';
				$no++;
				
			}
			
		}
		?>
	</table>
	
    <p>
    </p>
    <hr>
    </div>
    <div class="container footer">&copy;PT. ANEKA DODOL GARUT. 2017.</div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sticky_nav.js"></script>
  </body>
</html>