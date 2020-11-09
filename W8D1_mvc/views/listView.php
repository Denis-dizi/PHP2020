<?php

class listView
{
    private $productList;

    public function __construct($data)
    {
        $this->productList = $data;
    }

    public function html()
    {
        // echo "List View";
?>
        <table>
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
        </table>
<?php


    }
}
?>