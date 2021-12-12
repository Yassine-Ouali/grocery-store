<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Back page</title>
</head>
<body>



    <?php
	
		if(isset( $_POST['save']))
		{
			$ProductNumber= $_POST['pn'];
			$ProductName= $_POST['name'];
		    $ProductBrand= $_POST['brand'];
		    $ProductCategory= $_POST['productcategory'];
            $ProductQuantityPerUnit= $_POST['quant_per_product'];
            $ProductUnitPrice = $_POST['uprice'];
            $ProductAvailableStock= $_POST['productavailablestock'];
            $ProductMaximumStock= $_POST['maxstock'];
            $ProductDescription = $_POST['productdescription'];
			
			$itemstock_doc = new DOMDocument();
			$itemstock_doc->preserveWhiteSpace = false;
            $itemstock_doc->formatOutput = true;
            $itemstock_doc->load("itemstock.xml");

			$items = $itemstock_doc->documentElement;

            foreach (($itemstock_doc->childNodes)[0]->childNodes as $node){
			
				$concernednumber=($node->GetElementsByTagname("ProductNumber"))[0]->nodeValue;
				if ($ProductNmber == $concernednumber)
				{
					echo "<script>alert('Product number already in use.'); document.location='P7.html'</script>";
					exit();
				}
			
			}
			
			$new_item = $itemstock_doc->createElement("item");
			$prodnumelem=$itemstock_doc->createElement("ProductNumber");
			$prodnumelem->appendChild(createTextNode($ProductNumber));
			$new_item->appendChild($prodnumelem);

			$prodnamelem=$itemstock_doc->createElement("ProductName");
			$prodnamelem->appendChild(createTextNode($ProductName));
			$new_item->appendChild($prodnumelem);

			$prodbraelem=$itemstock_doc->createElement("ProductBrand");
			$prodbraelem->appendChild(createTextNode($ProductBrand));
			$new_item->appendChild($prodnumelem);

			$prodnumelem=$itemstock_doc->createElement("ProductCategory");
			$prodnumelem->appendChild(createTextNode($ProductCategory));
			$new_item->appendChild($prodnumelem);

			$prodquaelem=$itemstock_doc->createElement("ProductQuantityPerUnit");
			$prodqquaelem->appendChild(createTextNode($ProductQuantityPerUnit));
			$new_item->appendChild($prodnumelem);

			$produnitelem=$itemstock_doc->createElement("ProductUnitPrice");
			$produnielem->appendChild(createTextNode($ProductUnitPrice));
			$new_item->appendChild($prodnumelem);

			$prodavaelem=$itemstock_doc->createElement("ProductAvailableStock");
			$prodavaelem->appendChild(createTextNode($ProductAvailableStock));
			$new_item->appendChild($prodnumelem);

			$prodmaxelem=$itemstock_doc->createElement("ProductMaximumStock");
			$prodmaxelem->appendChild(createTextNode($ProductMaximumStock));
			$new_item->appendChild($prodnumelem);

			$proddeselem=$itemstock_doc->createElement("ProductDescription");
			$proddeselem->appendChild(createTextNode($ProductDescription));
			$new_item->appendChild($prodnumelem);

			($itemstock_doc->childNodes)[0]->appendChild($new_item);
			$itemstock_doc->save("itemstock.xml");

			
		}

		echo "<script> location.href='P7.php'; </script>";
        exit;
	
    ?>
</body>
</html>