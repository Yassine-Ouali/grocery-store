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
			$ProductNumber= $_GET['product'];
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
					($node->GetElementsByTagname("ProductNumber"))[0]->nodeValue = $ProductNumber;
                    ($node->GetElementsByTagname("ProductName"))[0]->nodeValue= $ProductName;
                    ($node->GetElementsByTagname("ProductCategory"))[0]->nodeValue= $ProductCategory;
					($node->GetElementsByTagname("ProductQuantityPerUnit"))[0]->nodeValue=$ProductQuantityPerUnit;
                	($node->GetElementsByTagname("ProductUnitPrice"))[0]->nodeValue = $ProductUnitPrice;
                	($node->GetElementsByTagname("ProductAvailableStock"))[0]->nodeValue=$ProductAvailableStock;
					($node->GetElementsByTagname("ProductMaximumStock"))[0]->nodeValue=$ProductMaximumStock;
					($node->GetElementsByTagname("ProductDescription"))[0]->nodeValue=$ProductDescription;
				}
			
			}
			
			
			$itemstock_doc->save("itemstock.xml");

			
		//}

		echo "<script> location.href='P7.php'; </script>";
        exit;
	
    ?>
</body>
</html>