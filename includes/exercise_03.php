<section>
  <fieldset>
    <legend>#03 Email Validator</legend>
    <div id='exercise_03'>
      <form action='./includes/display_errors.php' method='POST' id='main_form' onsubmit='accepted()'>
        <input type='text' name='username' id='username' class='input_entry_form' placeholder='Enter username here' />
        <input type='text' name='first_name' id='first_name' class='input_entry_form' placeholder='Enter first name here' />
        <input type='text' name='last_name' id='last_name' class='input_entry_form' placeholder='Enter last name here' />
        <input type='text' name='organization' id='organization' class='input_entry_form' placeholder='Enter organization name here' required />
        <input type='email' name='email_input' id='email_input' class='input_entry_form' title='username@(mail).ogranization.org) or last.first@(mail).ogranization.org' placeholder='Enter email here' required />
        <input type='submit' name='submit_button' class='submit_button' value='Click to submit!' />
    </div>
  </fieldset>
</section>
