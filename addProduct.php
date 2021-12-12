<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Back page</title>
</head>
<body>



    <?php
	
		//if(isset( $_POST['save']))
		//{
			$ProductNumber= $_POST["pn"];
			$ProductName= $_POST["name"];
		    $ProductBrand= $_POST["brand"];
		    $ProductCategory= $_POST["product_category"];
            $ProductQuantityPerUnit= $_POST["quant_per_product"];
            $ProductUnitPrice = $_POST["uprice"];
            $ProductAvailableStock= $_POST["productavailablestock"];
            $ProductMaximumStock= $_POST["maxstock"];
            $ProductDescription = $_POST["productdescription"];
			
			$itemstock_doc = new DOMDocument();
			$itemstock_doc->preserveWhiteSpace = false;
            $itemstock_doc->formatOutput = true;
            $itemstock_doc->load("itemstock.xml");

			$items = $itemstock_doc->documentElement;

            foreach (($itemstock_doc->childNodes)[0]->childNodes as $node){
			
				$concernednumber=($node->GetElementsByTagname("ProductNumber"))[0]->nodeValue;
				if ($ProductNumber == $concernednumber)
				{
					echo "<script>alert('Product number already in use.'); document.location='P7.html'</script>";
					exit();
				}
			
			}
			
			$new_item = $itemstock_doc->createElement("item");

			$prodnumelem=$itemstock_doc->createElement("ProductNumber");
			$prodnumelem->appendChild($itemstock_doc->createTextNode($ProductNumber));
			//$prodnumelem->appendChild($itemstock_doc->createTextNode("12334"));
			$new_item->appendChild($prodnumelem);

			$prodnamelem=$itemstock_doc->createElement("ProductName");
			$prodnamelem->appendChild($itemstock_doc->createTextNode($ProductName));
			//$prodnamelem->appendChild($itemstock_doc->createTextNode("Testyprod"));
			$new_item->appendChild($prodnamelem);

			$prodbraelem=$itemstock_doc->createElement("ProductBrand");
			$prodbraelem->appendChild($itemstock_doc->createTextNode($ProductBrand));
			//$prodbraelem->appendChild($itemstock_doc->createTextNode("MegaNoName"));
			$new_item->appendChild($prodbraelem);

			$prodcatelem=$itemstock_doc->createElement("ProductCategory");
			$prodcatelem->appendChild($itemstock_doc->createTextNode($ProductCategory));
			//$prodcatelem->appendChild($itemstock_doc->createTextNode("Dairy"));
			$new_item->appendChild($prodcatelem);

			$prodquaelem=$itemstock_doc->createElement("ProductQuantityPerUnit");
			$prodquaelem->appendChild($itemstock_doc->createTextNode($ProductQuantityPerUnit));
			//$prodquaelem->appendChild($itemstock_doc->createTextNode("3241"));
			$new_item->appendChild($prodquaelem);

			$produnielem=$itemstock_doc->createElement("ProductUnitPrice");
			$produnielem->appendChild($itemstock_doc->createTextNode($ProductUnitPrice));
			//$produnielem->appendChild($itemstock_doc->createTextNode("12"));
			$new_item->appendChild($produnielem);

			$prodavaelem=$itemstock_doc->createElement("ProductAvailableStock");
			$prodavaelem->appendChild($itemstock_doc->createTextNode($ProductAvailableStock));
			//$prodavaelem->appendChild($itemstock_doc->createTextNode("31"));
			$new_item->appendChild($prodavaelem);

			$prodmaxelem=$itemstock_doc->createElement("ProductMaximumStock");
			$prodmaxelem->appendChild($itemstock_doc->createTextNode($ProductMaximumStock));
			//$prodmaxelem->appendChild($itemstock_doc->createTextNode("70"));
			$new_item->appendChild($prodmaxelem);

			$proddeselem=$itemstock_doc->createElement("ProductDescription");
			$proddeselem->appendChild($itemstock_doc->createTextNode($ProductDescription));
			//$proddeselem->appendChild($itemstock_doc->createTextNode("I love myself"));
			$new_item->appendChild($proddeselem);

			($itemstock_doc->childNodes)[0]->appendChild($new_item);
			$itemstock_doc->save("itemstock.xml");

			
		//}

		echo "<script> location.href='P7.php'; </script>";
        exit;
	
    ?>
</body>
</html>