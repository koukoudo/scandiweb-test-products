<div class="container m-5 d-flex flex-column align-items-start justify-content-start">
    <h1 class="m-3 p-3">Product List</h1>
    <div class="container p-0 m-3">
        <a class="ml-3 btn btn-danger align-self-end" href="add">Add</a>
        <button class="ml-3 btn btn-warning align-self-end" id="btn_delete">Mass Delete</button>
    </div>
</div>

<div class="container-fluid m-0 pl-5 row">
    <?php foreach ($data as $product): ?>
        <div class="container col-3 mt-3 mb-3 ml-0 mr-0 d-flex justify-content-start align-items-center">
            <div class="container border p-3 m-3">
                <input class="check_product" type="checkbox" id="<?=$product[0]?>">
                <ul class="list-unstyled d-flex flex-column justify-content-center align-items-center">
                    <li>
                        <?=$product[0]?>
                    </li>
                    <li>
                        <?=$product[1]?>
                    </li>
                    <li>
                        $<?=$product[2]?>
                    </li>
                    <li>
                        <?=$product[3]?>
                    </li>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
</div>