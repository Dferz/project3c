<?php

	class Posting{
		private $db;

		function __construct($DB_con){
	    	$this->db = $DB_con;
	    }

	    public function setPosting($judul, $deskripsi, $namaImage){
	    	try{

	    		$stmt = $this->db->prepare("SELECT * FROM posting WHERE judul=:judul or nama_gambar=:namaImage");
		    	$stmt->bindparam(":judul", $judul);
		    	$stmt->bindparam(":namaImage", $namaImage);
		    	$stmt->execute();

		    	if($stmt->rowCount()>0){
		    		return false;
	    		}else{
	    			$waktu = $this->getTimeNow();
		    		$stmt = $this->db->prepare("INSERT INTO posting VALUES(:judul, :deskripsi, :namaImage, :waktu)");
		            $stmt->bindparam(":judul", $judul);
		           	$stmt->bindparam(":deskripsi", $deskripsi);
		           	$stmt->bindparam(":namaImage", $namaImage); 
		           	$stmt->bindparam(":waktu", $waktu);          
		           	$stmt->execute(); 
		   
		           	return true; 
	    		}
	    		
	      	}
	      	catch(PDOException $e){
	        	echo $e->getMessage();
	        	return false;
	    	}    
	    }

	    public function deletePosting($judul){
	    	try {
	    		# Cari Judul File dan unlink filenya
	    		$stmt = $this->db->prepare("SELECT * FROM posting WHERE judul=:judul");
		    	$stmt->bindparam(":judul", $judul);
		    	$stmt->execute();

		    	if($stmt->rowCount()>0){
	    			while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	    				unlink("../assetNews/".$row['nama_gambar']);
	    			}
	    			$stmt = $this->db->prepare("DELETE FROM posting WHERE judul=:judul");
		    		$stmt->bindparam(":judul", $judul);
		    		$stmt->execute();

		    		return true;
	    		}else{
	    			return false;
	    		}

	    		
	    		
	    	} catch (PDOException $e) {
	    		echo $e->getMessage();
	    		return false;
	    	}
	    }

	    public function newsHomeView($query){
	    	try {
	    		$stmt = $this->db->prepare($query);
	    		$stmt->execute();
	    		
	    		if($stmt->rowCount()>0){
	    			while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
	    				<a href="news/<?php echo $row['judul']?>">
							<li>
								<?php
										echo "<img src='assetNews/".$row['nama_gambar']."'>";
								?>
								<h2 class="text-center roboto "><?php  echo $row['judul']?></h2>
								<p class="roboto text-justify"><?php  echo substr($row['deskripsi'], 0, 300)."... <span style='color:turquoise'>Read More</span>"?></p>

							</li>
						</a>
<?php
	    			}
	    		}else{
	    			
	    		}
	    	} catch (PDOException $e) {
	    		echo $e->getMessage();
	    	}
	    }

	    public function newsFullView($judul){
	    	try {
	    		$stmt = $this->db->prepare("SELECT * FROM posting WHERE judul=:judul");
		    	$stmt->bindparam(":judul", $judul);
	    		$stmt->execute();
	    		
	    		if($stmt->rowCount()>0){
	    			while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
	    				<div class="column-1 margin-bottom-medium" style="background-color:#BF55EC; z-index:10;">			
							
							<div class="column-1-2 column-center padding-top-medium" id="title">
								<h1 class="text-center underline padding-medium"><?php echo $row['judul']?></h1>
							</div>
							<div class="column-1-6 column-center">
								<a href="../" style="text-decoration:none;"><p class="text-center ralewaysmall padding-xsmall change">Back To Home</p></a>
							</div>						
						</div>
						<div class="container" style="border:0px;">
							<?php
								echo "<img src='../assetNews/".$row['nama_gambar']."' class='rounded responsive'>";
							?>
							
						</div>
						<div class="column-1 margin-top-medium" style="background-color:#4B77BE;">
							<div class="container padding-small" >
								<p><?php echo $row['deskripsi']?></p>
							</div>
						</div>
						<div class="column-1" style="background-color:#BF55EC;">
							<div class="column-1-2 column-center padding-small">
								<!-- <p class="text-center">Dipos pada tanggal <?php //echo date('d F Y', strtotime($row['waktu']))?></p>
								<p class="text-center">Oleh : Admin</p> -->
							</div>
						</div>
<?php
	    			}
	    		}else{
	    			echo "<h2>Maaf News Tidak ditemukan</h2>";
	    		}
	    	} catch (PDOException $e) {
	    		echo $e->getMessage();
	    	}
	    }

	    public function getTimeNow(){
	    	date_default_timezone_set("Asia/Jakarta");
	    	return date("Y/m/d H:i:s");
	    }

	    public function paging($query, $records_per_page){
	    	$starting_position = 0;
	    	if(isset($_GET["page_no"])){
	    		$starting_position = ($_GET["page_no"]-1)*$records_per_page;
	    	}
	    	$query = $query." ORDER BY waktu DESC LIMIT $starting_position,$records_per_page";
	    	return $query;
	    }

	    public function pagingLink($query, $records_per_page){
	    	$self = $_SERVER['PHP_SELF'];
	    	$stmt = $this->db->prepare($query);
	    	$stmt->execute();
	    	$jumlah_records = $stmt->rowCount();
	    	if($jumlah_records > 0)
	    	{
?>
				<center>
	    		<ul class="pagination">
<?php
	    		$jumlah_pages = ceil($jumlah_records/$records_per_page);
	    		$current_page = 1;
	    		$q = "";
	    		if(isset($_GET["page_no"])){
	    			$current_page=$_GET["page_no"];
	    		}
	    		if (isset($_GET['q'])) {
	    			$q = '&q='.$_GET['q'];
	    		}
	    		if($current_page!=1){
	    			$previous =$current_page-1;
	    			echo "<li class='page'><a href='".$self."?page_no=1$q'>First</a></li>";
	    			echo "<li class='page'><a href='".$self."?page_no=".$previous."$q'>Previous</a></li>";
	    		}
	    		for($i=1;$i<=$jumlah_pages;$i++){
	    			if($i==$current_page){
	    				echo "<li class='page'><a href='".$self."?page_no=".$i."$q' style='color:red;'>".$i."</a></li>";
	    			}else{
	    				echo "<li class='page'><a href='".$self."?page_no=".$i."$q'>".$i."</a></li>";
	    			}
	    		}
	    		if($current_page!=$jumlah_pages)
	    		{
	    			$next=$current_page+1;
	    			echo "<li class='page'><a href='".$self."?page_no=".$next."$q'>Next</a></li>";
	    			echo "<li class='page'><a href='".$self."?page_no=".$jumlah_pages."$q'>Last</a></li>";
	    		}
?>
				</ul>
				</center>
<?php
	    	}
	    }
	}

?>