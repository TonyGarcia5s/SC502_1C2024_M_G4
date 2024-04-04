<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gran Hotel Desamparados - ROOMS</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Nuestras Habitaciones</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
                <nav class="navbar navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <a class="navbar-brand" href="#">FILTERS</a>
                        <button class="navbar—toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-controls="">
                            <span class=" navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="#filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Disponibilidad</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-label" for="f1">Facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-label" for="f2">Facility two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-label" for="f3">Facility three</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="date" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="date" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 px-4">
                <div Class="Card mb-4 border—0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 ">
                            <img srec="images/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="md-3">simple room name</h5>
                        <div class="features mb-3">
                            <h6 class="mb-1">features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 sofa
                            </span>
                        <div>
                        <div>

                        </div>
                        
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card wit</p>
                                    <p elass="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="facilities mb-3">
                    <h6 class="mb-1">facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 sofa
                            </span>
                    </div>
                    <div class="guests">
                    <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 bathroom
                            </span>
                    </div>
                    <div class="col-md-2 text-align-center">
                        <h6 class="mb-4">$200 per night</h6>
                        <a href="#" class="btn btn-sm w-100text-white custom-bg shadow-none mb-2">Book Now</a>
                        <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>

                    </div>
                </div>
            </div>
            </div>

            <?PHP require(' inc/footer.php'); ?>

</body>

</html>