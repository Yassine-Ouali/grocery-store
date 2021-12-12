<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Final (copy) (copy)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/inventoryeditstyles.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/background-page.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web\fontawesome-free-5.15.4-web\css\all.css">
</head>

<body style="background: rgb(0,0,0);border-color: var(--bs-light);color: rgb(255,255,255);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="color: var(--bs-white);background: rgb(0,0,0);">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">THE FRESH MARKET</a><a class="navbar-brand" href="#" style="color: var(--bs-success);">Backstore</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="color: rgb(255,255,255);"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon">V</span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="P7.html" style="color: rgb(255,255,255);" data-bs-target="P7.html">Inventory</a></li>
                    <li class="nav-item"><a class="nav-link" href="P9.html" style="color: rgb(255,255,255);" data-bs-target="P9.html">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="P11.html" style="color: rgb(255,255,255);">Orders</a></li>
                </ul><span class="navbar-text actions"> </span>
            </div>
        </div>
    </nav>
    <div style="height: 155px;margin: 0;">
        <div style="margin: 0px;height: 100%;color: #ffffff;background: #000000;/*border-radius: 4px;*/">
            <h1 style="text-align: left;margin-left: 15px;">Inventory List<br><br></h1><a class="btn btn-primary" role="button" style="/*position: absolute;*//*left: 15px;*//*-ms-transform: translateX(-50%);*/transform: translateX(15px);/*font-weight: bold;*/" href="P8.html">&nbsp; ADD&nbsp;&nbsp;</a>
        </div>
    </div>
    <div style="height: 400;background: #000000;margin: 0px;display: block;border-radius: 4px;margin-left: 15px;color: #ffffff;">
        <div class="table-responsive" style="/*border-radius: 4px;*/margin-left: 15;color: rgb(255,255,255);">
                    <?php
                        echo "<table class=\"table\" style=\"position: relative;height: 200px;overflow: scroll;\">\n";
                        echo "<thead style=\"background: var(--bs-gray-dark);\">\n";
                                        echo "<tr>\n";
                                        echo "<th style=\"color: rgb(13, 110, 253);border-color: var(--bs-secondary);\">Serial Number</th>\n";
                                        echo "<th style=\"color: rgb(13, 110, 253);border-color: var(--bs-secondary);\">Name</th>\n";
                                        echo "<th style=\"color: rgb(13, 110, 253);border-color: var(--bs-secondary);\">Category</th>\n";
                                        echo "<th style=\"color: rgb(13, 110, 253);border-color: var(--bs-gray);width: 131.4px;\">Price(CAD)</th>\n";
                                        echo "<th style=\"color: rgb(13, 110, 253);border-color: var(--bs-secondary);\">Stock</th>\n";
                                        echo "<th style=\"width: 168px;color: rgb(13, 110, 253);border-color: var(--bs-secondary);\">Action</th>\n";
                                    echo "</tr>\n";
                                echo "</thead>\n";
                                echo "<tbody style=\"color: rgb(255,255,255);\">\n";

                        $itemstock_doc = new DOMDocument();
                        $itemstock_doc->preserveWhiteSpace = false;
                        $itemstock_doc->load("itemstock.xml");
                        $items = $itemstock_doc->documentElement;

                        foreach (($itemstock_doc->childNodes)[0]->childNodes as $node)
                            {
                                $ProNumber = ($node->GetElementsByTagname("ProductNumber"))[0]->nodeValue;
                                $ProName= ($node->GetElementsByTagname("ProductName"))[0]->nodeValue;
                                $ProCategory= ($node->GetElementsByTagname("ProductCategory"))[0]->nodeValue;
                                $ProUnitPrice = ($node->GetElementsByTagname("ProductUnitPrice"))[0]->nodeValue;
                                $ProAvailableStock= ($node->GetElementsByTagname("ProductAvailableStock"))[0]->nodeValue;

                                echo "<tr>\n";
                                echo "	<td>{$ProNumber}<br></td>\n";
                                echo "	<td>{$ProName}</td>\n";
                                echo "	<td>{$ProCategory}</td>\n";
                                echo "	<td>{$ProUnitPrice}</td>\n";
                                echo "	<td>{$ProAvailableStock}</td>\n";
                                echo "	<td><a class=\"btn btn-primary\" role=\"button\" style=\"background: var(--bs-success);border-width: 1px;border-color: var(--bs-green);font-weight: bold;margin: 0px 2px;\" href=\"P8.php?product={$ProNumber}\">EDIT</a><button class=\"btn btn-primary\" type=\"button\" style=\"background: var(--bs-red);font-weight: bold;margin: 0px 2px;border-width: 1px;border-color: var(--bs-danger);\">DELETE</button></td>\n";
                                echo "</tr>\n";
                            }
                    ?>
                </tbody>    
            </table>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
