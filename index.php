<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/68bb6cb950.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ROP Score Calculator</title>
</head>

<!-- Page body -->

<body>

    <div class="container">
        <br>

        <!-- Jumbotron -->

        <div class="jumbotron bg-primary text-white">
            <h1><i class="far fa-eye"></i> ROP Score Calculator </h1>
        </div>

        <!-- Form -->

        <form action="" method="POST">

            <div class="row">

                <!-- Form left side -->

                <div class="col-md-6">

                    <!-- Birth Weight -->

                    <div class="form-group">
                        <label for="birth_weight">Birth Weight (g)
                            <span class="badge badge-pill badge-danger">UK</span>
                            <span class="badge badge-pill badge-warning">US</span>
                            <span class="badge badge-pill badge-success">EL</span>
                            <span class="badge badge-pill badge-primary">G</span>
                            <span class="badge badge-pill badge-info">RS</span>
                            <span class="badge badge-pill badge-dark">CHOP</span>
                        </label>
                        <input type="number" min="242" max="1600" id="birth_weight_entry" class="form-control" name="birth_weight" required aria-describedby="" placeholder="">
                    </div>

                    <!-- Gestation Age -->

                    <div class="row">
                        <!-- <div class="col-md-6"> -->
                        <div class="col">
                            <div class="form-group">
                                <label for="gestation_weeks">Gestation Age (weeks)
                                    <span class="badge badge-pill badge-danger">UK</span>
                                    <span class="badge badge-pill badge-warning">US</span>
                                    <span class="badge badge-pill badge-success">EL</span>
                                    <span class="badge badge-pill badge-primary">G</span>
                                    <span class="badge badge-pill badge-info">RS</span>
                                    <span class="badge badge-pill badge-dark">CHOP</span>
                                </label>
                                <input type="number" min="24" max="33" id="gestation_weeks_entry" class="form-control" name="gestation_weeks" required placeholder="">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="gestation_days">Gestation Age (days)</label>
                                <input type="number" class="form-control" name="gestation_days" placeholder="">
                            </div>
                        </div> -->
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <!-- Ethnicity -->

                            <legend class="col-form-label">Ethnicity &nbsp; <small onclick="why_ethnicity()" class="text-primary"><u>Why?</u></small>
                                <span class="badge badge-pill badge-success">EL</span>
                            </legend>

                            <script>
                                function why_ethnicity() {
                                    alert("Black ethnicity is a risk factor for severe Retinopathy of Prematurity")
                                }
                            </script>

                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="ethnicity_radio" id="ethnicity_radio_1" value="Black" required <?php
                                                                                                                                                    if ($_COOKIE['EL'] == 'disabled') {
                                                                                                                                                        echo 'disabled';
                                                                                                                                                    }
                                                                                                                                                    ?>>
                                <label class="form-check-label" for="Black">
                                    Black
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="ethnicity_radio" id="ethnicity_radio_2" value="Other" <?php
                                                                                                                                            if ($_COOKIE['EL'] == 'disabled') {
                                                                                                                                                echo 'disabled';
                                                                                                                                            }
                                                                                                                                            ?>>
                                <label class="form-check-label" for="Other">
                                    Other
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <!-- Sex -->

                            <legend class="col-form-label">Sex &nbsp; <small onclick="why_sex()" class="text-primary"><u>Why?</u></small></legend>

                            <script>
                                function why_sex() {
                                    alert("Male sex is a risk factor for severe Retinopathy of Prematurity")
                                }
                            </script>

                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="sex_radio" id="sex_radio_1" value="Male">
                                <label class="form-check-label" for="Male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="sex_radio" id="sex_radio_2" value="Female">
                                <label class="form-check-label" for="Female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Start test 6 -->
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Blood Transfusion -->

                            <legend class="col-form-label">Blood Transfusion
                                <span class="badge badge-pill badge-info">RS</span>
                            </legend>

                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="transfusion_radio" id="transfusion_radio_1" value="Yes" <?php
                                                                                                                                            if ($_COOKIE['ROP'] == 'disabled') {
                                                                                                                                                echo 'disabled';
                                                                                                                                            }
                                                                                                                                            ?>>
                                <label class="form-check-label" for="Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="transfusion_radio" id="transfusion_radio_2" value="No" <?php
                                                                                                                                            if ($_COOKIE['ROP'] == 'disabled') {
                                                                                                                                                echo 'disabled';
                                                                                                                                            }
                                                                                                                                            ?>>
                                <label class="form-check-label" for="No">
                                    No
                                </label>
                            </div>
                        </div>
                        <!-- Mid Test 6 -->
                        <div class="col-md-6">

                            <!-- Mechanical Ventilation -->

                            <legend class="col-form-label">Mechanical Ventilation
                                <span class="badge badge-pill badge-info">RS</span>
                            </legend>

                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="ventilation_radio" id="ventilation_radio_1" value="Yes" <?php
                                                                                                                                            if ($_COOKIE['ROP'] == 'disabled') {
                                                                                                                                                echo 'disabled';
                                                                                                                                            }
                                                                                                                                            ?>>
                                <label class="form-check-label" for="Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="ventilation_radio" id="ventilation_radio_2" value="No" <?php
                                                                                                                                            if ($_COOKIE['ROP'] == 'disabled') {
                                                                                                                                                echo 'disabled';
                                                                                                                                            }
                                                                                                                                            ?>>
                                <label class="form-check-label" for="No">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- End test 6 -->

                </div>

                <!-- Form right side -->

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="_6_week_weight">Weight at 6 weeks (g)
                                    <span class="badge badge-pill badge-success">EL</span>
                                    <span class="badge badge-pill badge-info">RS</span>
                                </label>
                                <input id="_6_week_weight_input" type="number" class="form-control" name="_6_week_weight" aria-describedby="" placeholder="" <?php
                                                                                                                                                                if (($_COOKIE['EL'] == 'disabled') && ($_COOKIE['ROP'] == 'disabled')) {
                                                                                                                                                                    echo 'disabled';
                                                                                                                                                                }
                                                                                                                                                                ?>>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="_10_19_day_weight">Weight gain days 10-19 (g)
                                    <span class="badge badge-pill badge-primary">G</span>
                                </label>
                                <input type="number" class="form-control" id="_10_19_day_weight_input" name="_10_19_day_weight" aria-describedby="" placeholder="" <?php
                                                                                                                                                                    if ($_COOKIE['G'] == 'disabled') {
                                                                                                                                                                        echo 'disabled';
                                                                                                                                                                    }
                                                                                                                                                                    ?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="_20_29_day_weight">Weight gain days 20-29 (g)
                                    <span class="badge badge-pill badge-primary">G</span>
                                </label>
                                <input type="number" class="form-control" id="_20_29_day_weight_input" name="_20_29_day_weight" aria-describedby="" placeholder="" <?php
                                                                                                                                                                    if ($_COOKIE['G'] == 'disabled') {
                                                                                                                                                                        echo 'disabled';
                                                                                                                                                                    }
                                                                                                                                                                    ?>>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="_30_39_day_weight">Weight gain days 30-39 (g)
                                    <span class="badge badge-pill badge-primary">G</span>
                                </label>
                                <input type="number" class="form-control" id="_30_39_day_weight_input" name="_30_39_day_weight" aria-describedby="" placeholder="" <?php
                                                                                                                                                                    if ($_COOKIE['G'] == 'disabled') {
                                                                                                                                                                        echo 'disabled';
                                                                                                                                                                    }
                                                                                                                                                                    ?>>
                            </div>
                        </div>
                    </div>


                    <!-- Start test 7 -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="penultimate_week_weight_entry">Penultimate Week (g)
                                    <span class="badge badge-pill badge-dark">CHOP</span>
                                </label>
                                <input type="number" min="242" max="5000" id="penultimate_week_weight_entry" class="form-control" name="penultimate_week_weight" <?php
                                                                                                                                                                    if ($_COOKIE['CHOP'] == 'disabled') {
                                                                                                                                                                        echo 'disabled';
                                                                                                                                                                    }
                                                                                                                                                                    ?>>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="preceding_week_weight_entry">Preceding Week (g)
                                    <span class="badge badge-pill badge-dark">CHOP</span>
                                </label>
                                <input type="number" min="242" max="5000" id="preceding_week_weight_entry" class="form-control" name="preceding_week_weight" <?php
                                                                                                                                                                if ($_COOKIE['CHOP'] == 'disabled') {
                                                                                                                                                                    echo 'disabled';
                                                                                                                                                                }
                                                                                                                                                                ?>>
                            </div>
                        </div>
                    </div>

                    <!-- End test 7 -->

                </div>
            </div>

            <!-- Submission -->

            <br>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                </div>

        </form>

        <div class="col-md-6">
            <button type="button" onclick="return_values()" class="btn btn-block btn-primary">Return Data</button>
        </div>
    </div>



    <!-- Declare variables from POST -->

    <?php

    $birth_weight =                     $_POST['birth_weight'];
    $gestation_weeks =                  $_POST['gestation_weeks'];
    $gestation_days =                   $_POST['gestation_days'];
    $ethnicity_radio =                  $_POST['ethnicity_radio'];
    $sex_radio =                        $_POST['sex_radio'];
    $_6_week_weight =                   $_POST['_6_week_weight'];
    $_10_19_day_weight =                $_POST['_10_19_day_weight'];
    $_20_29_day_weight =                $_POST['_20_29_day_weight'];
    $_30_39_day_weight =                $_POST['_30_39_day_weight'];
    $transfusion_radio =                $_POST['transfusion_radio'];
    $ventilation_radio =                $_POST['ventilation_radio'];
    $penultimate_week_weight =          $_POST['penultimate_week_weight'];
    $preceding_week_weight =            $_POST['preceding_week_weight'];

    // Test 1 - UK Guidelines

    if (($birth_weight < 1501) || ($gestation_weeks < 32)) {
        $test_1 = 1;
    } else {
        $test_1 = 0;
    }

    // Test 2 - US Guidelines

    if (($birth_weight <= 1500) || ($gestation_weeks < 30)) {
        $test_2 = 1;
    } else {
        $test_2 = 0;
    }

    // Test 3 - EL-ROP

    if ($ethnicity_radio == 'Black') {
        $black_ethnicity = 1;
    } else {
        $black_ethnicity = 0;
    }

    if ($_6_week_weight > 0) {
        $_6_week_weight_gain = $_6_week_weight - $birth_weight;
    } else {
        $_6_week_weight = 0;
    }



    $ELROP = 20.28 + (-0.005 * $birth_weight) + (-0.628 * $gestation_weeks) + (-1.59 * $black_ethnicity) + (-0.0025 * $_6_week_weight_gain);

    if ($_6_week_weight > 0) {
        $eELROP = round(exp($ELROP), 2);
        if ($eELROP > 0.015) {
            $test_3 = 1;
        } else {
            $test_3 = 0;
        }
    } else {
        $_6_week_weight = "";
    }


    // Test 4 - G-ROP

    if ($gestation_weeks < 28 || $birth_weight < 1051) {
        $test_4 = 1;
    } else {
        if (!($_10_19_day_weight > 0)) {
            $test_4 = 'Please enter 10-19 day weight gain';
        } else if ($_10_19_day_weight < 120) {
            $test_4 = 1;
        } else {
            if (!($_20_29_day_weight > 0)) {
                $test_4 = 'Please enter 20-29 day weight gain';
            } else if ($_20_29_day_weight > 0 && $_20_29_day_weight < 180) {
                $test_4 = 1;
            } else {
                if (!($_30_39_day_weight > 0)) {
                    $test_4 = 'Please enter 30-39 day weight gain';
                } else if ($_30_39_day_weight > 0 && $_30_39_day_weight < 170) {
                    $test_4 = 1;
                } else {
                    $test_4 = 0;
                }
            }
        }
    }

    // Test 5 - Digirop

    // Test 6 - ROPSCORE

    if ($transfusion_radio == 'No') {
        $transfusion_value = 0;
    } else if ($transfusion_radio == 'Yes') {
        $transfusion_value = 1;
    }

    if ($ventilation_radio == 'No') {
        $ventilation_value = 0;
    } else if ($ventilation_radio == 'Yes') {
        $ventilation_value = 1;
    }

    if (($transfusion_value == 0 | $transfusion_value == 1)
        && ($ventilation_value == 0 | $ventilation_value == 1)
        && ($_6_week_weight_gain > 0)
    ) {
        $test_6_score = 24.847 - (0.004 * $birth_weight) - (0.263 * $gestation_weeks) - (1.258 * ($_6_week_weight_gain / $birth_weight)) + (1.920 * $ventilation_value) + (1.980 * $transfusion_value);
        if ($test_6_score > 14.5) {
            $test_6 = '1 - Severe';
        } else if ($test_6_score > 11) {
            $test_6 = '0 - Mild';
        } else {
            $test_6 = '0';
        }
        $test_6_score = round($test_6_score, 1);
    }

    // Test 7 - CHOP-ROP

    if ($gestation_weeks == 23) {
        $CHOP_GA_coefficient = 4.24;
    } else if ($gestation_weeks == 24) {
        $CHOP_GA_coefficient = 3.49;
    } else if ($gestation_weeks == 25) {
        $CHOP_GA_coefficient = 3.60;
    } else if ($gestation_weeks == 26) {
        $CHOP_GA_coefficient = 2.33;
    } else if ($gestation_weeks == 27) {
        $CHOP_GA_coefficient = 2.48;
    } else if ($gestation_weeks == 28) {
        $CHOP_GA_coefficient = 2.05;
    } else {$CHOP_GA_coefficient = 0;}

    $CHOP_weight_gain_rate = ($preceding_week_weight - $penultimate_week_weight) / 7;

    if (($penultimate_week_weight > 0) && ($preceding_week_weight > 0)) {
        $CHOP_risk_score = (-1.5) + $CHOP_GA_coefficient + (-0.0037 * $birth_weight) + (-0.0186 * $CHOP_weight_gain_rate);
    }

    $test_7_score = round((1 / (1 + exp(-$CHOP_risk_score))), 2);

    if ($test_7_score > 0.014) {
        $test_7 = 1;
    } else {
        $test_7 = 0;
    };

    // 

    ?>

    <br>

    <!-- Not a medical device alert -->

    <div class="alert alert-danger" role="alert">
        This calculator is for illustration only and must not be used for clinical decision making.
    </div>

    <br>

    <!-- Submitted Values -->


    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th style="width: 8%" scope="col">BW (g)</th>
                <th style="width: 8%" scope="col">GA (w)</th>
                <!-- <th style="width: 8%" scope="col">GA (d)</th> -->
                <th style="width: 8%" scope="col">Ethnicity</th>
                <th style="width: 8%" scope="col">Sex</th>
                <th style="width: 8%" scope="col">6-Week Gain (g)</th>
                <th style="width: 8%" scope="col">D10-19 (g)</th>
                <th style="width: 8%" scope="col">D20-29 (g)</th>
                <th style="width: 8%" scope="col">D30-39 (g)</th>
                <th style="width: 8%" scope="col">Blood T</th>
                <th style="width: 8%" scope="col">Mech V</th>
                <th style="width: 8%" scope="col">Pen (g)</th>
                <th style="width: 8%" scope="col">Pre (g)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $birth_weight ?></td>
                <td><?php echo $gestation_weeks ?></td>
                <!-- <td><?php echo $gestation_days ?></td> -->
                <td><?php echo $ethnicity_radio ?></td>
                <td><?php echo $sex_radio ?></td>
                <td><?php echo $_6_week_weight_gain ?></td>
                <td><?php echo $_10_19_day_weight ?></td>
                <td><?php echo $_20_29_day_weight ?></td>
                <td><?php echo $_30_39_day_weight ?></td>
                <td><?php if ($transfusion_radio == 1) {
                        echo "Yes";
                    } else if ($transfusion_radio == 0) {
                        echo "No";
                    }
                    ?></td>
                <td><?php if ($ventilation_radio == 1) {
                        echo "Yes";
                    } else if ($ventilation_radio == 0) {
                        echo "No";
                    }
                    ?></td>
                <td><?php echo $penultimate_week_weight ?></td>
                <td><?php echo $preceding_week_weight ?></td>
            </tr>
        </tbody>
    </table>


    <!-- Results Table -->

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th style="width: 33%" scope="col">Test</th>
                <th style="width: 33%" scope="col">Screen</th>
                <th style="width: 33%" scope="col">Test Score</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">
                    <h5><span class="badge badge-danger">UK</span> &nbsp; <a href=""><small><small>Info <i class="fas fa-link"></i></small></small></a> </h5>
                </td>
                <td><?php echo $test_1 ?></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row">
                    <h5><span class="badge badge-warning">US</span>
                        &nbsp; <a href=""><small><small>Info <i class="fas fa-link"></i></small></small></a></h5>
                </td>
                <td><?php echo $test_2 ?></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row">
                    <h5><span class="badge badge-success">EL-ROP</span> &nbsp; <input onclick="disable_enable_flip('EL')" type="checkbox" <?php
                                                                                                                                            if ($_COOKIE['EL'] == 'disabled') {
                                                                                                                                                echo 'checked';
                                                                                                                                            }
                                                                                                                                            ?>>
                        <small>Disable</small>
                        &nbsp; <a href=""><small><small>Info <i class="fas fa-link"></i></small></small></a> </h5>
                </td>
                <td><?php if ($_COOKIE['EL'] == 'disabled') {
                    } else {
                        echo $test_3;
                    } ?></td>
                <td><?php if ($_COOKIE['EL'] == 'disabled') {
                    } else {
                        echo $eELROP;
                    } ?></td>
            </tr>
            <tr>
                <td scope="row">
                    <h5><span class="badge badge-primary">G-ROP</span> &nbsp; <input onclick="disable_enable_flip('G')" type="checkbox" <?php
                                                                                                                                        if ($_COOKIE['G'] == 'disabled') {
                                                                                                                                            echo 'checked';
                                                                                                                                        }
                                                                                                                                        ?>> <small>Disable</small>
                        &nbsp; <a href=""><small><small>Info <i class="fas fa-link"></i></small></small></a></h5>
                </td>
                <td><?php if ($_COOKIE['G'] == 'disabled') {
                    } else {
                        echo $test_4;
                    } ?></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row">
                    <h5>Digirop &nbsp; <a href=""><small><small>Info <i class="fas fa-link"></i></small></small></a> </h5>
                </td>
                <td><?php echo $test_5 ?></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row">
                    <h5><span class="badge badge-info">ROPSCORE</span> &nbsp; <input onclick="disable_enable_flip('ROP')" type="checkbox" <?php
                                                                                                                                            if ($_COOKIE['ROP'] == 'disabled') {
                                                                                                                                                echo 'checked';
                                                                                                                                            }
                                                                                                                                            ?>> <small>Disable</small>
                        &nbsp; <a href=""><small><small>Info <i class="fas fa-link"></i></small></small></a></h5>
                </td>
                <td><?php if ($_COOKIE['ROP'] == 'disabled') {
                    } else {
                        echo $test_6;
                    } ?></td>
                <td><?php if ($_COOKIE['ROP'] == 'disabled') {
                    } else {
                        echo $test_6_score;
                    } ?></td>
            </tr>
            <tr>
                <td scope="row">
                    <h5><span class="badge badge-dark">CHOP-ROP</span> &nbsp; <input onclick="disable_enable_flip('CHOP')" type="checkbox" <?php
                                                                                                                                            if ($_COOKIE['CHOP'] == 'disabled') {
                                                                                                                                                echo 'checked';
                                                                                                                                            }
                                                                                                                                            ?>> <small>Disable</small>
                        &nbsp; <a href=""><small><small>Info <i class="fas fa-link"></i></small></small></a></h5>
                </td>
                <td><?php if ($_COOKIE['CHOP'] == 'disabled') {
                    } else {
                        echo $test_7;
                    } ?></td>
                <td><?php if ($_COOKIE['CHOP'] == 'disabled') {
                    } else {
                        echo $test_7_score;
                    } ?></td>
            </tr>
        </tbody>
    </table>
    <br>


    <!-- <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->

    <br>

    <!-- Disabling function -->

    <script>
        function disable_enable_flip(test_name) {
            if (test_name == 'EL') {
                if (document.getElementById("ethnicity_radio_1").disabled == true) {
                    document.getElementById("ethnicity_radio_1").disabled = false;
                    document.getElementById("ethnicity_radio_2").disabled = false;
                    document.cookie = "EL = enabled";
                    ROP_or_EL();
                } else {
                    document.getElementById("ethnicity_radio_1").disabled = true;
                    document.getElementById("ethnicity_radio_2").disabled = true;
                    document.cookie = "EL = disabled";
                    ROP_or_EL();
                }
            } else if (test_name == 'G') {
                if (document.getElementById("_10_19_day_weight_input").disabled == true) {
                    document.getElementById("_10_19_day_weight_input").disabled = false;
                    document.getElementById("_20_29_day_weight_input").disabled = false;
                    document.getElementById("_30_39_day_weight_input").disabled = false;
                    document.cookie = "G = enabled";
                } else {
                    document.getElementById("_10_19_day_weight_input").disabled = true;
                    document.getElementById("_20_29_day_weight_input").disabled = true;
                    document.getElementById("_30_39_day_weight_input").disabled = true;
                    document.cookie = "G = disabled";
                }
            } else if (test_name == 'ROP') {
                if (document.getElementById("transfusion_radio_1").disabled == true) {
                    document.getElementById("transfusion_radio_1").disabled = false;
                    document.getElementById("transfusion_radio_2").disabled = false;
                    document.getElementById("ventilation_radio_1").disabled = false;
                    document.getElementById("ventilation_radio_2").disabled = false;
                    document.cookie = "ROP = enabled";
                    ROP_or_EL();
                } else {
                    document.getElementById("transfusion_radio_1").disabled = true;
                    document.getElementById("transfusion_radio_2").disabled = true;
                    document.getElementById("ventilation_radio_1").disabled = true;
                    document.getElementById("ventilation_radio_2").disabled = true;
                    document.cookie = "ROP = disabled";
                    ROP_or_EL();
                }
            } else if (test_name == 'CHOP') {
                if (document.getElementById("preceding_week_weight_entry").disabled == true) {
                    document.getElementById("preceding_week_weight_entry").disabled = false;
                    document.getElementById("penultimate_week_weight_entry").disabled = false;
                    document.cookie = "CHOP = enabled";
                } else {
                    document.getElementById("preceding_week_weight_entry").disabled = true;
                    document.getElementById("penultimate_week_weight_entry").disabled = true;
                    document.cookie = "CHOP = disabled";
                }
            }
        }
    </script>

    <!-- ROP_or_EL -->

    <script>
        function ROP_or_EL() {
            if ((getCookie('EL') == 'disabled') && (getCookie('ROP') == 'disabled')) {
                document.getElementById("_6_week_weight_input").disabled = true;
            } else {
                document.getElementById("_6_week_weight_input").disabled = false;
            }
        }
    </script>

    <!-- Function to return values to form -->

    <script>
        function return_values() {
            document.getElementById("birth_weight_entry").value = "<?php echo $birth_weight; ?>";
            document.getElementById("gestation_weeks_entry").value = "<?php echo $gestation_weeks; ?>";
            document.getElementById("_6_week_weight_input").value = "<?php echo $_6_week_weight; ?>";
            document.getElementById("_10_19_day_weight_input").value = "<?php echo $_10_19_day_weight; ?>";
            document.getElementById("_20_29_day_weight_input").value = "<?php echo $_20_29_day_weight; ?>";
            document.getElementById("_30_39_day_weight_input").value = "<?php echo $_30_39_day_weight; ?>";
            document.getElementById("preceding_week_weight_entry").value = "<?php echo $preceding_week_weight; ?>";
            document.getElementById("penultimate_week_weight_entry").value = "<?php echo $penultimate_week_weight; ?>";
            // Ethnicity Radio
            if ("<?php echo $ethnicity_radio; ?>" == 'Black') {
                document.getElementById("ethnicity_radio_1").checked = true;
            } else if ("<?php echo $ethnicity_radio; ?>" == 'Other') {
                document.getElementById("ethnicity_radio_2").checked = true;
            }
            // Sex Radio
            if ("<?php echo $sex_radio; ?>" == 'Male') {
                document.getElementById("sex_radio_1").checked = true;
            } else if ("<?php echo $sex_radio; ?>" == 'Female') {
                document.getElementById("sex_radio_2").checked = true;
            }
            // Transfusion Radio
            if ("<?php echo $transfusion_radio; ?>" == 'Yes') {
                document.getElementById("transfusion_radio_1").checked = true;
            } else if ("<?php echo $transfusion_radio; ?>" == 'No') {
                document.getElementById("transfusion_radio_2").checked = true;
            }
            // Ventilation Radio
            if ("<?php echo $ventilation_radio; ?>" == 'Yes') {
                document.getElementById("ventilation_radio_1").checked = true;
            } else if ("<?php echo $ventilation_radio; ?>" == 'No') {
                document.getElementById("ventilation_radio_2").checked = true;
            }
            // end
        }
    </script>

    <!-- Alert if weight at 6 weeks is less than birth weight -->

    <script>
        if (("<?php echo $_6_week_weight; ?>" > 0) && ("<?php echo $_6_week_weight_gain; ?>" < 0)) {
            alert('The weight at 6 weeks you have entered is less than the birth weight.')
        }
    </script>

    <!-- get cookie -->

    <script>
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    </script>

    <!--  -->

</body>

<!-- <?php
        include 'graph_script.php';
        ?> -->

</html>