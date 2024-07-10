<?php
// phpcs:ignoreFile
/**
 * @file
 * A database agnostic dump for testing purposes.
 *
 * This file was generated by the Drupal 9.2.6 db-tools.php script.
 */

use Drupal\Core\Database\Database;

$connection = Database::getConnection();

$connection->schema()->createTable('system', array(
  'fields' => array(
    'filename' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'name' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'type' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '12',
      'default' => '',
    ),
    'owner' => array(
      'type' => 'varchar',
      'not null' => TRUE,
      'length' => '255',
      'default' => '',
    ),
    'status' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'bootstrap' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'schema_version' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'small',
      'default' => '-1',
    ),
    'weight' => array(
      'type' => 'int',
      'not null' => TRUE,
      'size' => 'normal',
      'default' => '0',
    ),
    'info' => array(
      'type' => 'blob',
      'not null' => FALSE,
      'size' => 'normal',
    ),
  ),
  'primary key' => array(
    'filename',
  ),
  'indexes' => array(
    'system_list' => array(
      'status',
      'bootstrap',
      'type',
      'weight',
      'name',
    ),
    'type_name' => array(
      'type',
      'name',
    ),
  ),
  'mysql_character_set' => 'utf8mb3',
));

$connection->insert('system')
->fields(array(
  'filename',
  'name',
  'type',
  'owner',
  'status',
  'bootstrap',
  'schema_version',
  'weight',
  'info',
))
->values(array(
  'filename' => 'modules/comment/comment.module',
  'name' => 'comment',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7009',
  'weight' => '0',
  'info' => 'a:14:{s:4:"name";s:7:"Comment";s:11:"description";s:57:"Allows users to comment on and discuss published content.";s:7:"package";s:4:"Core";s:7:"version";s:4:"7.87";s:4:"core";s:3:"7.x";s:12:"dependencies";a:1:{i:0;s:4:"text";}s:5:"files";a:2:{i:0;s:14:"comment.module";i:1;s:12:"comment.test";}s:9:"configure";s:21:"admin/content/comment";s:11:"stylesheets";a:1:{s:3:"all";a:1:{s:11:"comment.css";s:27:"modules/comment/comment.css";}}s:7:"project";s:6:"drupal";s:9:"datestamp";s:10:"1642633901";s:5:"mtime";i:1642633901;s:3:"php";s:5:"5.2.4";s:9:"bootstrap";i:0;}',
))
->values(array(
  'filename' => 'modules/field/field.module',
  'name' => 'field',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7004',
  'weight' => '0',
  'info' => 'a:14:{s:4:"name";s:5:"Field";s:11:"description";s:57:"Field API to add fields to entities like nodes and users.";s:7:"package";s:4:"Core";s:7:"version";s:4:"7.87";s:4:"core";s:3:"7.x";s:5:"files";a:4:{i:0;s:12:"field.module";i:1;s:16:"field.attach.inc";i:2;s:20:"field.info.class.inc";i:3;s:16:"tests/field.test";}s:12:"dependencies";a:1:{i:0;s:17:"field_sql_storage";}s:8:"required";b:1;s:11:"stylesheets";a:1:{s:3:"all";a:1:{s:15:"theme/field.css";s:29:"modules/field/theme/field.css";}}s:7:"project";s:6:"drupal";s:9:"datestamp";s:10:"1642633901";s:5:"mtime";i:1642633901;s:3:"php";s:5:"5.2.4";s:9:"bootstrap";i:0;}',
))
->values(array(
  'filename' => 'modules/field/modules/field_sql_storage/field_sql_storage.module',
  'name' => 'field_sql_storage',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7002',
  'weight' => '0',
  'info' => 'a:13:{s:4:"name";s:17:"Field SQL storage";s:11:"description";s:37:"Stores field data in an SQL database.";s:7:"package";s:4:"Core";s:7:"version";s:4:"7.87";s:4:"core";s:3:"7.x";s:12:"dependencies";a:1:{i:0;s:5:"field";}s:5:"files";a:1:{i:0;s:22:"field_sql_storage.test";}s:8:"required";b:1;s:7:"project";s:6:"drupal";s:9:"datestamp";s:10:"1642633901";s:5:"mtime";i:1642633901;s:3:"php";s:5:"5.2.4";s:9:"bootstrap";i:0;}',
))
->values(array(
  'filename' => 'modules/node/node.module',
  'name' => 'node',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7016',
  'weight' => '0',
  'info' => 'a:15:{s:4:"name";s:4:"Node";s:11:"description";s:66:"Allows content to be submitted to the site and displayed on pages.";s:7:"package";s:4:"Core";s:7:"version";s:4:"7.87";s:4:"core";s:3:"7.x";s:5:"files";a:2:{i:0;s:11:"node.module";i:1;s:9:"node.test";}s:8:"required";b:1;s:9:"configure";s:21:"admin/structure/types";s:11:"stylesheets";a:1:{s:3:"all";a:1:{s:8:"node.css";s:21:"modules/node/node.css";}}s:7:"project";s:6:"drupal";s:9:"datestamp";s:10:"1642633901";s:5:"mtime";i:1642633901;s:12:"dependencies";a:0:{}s:3:"php";s:5:"5.2.4";s:9:"bootstrap";i:0;}',
))
->values(array(
  'filename' => 'modules/system/system.module',
  'name' => 'system',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7084',
  'weight' => '0',
  'info' => 'a:14:{s:4:"name";s:6:"System";s:11:"description";s:54:"Handles general site configuration for administrators.";s:7:"package";s:4:"Core";s:7:"version";s:4:"7.87";s:4:"core";s:3:"7.x";s:5:"files";a:6:{i:0;s:19:"system.archiver.inc";i:1;s:15:"system.mail.inc";i:2;s:16:"system.queue.inc";i:3;s:14:"system.tar.inc";i:4;s:18:"system.updater.inc";i:5;s:11:"system.test";}s:8:"required";b:1;s:9:"configure";s:19:"admin/config/system";s:7:"project";s:6:"drupal";s:9:"datestamp";s:10:"1642633901";s:5:"mtime";i:1642633901;s:12:"dependencies";a:0:{}s:3:"php";s:5:"5.2.4";s:9:"bootstrap";i:0;}',
))
->values(array(
  'filename' => 'modules/taxonomy/taxonomy.module',
  'name' => 'taxonomy',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7011',
  'weight' => '0',
  'info' => 'a:13:{s:4:"name";s:8:"Taxonomy";s:11:"description";s:38:"Enables the categorization of content.";s:7:"package";s:4:"Core";s:7:"version";s:4:"7.87";s:4:"core";s:3:"7.x";s:12:"dependencies";a:1:{i:0;s:7:"options";}s:5:"files";a:2:{i:0;s:15:"taxonomy.module";i:1;s:13:"taxonomy.test";}s:9:"configure";s:24:"admin/structure/taxonomy";s:7:"project";s:6:"drupal";s:9:"datestamp";s:10:"1642633901";s:5:"mtime";i:1642633901;s:3:"php";s:5:"5.2.4";s:9:"bootstrap";i:0;}',
))
->values(array(
  'filename' => 'sites/all/modules/contrib/chosen/chosen.module',
  'name' => 'chosen',
  'type' => 'module',
  'owner' => '',
  'status' => '1',
  'bootstrap' => '0',
  'schema_version' => '7204',
  'weight' => '0',
  'info' => 'a:13:{s:4:"name";s:6:"Chosen";s:11:"description";s:104:"Makes select elements more user-friendly using <a href="https://github.com/JJJ/chosen">Chosen</a>.";s:7:"package";s:14:"User interface";s:9:"configure";s:34:"admin/config/user-interface/chosen";s:4:"core";s:3:"7.x";s:7:"version";s:7:"7.x-2.1";s:7:"project";s:6:"chosen";s:9:"datestamp";s:10:"1490260386";s:5:"mtime";i:1490260386;s:12:"dependencies";a:0:{}s:3:"php";s:5:"5.2.4";s:5:"files";a:0:{}s:9:"bootstrap";i:0;}',
))
->execute();
