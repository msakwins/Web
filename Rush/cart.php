<?php
require_once("index.php");
?>
<html>
    <body>
        <div id="tablescroll">
                <table>
                        <tr>
                                <th>Img</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                        </tr>
						<?php
							$_SESSION['bag'][] = $_POST;
							for ($i = 0; $_SESSION['bag'][$i]; $i++){
								echo "<td class=\"img\"></td>
                                <td class=\"product\">".$_SESSION['bag'][$i]['name']."</td>
                                <td class\"price\">".$_SESSION['bag'][$i]['price']."</td>
                                <td class=\"modify\">
                                        <div class=\"quantity\"><input type=\"number\" min=\"0\"></div>
                                </td>
                        </tr>";}?>
                </table>
                <button href="http://e2r1p12.42.fr:8082/Rush00/html/cart.html" type="button" class="continue">Continue</button>
            </button>
            </div>
        </body></html>
