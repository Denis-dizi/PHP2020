<?php
//(0:29:)
echo "listView.php - test print view<br>";
class listView
{   // (0:53:)
    private $productList;

    public function __construct($data = [])
    {
        $this->productList = $data;
    }

    public function html()
    { // (0:30:)
        echo "listView.php - List View - test from function <br><br>";
?>
        <!-- // (0:37:) -->
        <table>
            <thead>
                <!-- main part -->
                <tr>
                    <td colspan="3">Products</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <!-- dinamic part -->
                <!-- (0:58:) -->
                <?php foreach ($this->productList as $product) { ?> 
                    <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    }
}
// <td><?= $product["name"] ></td>
// <td><?= $product["price"] ></td>

?>