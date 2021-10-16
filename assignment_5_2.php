<DOCTYPE html>
    <html>
     <head>
         <title>calculator (metrix)
</title>
</head>
<?php
  $result_1= " ";
  $result_2= " ";
  $result_3= " ";
  $result_4= " ";
   if(isset($_POST["operator"])){
      
   $first_num = $_POST['first_num'];
   $second_num = $_POST['second_num'];
   $third_num = $_POST['third_num'];
   $fourth_num = $_POST['fourth_num'];
   $fifth_num = $_POST['fifth_num'];
   $sixth_num = $_POST['sixth_num'];
   $seventh_num = $_POST['seventh_num'];
   $eighth_num = $_POST['eighth_num'];
   $operator = $_POST["operator"];




   $arr1 = array(
    array($first_num, $second_num),
    array($third_num, $fourth_num)
    );
    $arr2 = array(
    array($fifth_num,$sixth_num),
    array($seventh_num,$eighth_num)
    );
      if(is_numeric($first_num) && is_numeric($second_num) &&  is_numeric($third_num) && is_numeric($fourth_num) && is_numeric($fifth_num) && is_numeric($sixth_num) && is_numeric($seventh_num) && is_numeric($eighth_num)){
     if(is_numeric($arr1[0][0]) && is_numeric($arr2[0][0]) &&  is_numeric($arr1[0][1]) && is_numeric($arr2[0][1]) && is_numeric($arr1[1][0])
        && is_numeric($arr2[1][0]) && is_numeric($arr1[1][1]) && is_numeric($arr2[1][1])){            
        /* Martix Sum/Addition Function */  
      if($operator=="Add"){                      
          $result_1=$arr1[0][0] + $arr2[0][0];
          $result_2=$arr1[0][1] + $arr2[0][1];
          $result_3=$arr1[1][0] + $arr2[1][0];
          $result_4=$arr1[1][1] + $arr2[1][1];
        }
        /* Martix Subtraction Function */
      elseif($operator=="sub"){
        $result_1=$arr1[0][0] - $arr2[0][0];
          $result_2=$arr1[0][1] - $arr2[0][1];
          $result_3=$arr1[1][0] - $arr2[1][0];
          $result_4=$arr1[1][1] - $arr2[1][1];
        }
        /* Martix Multiply Function */
      elseif($operator=="multi"){
        $result_1=$arr1[0][0] * $arr2[0][0];
          $result_2=$arr1[0][1] * $arr2[0][1];
          $result_3=$arr1[1][0] * $arr2[1][0];
          $result_4=$arr1[1][1] * $arr2[1][1];
        } 
}                
      }
    }





?>

<body>
    <h1>Lets Build a calculator</h1>
    <form method="POST">

        <label><h1> Number Input</h1></label>
        <label>First Number</label>
        <input type="number" name="first_num" value="<?php  echo $first_num;?>" >
        <label>Second Number</label>
        <input type="number" name="second_num" value="<?php  echo $second_num;?>" >
        <label>Third Number</label>
        <input type="number" name="third_num" value="<?php  echo $third_num;?>" > 
        <label>Fourth Number</label>
        <input type="number" name="fourth_num"value="<?php  echo $fourth_num;?>"  >
        <br>
        <br>
        <label>Fifth Number</label>
        <input type="number" name="fifth_num" value="<?php  echo $fifth_num;?>" >
        <label>Sixth Number</label>
        <input type="number" name="sixth_num" value="<?php  echo $sixth_num;?>" >
        <label>Seventh Number</label>
        <input type="number" name="seventh_num" value="<?php  echo $seventh_num;?>" > 
        <label>Eighth Number</label>
        <input type="number" name="eighth_num"  value="<?php  echo $eighth_num;?>" >
        <br>
        <br>
        <label><h1> Input Result</h1></label>
        <label>First Result</label>
        <input type="number" name="result_1" value="<?php echo $result_1;?>">
        <label>Second Result</label>
        <input type="number" name="result_2" value="<?php echo $result_2;?>">
        <label>Third Result</label>
        <input type="number" name="result_3" value="<?php echo $result_3;?>"> 
        <label>Fourth Result</label>
        <input type="number" name="result_4" value="<?php echo $result_4;?>">
        <br>
        <br>
 
    <input type="submit" value="Add" name="operator" > 
    <input type="submit" value="sub" name="operator">
    <input type="submit" value="multi" name="operator">  
 




</form>






</body>
</html>