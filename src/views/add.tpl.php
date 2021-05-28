<div class="container m-5">
    <h1 class="m-3 p-3">Product Add</h1>
    <form class="m-3" method="post" action="insert">
        <div class ="form-group row p-3">
            <label class="col-2" for="input_name">Name</label>
            <input class="col-4 form-control" type="text" id="input_name" name="name" required><br>
        </div>
        <div class="form-group row p-3">
            <label class="col-2" for="input_price">Price ($)</label>
            <input class="col-4 form-control" type="number" step="0.01" id="input_price" name="price" required><br>
        </div>
        <div class="form-group row p-3">
            <label class="col-2" for="input_type">Type</label>
            <select class="col-4 form-control" id="select_type" id="input_type" name="type" required>
                <option value="" selected disabled hidden>Select the type of product</option>
                <option value="dvd">DVD</option>
                <option value="book">Book</option>
                <option value="furniture">Furniture</option>
            </select><br>
        </div>
        <div class="form-group row dvd_attributes_container p-3" hidden>
            <label class="col-2" for="input_size">Size (MB)</label>
            <input class="form-control col-4 dvd_attributes_input" type="number" id="input_size" name="size" disabled>
        </div>
        <div class="form-group row book_attributes_container p-3" hidden>
            <label class="col-2" for="input_weight">Weight (KG)</label>
            <input class="form-control col-4 book_attributes_input" type="number" id="input_weight" name="weight" disabled>
        </div>
        <div class="form-group row furniture_attributes_container p-3" hidden>
            <label class="col-2"  for="input_height">Height (CM)</label>
            <input class="form-control col-4 furniture_attributes_input" type="number" id="input_height" name="height" disabled>
        </div>
        <div class="form-group row furniture_attributes_container p-3" hidden>
            <label class="col-2"  for="input_width">Width (CM)</label>
            <input class="form-control col-4 furniture_attributes_input" type="number" id="input_width" name="width" disabled>
        </div>
        <div class="form-group row furniture_attributes_container p-3" hidden>
            <label class="col-2"  for="input_length">Length (CM)</label>
            <input class="form-control col-4 furniture_attributes_input" type="number" id="input_length" name="length" disabled>
        </div>
        <input class="btn btn-danger m-3" type="submit">
        <a class="btn btn-warning m-3" href="list">Cancel</a>
    </form>
</div>