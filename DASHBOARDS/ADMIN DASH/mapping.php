<?php
include 'connect/connect.php';
include 'header.php';
?>

<style type="text/css">
    td {
        padding: 2px 2px;
    }

    input {
        width: ;
    }
</style>

<body>

    <div class="container1" style="margin-top:-15px;">
        <div class="topbar">
            <p>Welcome Alumni!</p>
            <img src="img/udm logo.png" alt="Avatar" class="avatar">
        </div>

        <?php
        include 'navigation.php';
        ?>

        <div class="container2">
            <div class="row">
                <?php
                $questions = [
                    "Is your current job directly related to your degree?",
                    "Did the University prepare you for your career path?",
                    "Did you switch industries after graduation?",
                    "Have you worked in a position related to your internship experience?"
                ];

                for ($i = 0; $i < count($questions); $i++) {
                    $chartId = "myChart" . ($i + 1);
                    $questionNumber = "rad" . ($i + 1);
                ?>
                    <div class="col-md-6">
                        <canvas id="<?php echo $chartId; ?>" style="width:100%;max-width:600px"></canvas>
                        <?php

                        $yesCount = 0;
                        $noCount = 0;

                        $yesSql = "SELECT COUNT($questionNumber) AS countYes FROM professional WHERE $questionNumber='1'";
                        $yesResult = $conn->query($yesSql);

                        if ($yesResult->num_rows > 0) {
                            $yesCount = $yesResult->fetch_assoc()['countYes'];
                        }

                        $noSql = "SELECT COUNT($questionNumber) AS countNo FROM professional WHERE $questionNumber='0'";
                        $noResult = $conn->query($noSql);

                        if ($noResult->num_rows > 0) {
                            $noCount = $noResult->fetch_assoc()['countNo'];
                        }
                        ?>

                        <script>
                            var xValues<?php echo $i + 1; ?> = ["Yes", "No"];
                            var yValues<?php echo $i + 1; ?> = [<?php echo $yesCount; ?>, <?php echo $noCount; ?>];
                            var barColors<?php echo $i + 1; ?> = ["#135c10", "#91cf8b"];

                            new Chart("<?php echo $chartId; ?>", {
                                type: "bar",
                                data: {
                                    labels: xValues<?php echo $i + 1; ?>,
                                    datasets: [{
                                        backgroundColor: barColors<?php echo $i + 1; ?>,
                                        data: yValues<?php echo $i + 1; ?>
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    title: {
                                        display: true,
                                        text: "<?php echo $questions[$i]; ?>"
                                    }
                                }
                            });
                        </script>

                        <p>
                            There are <?php echo $yesCount; ?> respondents who answered Yes and <?php echo $noCount; ?> who answered No.
                        </p>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="job">
                <center>
                    <canvas id="myChart" style="width:100%;max-width:50%; margin-top:20px;"></canvas>
                    <canvas id="myChartNo" style="width:100%;max-width:50%; margin-top:20px;"></canvas>
                </center>

                <?php
                $sql = "SELECT SUM(rad1) AS rad1, SUM(rad2) AS rad2, SUM(rad3) AS rad3, SUM(rad4) AS rad4 FROM professional";
                $result = $conn->query($sql);

                if ($result === false) {
                    die("Error executing the query: " . $conn->error);
                }

                if ($result->num_rows > 0) {
                    // output data of each row
                    $row = $result->fetch_assoc();
                    extract($row);
                } else {
                    $rad1 = "0";
                    $rad2 = "0";
                    $rad3 = "0";
                    $rad4 = "0";
                }

                $total = $rad1 + $rad2 + $rad3 + $rad4;
                $xValues = ['Q 1', 'Q 2', 'Q 3', 'Q 4'];

                // Instead, count the "No" responses for each question
                $sql = "SELECT COUNT(rad1) AS countQ1No FROM professional WHERE rad1='0'";
                $result = $conn->query($sql);
                $countQ1No = ($result->num_rows > 0) ? $result->fetch_assoc()['countQ1No'] : 0;

                $sql = "SELECT COUNT(rad2) AS countQ2No FROM professional WHERE rad2='0'";
                $result = $conn->query($sql);
                $countQ2No = ($result->num_rows > 0) ? $result->fetch_assoc()['countQ2No'] : 0;

                $sql = "SELECT COUNT(rad3) AS countQ3No FROM professional WHERE rad3='0'";
                $result = $conn->query($sql);
                $countQ3No = ($result->num_rows > 0) ? $result->fetch_assoc()['countQ3No'] : 0;

                $sql = "SELECT COUNT(rad4) AS countQ4No FROM professional WHERE rad4='0'";
                $result = $conn->query($sql);
                $countQ4No = ($result->num_rows > 0) ? $result->fetch_assoc()['countQ4No'] : 0;

                $yValuesNo = [$countQ1No, $countQ2No, $countQ3No, $countQ4No];
                ?>

                <script>
                    new Chart("myChartNo", {
                        type: "line",
                        data: {
                            labels: <?php echo json_encode($xValues); ?>,
                            datasets: [{
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "#135c10",
                                borderColor: "#91cf8b",
                                data: <?php echo json_encode($yValuesNo); ?>
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "No Responses: Questions Overview"
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var label = data.labels[tooltipItem.index];
                                        var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                        return label + ': ' + value + ' (No)';
                                    }
                                }
                            }
                        }
                    });
                </script>

                <?php
                // Additional line chart for "Yes" values
                $yValuesYes = [$rad1, $rad2, $rad3, $rad4];
                ?>

                <script>
                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: <?php echo json_encode($xValues); ?>,
                            datasets: [{
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "#91cf8b",
                                borderColor: "#135c10",
                                data: <?php echo json_encode($yValuesYes); ?>
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Yes Responses: Questions Overview"
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var label = data.labels[tooltipItem.index];
                                        var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                        return label + ': ' + value + ' (Yes)';
                                    }
                                }
                            }
                        }
                    });
                </script>

            </div>

        </div>
    </div>
    <?php

    // Assume you have a user ID, replace 1 with the actual user ID
    $user_id = 1;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle form submission
        for ($i = 1; $i <= 4; $i++) {
            $questionNumber = "rad" . $i;
            $response = $_POST[$questionNumber];

            // Check if the user already has a response in the database
            $existingRecord = $conn->query("SELECT * FROM alumni_responses WHERE user_id = $user_id")->fetch_assoc();

            if ($existingRecord) {
                // Update existing record
                $conn->query("UPDATE alumni_responses SET $questionNumber = $response WHERE user_id = $user_id");
            } else {
                // Insert new record
                $conn->query("INSERT INTO alumni_responses (user_id, $questionNumber) VALUES ($user_id, $response)");
            }
        }
    }

    // Fetch user's responses
    $sql = "SELECT SUM(rad1) AS rad1, SUM(rad2) AS rad2, SUM(rad3) AS rad3, SUM(rad4) AS rad4 FROM professional";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }
    ?>
</body>
</html>