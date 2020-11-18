<?php
// (1:37:) copied from W8D2

use W8D3\entity\Product; //(2::)

echo "listView.php - test print view W8D3<br>"; // (1:19:)
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
        echo "listView.php - List View - test from function W8D3<br><br>";
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
                    <td>Category</td><!-- (2:42:) -->
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <!-- dinamic part -->
                <!-- (0:58:)(2:40:) -->
                <?php foreach ($this->productList as $item) {
                    $product = new Product();
                    $product->setName($item["name"]);
                    $product->setCategoryId($item["category_id"]);
                    ?>
                    <tr>
                        <!-- (1:01:)(2:42:) -->
                        <td><?= $product->getName() ?></td>
                        <td><?= $item["price"] ?></td>
                        <td><?= $product->getCategoryName() ?></td>
                        <!-- <td>Name</td>
                    <td>Price</td> -->
                        <td>
                            <!-- (2:30:)(2::) -->
                            <a href="/PHP2020_RCS/W8D3/?page=list&action=modify&product_id=<?= $item["id"] ?>">Edit</a>
                            <!-- (1:46:)(2::) -->
                            <a href="/PHP2020_RCS/W8D3/?page=delete&product_id=<?= $item["id"] ?>">Delete</a>
                            <!-- <button>Edit</button>
                        <button>Delete</button> -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- (2:40:) -->
        <a href="/PHP2020_RCS/W8D3/?page=list&action=modify">Add product</a>

        <!-- (2:16:) W8D2 -->
        <form method="post">
            <input type="hidden" name="logOut">
            <button type="submit">Log Out</button>
        </form>
<?php
    }
}
?>