<?php

require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Chiox | Register</title>
</head>


<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card">

                <div class="card-header">
                    Register As a Business Owner
                </div>
                <div class="card-body mx-lg-4">
                    <div class="row g-3">

                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">Full Name :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <input id="fname" type="text" class="form-control ">
                                </div>
                            </div>


                        </div>

                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">Business Name :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <input id="bname" type="text" class="form-control ">
                                </div>
                            </div>


                        </div>



                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">Status :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <div class="row pt-1">
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="" name="register" id="registered">
                                                <label class="form-check-label" for="registered">
                                                    Registered
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-8 d-flex ps-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="" name="register" id="Nregistered">
                                                <label class="form-check-label" for="Nregistered">
                                                    Not Registered
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>


                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">Business Registration Number :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <input id="bnumber" type="number" class="form-control" placeholder="(Optional)">
                                </div>
                            </div>


                        </div>

                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">Business Address Line 1 :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <input id="add1" type="text" class="form-control ">
                                </div>
                            </div>


                        </div>


                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">NIC no :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <input id="nic" name="price" type="text" class="form-control ">
                                </div>
                            </div>


                        </div>

                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">Business Address line 2 :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <input id="add2" name="price" type="text" class="form-control ">
                                </div>
                            </div>


                        </div>

                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">Busniess Category :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <select id="cat" class="form-select" aria-label="Default select example">
                                        <option selected value="0">Select A Business Category</option>
                                        <?php
                                        $businessRs = Database::search("SELECT * FROM `business_category` ");
                                        $businessRsn = $businessRs->num_rows;
                                        for ($i = 0; $i < $businessRsn; $i++) {
                                            $businessData = $businessRs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo $businessData["id"]; ?>"><?php echo $businessData["name"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">Email Address :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <input id="email" name="price" type="text" class="form-control ">
                                </div>
                            </div>


                        </div>

                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">Mobile Number :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <input type="text" id="Mnumber" class="form-control ">
                                </div>
                            </div>


                        </div>

                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">LAN Number :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <input id="Lnumber" type="text" class="form-control ">
                                </div>
                            </div>


                        </div>


                        <div class="col-12 col-lg-6 ">

                            <div class="row ">
                                <div class="col-12 col-lg-6 d-flex align-items-center">
                                    <span class="fs-5">Application Type :</span>
                                </div>
                                <div class="col-12 col-lg-6 ">
                                    <select id="type" class="form-select" aria-label="Default select example">
                                        <option selected value="0">Select A Application Type</option>
                                        <?php
                                        $appRs = Database::search("SELECT * FROM `app_type` ");
                                        $appRsn = $appRs->num_rows;
                                        for ($i = 0; $i < $appRsn; $i++) {
                                            $appData = $appRs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo $appData["id"]; ?>"><?php echo $appData["name"]; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <span id="msg"></span>


                        <div class="col-12 col-lg-6 d-flex justify-content-center">
                            <img id="prew" class="img-fluid productImage ">

                        </div>
                        <div class="col-12 ">
                            <div class="row ">
                                <div class="col-12 d-flex align-items-center">
                                    <span class="fs-5">Other Notes :</span>
                                </div>
                                <div class="col-12 pt-2">
                                    <textarea id="other" name="description" id="" class="form-control" rows="5" placeholder="(Optional)"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" onclick="registeCustomer();">Register</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="script.js"></script>
</body>

</html>