<?php
include('include/header.php');

include('include/nav.php');

?>


<div class="container mt-4 mt-md-5">
    <div class="row mb-5">
        <div class="col-md-5 pt-3">
            <div class="d-inline-flex p-3">
                <img src="asset/images/timeIcon.png" alt="metric" class="img-fluid">
                <span class="pt-4 pl-3"><b> Convert into various speed measurements.</b></span>
            </div>
            <div class="d-inline-flex p-3">
                <img src="asset/images/circleHome.png" alt="metric" class="img-fluid">
                <span class="pt-4 pl-3"><b> Anywhere and Anytime</b></span>
            </div>
            <div class="d-inline-flex p-3 pb-5">
                <img src="asset/images/thumbsIcon.png" alt="metric" class="img-fluid">
                <span class="pt-4 pl-3"><b> Fast and Reliable.</b></span>
            </div>

        </div>

        <div class="col-md-7 cover-box p-5 shadow">
            <!--form for metric coversion-->
            <h3>Speed Converter</h3>
            <p>Type a value in any of the fields to convert between speed measurements:</p>

            <form action="" class="pt-2">
                <div class="form-group">
                    <label for="mph">MPH:</label>
                    <input type="number" class="form-control" id="mph" placeholder="MPH" oninput="speedConverter(this.id, this.value)" onchange="speedConverter(this.id, this.value)">
                </div>
                <div class="form-group">
                    <label for="kph">KPH:</label>
                    <input type="number" class="form-control" id="kph" placeholder="KPH" oninput="speedConverter(this.id, this.value)" onchange="speedConverter(this.id, this.value)">
                </div>
                <div class="form-group">
                    <label for="knots">Knots:</label>
                    <input type="number" class="form-control" id="knots" placeholder="Knots" oninput="speedConverter(this.id, this.value)" onchange="speedConverter(this.id, this.value)">
                </div>

            </form>
        </div>
        <!--tags-->

        <div class="pt-5 offset-md-5 offset-lg-7">
            <a href="/" class="btn btn-color mr-2 ml-3">Weight</a>
            <a href="/temperature" class="btn btn-color mr-2">Temperature</a>
            <a href="/length" class="btn btn-color mr-2">Length</a>
        </div>
    </div>

</div>



<?php include('include/footer.php'); ?>