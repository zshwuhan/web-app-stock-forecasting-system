<?PHP
echo"haha";
require_once('Indicator.php');
    $time=1;
 echo"haha";
    $adl=Indicator::ADL("BAC");
    $obv=Indicator::OBV("BAC");
    $bb=Indicator::BB("BAC");
    

    date_default_timezone_set(EST);
    $con = mysqli_connect("localhost", "root", "root", "StockForecasting"); //link to the database
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    } // create table currentprice to save data.

    $sql = "CREATE TABLE IF NOT EXISTS BACIndicator2
    (
     ID INT(6)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
     Stock VARCHAR(15),
     ADL DECIMAL(10,3),
     OBV DECIMAL(10,3),
     BB DECIMAL(10,3)
     )ENGINE=MyISAM";
    if (mysqli_query($con, $sql)) {
        echo "Table BACINDICATOR created successfully"."<br>";
    } else {
        echo "Error creating table: " . mysqli_error($con);
    }
    
    $del="DELETE FROM BACIndicator2";
    if(mysqli_query($con,$del))echo "Record deleted successfully";
    else {
        echo "Error deleting record: " . mysqli_error($con);
    }
    
    

    $i=0;
    // insert history data into the table
    while($i<count($ema)){
        $sql= mysqli_query($con,"Insert INTO BACIndicator2 (Stock,ADL,OBV,BB)
                           VALUES ('BAC','$adl[$i]','$obv[$i]','$bb[$i]')");
                           $i++;
                           }
                           
                           $time=1;
do{
 
    $adl=Indicator::ADL("BAC");
    $obv=Indicator::OBV("BAC");
    $bb=Indicator::BB("BAC");                      

    $t=0;
    while($t<count($ema)){
                   $sql= mysqli_query($con,"UPDATE BACIndicator2 SET ADL='$adl[$t]',OBV='$obv[$t]',BB='$bb[$t]'
                           WHERE ID='$t'");
                           $t++;
                           }
                        sleep(86400);
                                      }while(true);
                           
                           mysqli_close($con);
                           
?>
