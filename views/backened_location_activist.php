

<?php if($contact_person||$email||$telephone){
  ?>

  <p>
    Contact person: <?=$contact_person ?><br/>
    E-Mail: <?=$email ?><br/>
    Telephone: <?=$telephone ?>
  </p>

  <label style="color:red;">
    <p>
      This plugin is programmed to the best of my knowledge and belief. But I can not rule out mistakes.
      In addition, Wordpress and its plugin ecosystem are known for its numerous security holes in history.
      You should therefore delete the data of the activists when you no longer need them.
      The worst case would be if unprivileged have access to the data of activists.
    </p>
    <input type="submit" value="Permanently destroy this data" name="sp_remove_activist_data">
  </label>

  <?PHP
} else {

  ?>
  No contact data available.
  <?PHP

} ?>