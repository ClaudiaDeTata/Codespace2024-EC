<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multi-Dimensional Arrays</title>
</head>
<body>
<!-- Create and initialise an array variable using a suitable variable name to display the following of student’s results:
Name                    Physics           English       Maths

Aarron                  74%                 69%            70%

Jamie                      64%                 79%            69%

Harry                     55%                 52%           57%

2.  Print to screen Aarron's Physics results.
3.  Print to screen Jamie's English results.
4.  Print to screen Harry's Maths results.

Output 

Student Results

Physics result for Aarron : 74%
English result for Jamie: 79%
Maths result for Harry : 57% -->

    <?php
    
        $results = array(
          "Aarron" => array(
              "Physics" => "74%", 
              "English" => "69%", 
              "Maths" => "70%"
              ),

          "Jamie" => array(
              "Physics" => "64%", 
              "English" => "79%", 
              "Maths" => "69%"
              ),

          "Harry" => array(
              "Physics" => "55%", 
              "English" => "52%", 
              "Maths" => "57%"
              ),
            );     
    ?> 
      <h3>Student Results</h3>
      <br>
          <p>Physics results for Aarron : <?php echo $results['Aarron']['Physics'] ?></p>
          <p>English result for Jamie : <?php echo $results['Jamie']['English'] ?></p>
          <p>Maths result for Harry : <?php echo $results['Harry']['Maths'] ?></p>      
</body>
</html>