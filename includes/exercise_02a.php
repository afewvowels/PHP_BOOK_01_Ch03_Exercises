<!doctype html>
<html>
<head>
  <title>#02a String Comparison Script</title>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='../css/style.css' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
</head>

<body>
  <section id='exercise_03a'>
    <fieldset>
      <legend>Results</legend>
      <div>
        <?php
          function reduceStrings($tempstring) {
            return preg_replace('/[^a-zA-Z]/', '', $tempstring);
          }

          // Data validation and variable assignment
          if(!empty($_POST['string1']) && is_string($_POST['string1'])) {
            $firststring = $_POST['string1'];
          }
          if(!empty($_POST['string2']) && is_string($_POST['string2'])) {
            $secondstring = $_POST['string2'];
          }

          $first = reduceStrings($firststring);
          $second = reduceStrings($secondstring);

          if ($first == $second) {
            echo '<p>'.$firststring.' is equal to '.$secondstring.'</p>';
          } else {
            echo '<p>'.$firststring.' is not equal to '.$secondstring.'</p>';
          }

        ?>
      </div>
    </fieldset>
  </section>
</body>
</html>
