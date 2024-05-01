<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Arrays</title>
  <style>
        table {
            border-collapse: collapse; /* Combine borders into a single border */
            width: 50%; /* Make the table fill the available width */
        }

        .title {
          width: 15%;
        }

        th, td {
            padding: 8px; /* Add padding to the cells for spacing */
            text-align: center; /* Center-align text within cells */
            border: 1px solid #ddd; /* Add border for better visual separation */
        }

        .value {
            color: black;
            font-weight: normal;
        }

        
    </style>
</head>
<body>
  <!-- Create and initialise an array variable using a suitable variable name 
    to display the following values for climate in Edinburgh:

The “hottest” months in Edinburgh are normally July and August. 
During summer, the average low temperatures are 52°F (11°C) and average highs are 66°F (19°C)

The coldest months of the year are January and February, 
with average lows of 33.8°F (1°C) and highs that rarely exceed 44.6°F (7°C).


Output

Average Temperature in Edinburgh
Month				High			Low
July-Aug			19 ℃			11 ℃
Jan-Feb				7 ℃	       		1 ℃ -->


  <h2>Average Temperature in Edinburgh</h2>
  <table>
    <?php
    
        $temperature = array(
          "highSummer" => 19, 
          "lowSummer" => 11, 
          "highWinter" => 7, 
          "lowWinter" => 1
          );

?> 
      <tr>
          <th class="title">Month</th>
          <th>High</th>
          <th>Low</th>
      </tr>
      <tr>
        <th class="title">July-Aug</th>
        <th class="value"><?php echo $temperature['highSummer'] . " °C"; ?></th>
        <th class="value"><?php echo $temperature['lowSummer'] . " °C"; ?></th>
    </tr>
    <tr>
      <th class="title">Jan-Feb</th>
      <th class="value"><?php echo $temperature['highWinter'] . " °C"; ?></th>
      <th class="value"><?php echo $temperature['lowWinter'] . " °C"; ?></th>
  </tr>
</body>
</html>




