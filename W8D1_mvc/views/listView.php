<?php
//(0:29:)
echo "listView.php - test print view<br>"; // (1:19:)
require_once __DIR__ . "/../components/modifyForm.php"; //(2:17:)
class listView
{   // (0:53:)
    private $productList;
    // (1:13:)
    public function __construct($data = [])
    {
        $this->productList = $data;
        // var_dump($this->productList); // (1:13:)
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
                        <!-- (1:01:) -->
                        <td><?= $product["name"] ?></td>
                        <td><?= $product["price"] ?></td>
                        <!-- <td>Name</td>
                    <td>Price</td> -->
                        <td>
                            <!-- (2:30:) -->
                            <a href="/PHP2020_RCS/W8D1_mvc/?page=list&action=modify&product_id=<?= $product["id"] ?>">Edit</a>
                            <!-- (1:46:) -->
                            <a href="/PHP2020_RCS/W8D1_mvc/?page=delete&product_id=<?= $product["id"] ?>">Delete</a>
                            <!-- <button>Edit</button>
                        <button>Delete</button> -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
<?php
    }
}
?>