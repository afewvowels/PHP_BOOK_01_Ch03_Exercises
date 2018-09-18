<!doctype html>
<html>
<head>
  <title>#03a Email Validation Script</title>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='../css/style.css' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
</head>

<body>
  <section>
    <fiedset>
      <div>
        <?php
          $username = '';
          $first = '';
          $second = '';

          function reduceStrings($string) {
            return preg_replace('/[^a-zA-Z]/','',$string);
          }

          function add_slashes($data){
            if(get_magic_quotes_gpc()) $data = stripslashes($data);
            return addslashes($data);
          }

          if (!empty($_POST['username']) && is_string($_POST['username'])) {
            $username = reduceStrings($_POST['username']);
          }
          if (!empty($_POST['first_name']) && is_string($_POST['first_name'])) {
            $first = reduceStrings($_POST['first_name']);
          }
          if (!empty($_POST['last_name']) && is_string($_POST['last_name'])) {
            $last = reduceStrings($_POST['last_name']);
          }
          if (!empty($_POST['organization']) && is_string($_POST['organization'])) {
            $organization = reduceStrings($_POST['organization']);
          }
          if (!empty($_POST['email_input']) && filter_var($_POST['email_input'], FILTER_VALIDATE_EMAIL)) {
            $email = htmlspecialchars(add_slashes($_POST['email_input']));
          }

          if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $email) == 1) {
            echo '<p>That is a valid email address</p>';
          } else {
            echo '<p>That is not a valid email address</p>';
          }
        ?>
      </div>
    </fieldset>
  </section>
</body>
</html>
