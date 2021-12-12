<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Back page</title>
</head>
<body>



    <?php

			$ProductNumber= $_GET['product'];
			
			$itemstock_doc = new DOMDocument();
			$itemstock_doc->preserveWhiteSpace = false;
            $itemstock_doc->formatOutput = true;
            $itemstock_doc->load("itemstock.xml");

			$items = $itemstock_doc->documentElement;

            foreach (($itemstock_doc->childNodes)[0]->childNodes as $node){
			
				$concernednumber=($node->GetElementsByTagname("ProductNumber"))[0]->nodeValue;
				if ($ProductNumber == $concernednumber)
				{
					($node->parentNode)->removeChild($node);
				}
			
			}
			
			$itemstock_doc->save("itemstock.xml");


		echo "<script> location.href='P7.php'; </script>";
        exit;
	
    ?>
</body>
</html>