<h1> Display the Product List!!!</h1>
    <table id='display'>
        <tr>
	    <th>Code</th>
	    <th>Name</th>
	    <th>Price</th>
	</tr>
	<?php
	    foreach($products as $product) {
	?>
	    <tr>
	        <td><?php echo $product['productCode'];?></td>
		<td><?php echo $product['productName'];?></td>
		<td><?php echo $product['listPrice'];?></td>
	    </tr>
	<?php
	}
	?>
