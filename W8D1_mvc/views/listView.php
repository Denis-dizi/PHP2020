<?php
//(0:29:)
echo "listView.php - test print view";
?> <br><?php
        class listView
        {
            private $productList;

            // public function __construct($data = [])
            // {
            //     $this->productList = $data;
            // }

            public function html()
            { // (0:30:)
                echo "listView.php - List View - test from function";
        ?>
        <!-- <table>
            <thead>
                <tr>
                    <td colspan="3">Products</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->productList as $product) { ?>
                    <tr>
                        <td><?= $product["name"] ?></td>
                        <td><?= $product["price"] ?></td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table> -->

        <!-- <table>
            <thead>
                <tr>
                    <td>
                    <td colspan="3">Products</td>
                </tr>
                <tr>
                    <td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->productList as $product) { ?>
                    <tr>
                        <td>
                        <td>name</td>
                        <td>price</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table> -->

<?php
            }
        }
?>