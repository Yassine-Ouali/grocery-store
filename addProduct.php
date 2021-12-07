<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Back page</title>
</head>
<body>
    <?php
	
		if(isset( $_POST['add']))
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
			
			$items = $itemstock_doc->getElementsByTagName('item');
			
			foreach ($items as $item)
			{
				$concernednumber=$element->getElementsByTagName->item(0);
				if ($ProductNmber == $concernednumber)
				{
					echo "<script>alert('Product number already in use.'); document.location='P7.html'</script>";
					exit();
				}
			
			}
			
			$new_item = $itemstock_doc->createElement("item")
			$new_item->appendChild(createElement("ProductNumber",$ProductNumber))
			$new_item->appendChild(createElement("ProductName",$ProductName))
			$new_item->appendChild(createElement("ProductBrand",$ProductBrand))
			$new_item->appendChild(createElement("ProductCategory",$ProductCategory))
			$new_item->appendChild(createElement("ProductQuantityPerUnit",$ProductQuantityPerUnit))
			$new_item->appendChild(createElement("ProductUnitPrice ",$ProductUnitPrice ))
			$new_item->appendChild(createElement("ProductAvailableStock",$ProductAvailableStock))
			$new_item->appendChild(createElement("ProductMaximumStock",$ProductMaximumStock))
			$new_item->appendChild(createElement("ProductDescription ",$ProductDescription ))
			$itemstock_doc->getElementsByTagName('items')->item(0)->appendChild($new_item)
			$itemstock_doc->save("itemstock.xml");
		}
	
    ?>
</body>
</html>