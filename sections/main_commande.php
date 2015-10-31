<!-- DEBUT: Partie principale de la page -->
<main>
    <div id="contenu-principal">
        <center><h1>Votre commande</h1></center></br></br>
        <?php
		
        function creerTheadHTML($etiquettes) {

            $theadHTML = '<thead>';
            foreach ($etiquettes as $element) {
                $theadHTML = $theadHTML . '<th id=bouton-' .
                        strtolower($element) . '>';
                $theadHTML = $theadHTML . $element;
                $theadHTML = $theadHTML . '</th>';
            }

            return $theadHTML . '</thead>';
        }
		
		function creerTbodyHTML($commande) {

        $tbodyHTML = '<tbody id="latable">';
        
        foreach ($commande as $element) {
            
            $tbodyHTML = $tbodyHTML . '<tr id="tr3">';
            $tbodyHTML = $tbodyHTML . '<td>';
            $tbodyHTML = $tbodyHTML . $element[0][0];
            $tbodyHTML = $tbodyHTML . '</td>';

            $tbodyHTML = $tbodyHTML . '<td>';
            $tbodyHTML = $tbodyHTML . $element[0][1];
            $tbodyHTML = $tbodyHTML . '$</td>';
			
            $tbodyHTML = $tbodyHTML . '<td>';
            $tbodyHTML = $tbodyHTML . $element[0][2];
            $tbodyHTML = $tbodyHTML . '$</td>';
			
            $tbodyHTML = $tbodyHTML . '<td>';
            $tbodyHTML = $tbodyHTML . $element[0][3];
            $tbodyHTML = $tbodyHTML . '</td>';
			
			$tbodyHTML = $tbodyHTML . '<td>';
            $tbodyHTML = $tbodyHTML . $element[0][4];
            $tbodyHTML = $tbodyHTML . '$</td>';
			
            $tbodyHTML = $tbodyHTML . '<td><input type="submit" name="envoyer" value="OK" onclick="supprimer(this);"></a></td>';
            $tbodyHTML = $tbodyHTML . '</tr>';
			
     ?>
    <script >
		function supprimer(r) {
            var i = r.parentNode.parentNode.rowIndex;
           
         
            var x = document.getElementById('gTotal');
           
            var y = document.getElementById('latable').rows[i-1].cells[4];
			var id = document.getElementById('latable').rows[i-1].cells[0];
			var qte = document.getElementById('latable').rows[i-1].cells[3];
			var c = id.innerHTML;
            var d = qte.innerHTML;
			var a = [c, d];
            var x1 = x.innerHTML;
            var y1 = y.innerHTML;
             
            var z = parseFloat(x1) - parseFloat(y1); 
			z = z.toFixed(2);
            var z1 = z.toString();
            document.getElementById('gTotal').innerHTML= z1 + " $"; 
			document.getElementById('economiesC').innerHTML= z1  + " $" ;
            document.getElementById('latable').deleteRow(i-1);
      	}
	</script>

	<?php
     
            $tbodyHTML = $tbodyHTML . '</tr>';
        }

			return $tbodyHTML . '</tbody>';
		}

			$etiquettes = ["Id","Produit", "Rabais", "Quantité", "Total", "Supprimer"];

			$theadHTML = creerTheadHTML($etiquettes);
			$tbodyHTML = creerTbodyHTML($_SESSION['commande']);

			echo '<table>' .
			$theadHTML .
			$tbodyHTML .
			'<tr><td colspan=4>Grand Total</td><td id="gTotal">'.$_SESSION['grand_total'].'$</td><td><form method="POST" action="index.php?section=validationCommande" onclick = "viderTableau()" > <input type="submit" name="Submit"  value="Valider"></form> </td></tr></table>';
    ?>
		</br></br></br></br>
	<script >
		function viderTableau() {
			var parent = document.getElementById("latable");
			var child = document.getElementByTagName("tr");
			parent.removeChild(child);
			
		}	
	</script>
    </div>
	
</main>
<!-- FIN: Partie principale de la page -->
