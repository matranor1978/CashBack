
<div id="page-content" class="index-page">
	<div id="services"></div>
		<section class="box-content box-1">
			<div class="container">
				<div class="row">
					
					<?php 
						include_once ('Modele/produits/getProduits.php');
						$produits = getProduits();
						foreach($produits as $p)
						{
							echo '<div class="col-sm-4 ">
								<div class="service">
								<img src="imagesProduits/'.$p['image'].'" class="prd" alt="image_produit"/>
								<p>Économie de <strong>'.$p['rabais_produit'].'$</strong> par item</p>
								<center><form name="form2" id="qte" method="post" action="">
									<select name="combo_qte'.$p['id_produit'].'" id="combo_qte'.$p['id_produit'].'" change="check("combo_qte'.$p['id_produit'].'")">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
									<input type="submit" value="OK" />
								</form></center>
								</div>
							</div>'														
							;								
						}
					?>						
				</div>
			</div>
		</section>		
	</div>
</div>	
