<?php
include('include/header.php');

include('include/nav.php');

?>

<!--main body-->
<div class="container mt-4 mt-md-5">
    <div class="row mb-5">
        <div class="col-md-5 pt-3">
            <div class="d-inline-flex p-3">
                <img src="asset/images/thumbsIcon.png" alt="metric" class="img-fluid">
                <span class="pt-4 pl-3"><b> Absolute and exact Values.</b></span>
            </div>
            <div class="d-inline-flex p-3">
                <img src="asset/images/weightIcon.png" alt="metric" class="img-fluid">
                <span class="pt-4 pl-3"><b> Convert into various weight measurements.</b></span>
            </div>
            <div class="d-inline-flex p-3 pb-5">
                <img src="asset/images/timeIcon.png" alt="metric" class="img-fluid">
                <span class="pt-4 pl-3"><b> Fast and Reliable.</b></span>
            </div>

        </div>

        <div class="col-md-7 cover-box p-5 shadow">
            <!--form for metric coversion-->
            <h3>Weight Converter</h3>
            <p>Type a value in any of the fields to convert between weight measurements:</p>

            <form action="" class="pt-2">
                <div class="form-group">
                    <label for="pounds">Pounds:</label>
                    <input type="number" class="form-control" id="pounds" placeholder="Pounds" oninput="weightConverter(this.id, this.value)" onchange="weightConverter(this.id, this.value)">
                </div>
                <div class="form-group">
                    <label for="kilograms">Kilograms:</label>
                    <input type="number" class="form-control" id="kilograms" placeholder="Kilograms" oninput="weightConverter(this.id, this.value)" onchange="weightConverter(this.id, this.value)">
                </div>
                <div class="form-group">
                    <label for="grams">Grams:</label>
                    <input type="number" class="form-control" id="grams" placeholder="Grams" oninput="weightConverter(this.id, this.value)" onchange="weightConverter(this.id, this.value)">
                </div>

            </form>
        </div>
        <!--tags-->

        <div class="pt-5 offset-md-5 offset-lg-7">
            <a href="/speed" class="btn btn-color mr-2 ml-3">Speed</a>
            <a href="/temperature" class="btn btn-color mr-2">Temperature</a>
            <a href="/length" class="btn btn-color mr-2">Length</a>
        </div>
    </div>
</div>
<!--end of main body-->

<?php include('include/footer.php'); ?>