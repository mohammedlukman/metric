<?php
include('include/header.php');

include('include/nav.php');

?>

<div class="container mt-4 mt-md-5">
    <div class="row mb-5">
        <div class="col-md-5 pt-3">
            <div class="d-inline-flex p-3">
                <img src="asset/images/tempIcon.png" alt="metric" class="img-fluid">
                <span class="pt-4 pl-3"><b> Convert into various temperature measurements.</b></span>
            </div>
            <div class="d-inline-flex p-3">
                <img src="asset/images/timeIcon.png" alt="metric" class="img-fluid">
                <span class="pt-4 pl-3"><b> Fast and Reliable.</b></span>
            </div>
            <div class="d-inline-flex p-3 pb-5">
                <img src="asset/images/circleHome.png" alt="metric" class="img-fluid">
                <span class="pt-4 pl-3"><b> Anytime and Anywhere.</b></span>
            </div>

        </div>

        <div class="col-md-7 cover-box p-5 shadow">
            <!--form for metric coversion-->
            <h3>Temperature Converter</h3>
            <p>Type a value in any of the fields to convert between temperature measurements:</p>

            <form action="" class="pt-2">
                <div class="form-group">
                    <label for="celsius">Celsius:</label>
                    <input type="number" class="form-control" id="celsius" placeholder="Celsius" oninput="tempConverter(this.id, this.value)" onchange="tempConverter(this.id, this.value)">
                </div>
                <div class="form-group">
                    <label for="kelvin">Kelvin:</label>
                    <input type="number" class="form-control" id="kelvin" placeholder="Kelvin" oninput="tempConverter(this.id, this.value)" onchange="tempConverter(this.id, this.value)">
                </div>
                <div class="form-group">
                    <label for="fahr">Fahrenheit:</label>
                    <input type="number" class="form-control" id="fahr" placeholder="Fahrenheit" oninput="tempConverter(this.id, this.value)" onchange="tempConverter(this.id, this.value)">
                </div>

            </form>
        </div>
        <!--tags-->

        <div class="pt-5 offset-md-5 offset-lg-7">
            <a href="/index" class="btn btn-color mr-2 ml-3">Weight</a>
            <a href="/speed" class="btn btn-color mr-2">Speed</a>
            <a href="/length" class="btn btn-color mr-2">Length</a>
        </div>
    </div>

</div>

<?php include('include/footer.php'); ?>