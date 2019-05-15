<?php
    
        $numerical_data=0;   //total numerical data by user
        $bad_data=0;    //total non numerical data by user
        $decimal_data=0;    //total non integer or float data by user
        $average_time=0;    //average time taken by user
        $no_of_even_numbers=0;  //no of even numbers enetred by user
        $no_of_odd_numbers=0;
        $total_no_of_data_entry=0;
        

        $currentData=0;
        $totalTime=0;
        $totalTime1=0;  //temporary calculation variable
        $totalTime2=0;  //temporary calculation variable
        $flag=1;
        $flag2=0;
        $timeFirst=0;   //first entry time
        $timeLast=0;    //last entry time
        $new_data=$_POST['data'];
        $entry_time=time();
        $sql="INSERT INTO `data_table`(`data`, `time`) VALUES ('$new_data','$entry_time')";
        $db_name= $db_connection->query($sql);
        
        //getting no of total data entered by user
        $sql_row_count="SELECT COUNT(*) FROM `data_table` WHERE 1";
        $db_data_entry_count=$db_connection->query($sql_row_count);
        if ($db_data_entry_count->num_rows > 0) {
            $row = $db_data_entry_count->fetch_assoc(); 
            $total_no_of_data_entry= $row['COUNT(*)'];    
        }
        else {
            echo "0 results";
        }
        
        //analyzing data
        $sql="SELECT * FROM `data_table` WHERE 1";
            $all_data= $db_connection->query($sql);

            if ($all_data->num_rows > 0) {
            // output data of each row
            while($row = $all_data->fetch_assoc()) {
                    $currentData= $row["data"];
                    if(is_numeric($currentData)){
                        $numerical_data= $numerical_data + 1;
                        
                            if(is_integer($currentData)!=0){
                                $decimal_data= $decimal_data + 1;
                            }
                            if(!is_float($currentData))
                            {
                                if($currentData%2==0){
                                $no_of_even_numbers= $no_of_even_numbers + 1;
                            }
                            else{
                                $no_of_odd_numbers= $no_of_odd_numbers +1 ;
                            }
                            }
                            
                        }
                    else{
                        $bad_data= $bad_data + 1;
                    }
                    
                        
                    if($flag==1){
                        $timeFirst=$row["time"];
                        $totalTime=$totalTime+$timeFirst; //for first row
                        $totalTime2=$timeFirst;
                        $flag=$flag+1;
                    }
                    else{   
                        $totalTime1= $row["time"];
                        $totalTime=$totalTime+($totalTime1-$totalTime2);}
                        $flag=$flag+1;
                            $flag2=$flag-2; //to get last time
                            if($flag2==$total_no_of_data_entry){
                                $timeLast= $row["time"];
                            }
                    }
                    $average_time = $average_time+(($totalTime1-$totalTime2)/2)/2;        
                    $totalTime2= $row["time"];  //will store previous row time (data input time)
                    
            }
            else {
                echo "0 results";
            }
            
         
    ?>
    