<!DOCTYPE html>
<?php 
include './headerConnectDatabase.php';
session_start();
$_SESSION['login_user']="rajshri";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
        <link rel="stylesheet" href="developerStyle.css"> 
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <title>Analyze Numbers</title>
    </head>
    <?php include './requiredFunctioning.php'; ?>
    <body>
        <div main_div>
            <h1>Here is the analysis..</h1>
            <table class="pure-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Count</th>
                        <th>Percentages(%)</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Total data user entered</td>
                        <td><?php echo $total_no_of_data_entry; ?></td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Numerical Data</td>
                        <td><?php echo $numerical_data; ?></td>
                        <td><?php echo round((($numerical_data/$total_no_of_data_entry)*100),2);?></td>
                    </tr>
                    <tr>
                        <td>Bad Data</td>
                        <td><?php echo $bad_data ?></td>
                        <td><?php echo round((($bad_data/$total_no_of_data_entry)*100),2);?></td>
                    </tr>
                    <tr>
                        <td>Decimal Numbers</td>
                        <td><?php echo $decimal_data; ?></td>
                        <td><?php echo round((($decimal_data/$total_no_of_data_entry)*100),2);?></td>
                    </tr>
                    <tr>
                        <td>Even Numbers</td>
                        <td><?php echo $no_of_even_numbers; ?></td>
                        <td><?php echo round((($no_of_even_numbers/$total_no_of_data_entry)*100),2);?></td>
                    </tr>
                    <tr>
                        <td>Odd Numbers</td>
                        <td><?php echo $no_of_odd_numbers; ?></td>
                        <td><?php echo round((($no_of_odd_numbers/$total_no_of_data_entry)*100),2);?></td>
                    </tr>
                    <tr>
                        <td>Average time user took to input data</td>
                        <td><?php echo round($average_time,2); ?></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Total time user took to input data</td>
                        <td><?php echo round($timeLast-$timeFirst,2); ?></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Entry time of user</td>
                        <td><?php echo round($timeFirst,2); ?></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Exit time of user</td>
                        <td><?php echo round($timeLast,2); ?></td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <form class="pure-form pure-form-aligned" action="index.php" method="post">
                    <div>
                        <button type="submit" class="pure-button pure-button-primary">Add More Data</button>
                    </div>
            </form>
            <form class="pure-form pure-form-aligned" action="logout.php" method="post">
                <div>
                        <button type="submit" class="pure-button pure-button-primary">Logout</button>
                        <span class="pure-form-message">Current user data will be deleted on logout</span>
                    </div>
            </form>
        </div>
        
    </body>
</html>
<?php include './footerDisconnectDatabase.php'; ?>