<!doctype html>

<html>
<head>
  <title>Ch 03 Exercises</title>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='../css/style.css' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
</head>

<body>
  <section>
    <fieldset>
      <legend>#01 Number Validator</legend>
      <div id='exercise_01'>
        <?php
          $CCNum = (string) $_POST['cc_number'];
          $CCNumArr = explode(',',$CCNum);
          $ArrCount;

          foreach ($CCNumArr as $CCTemp) {
            if (empty($CCNumArr)) {
              echo '<p>The field was left blank, please enter a 16-digit credit card number with dashes</p>';
            } else {
              $CCNumArr = $CCTemp;
              $CCNumArr = str_replace('-','',$CCNumArr);
              $CCNumArr = str_replace(' ','',$CCNumArr);

              if (!is_numeric($CCNumArr)) {
                echo '<p>'.$CCNumArr.' is not a valid credit card number</p>';
              } else {
                echo '<p>'.$CCNumArr.' is a valid credit card number</p>';
              }
            }
          }


        ?>
      </div>
    </fieldset>
  </section>
</body>
</html>
