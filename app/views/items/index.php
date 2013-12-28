<h1>Items</h1>


<?php foreach ($items as $item) {


	 
 echo "Name:".$item->name;

	 echo "<br>";
	 
echo "Quantity:".$item->quantity;

      echo "<br>";
	 
echo "Price:".$item->price;
	 
	  echo "$(USD)<br>";

}

?>