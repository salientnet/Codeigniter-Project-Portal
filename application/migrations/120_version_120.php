<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Version_120 extends CI_Migration
{
    function __construct()
    {
        parent::__construct();
    }

    public function up()
    {
      // add the table contract equipment
      $this->db->query("CREATE TABLE IF NOT EXISTS `tblcontractequipments` (
         `id` int(11) NOT NULL AUTO_INCREMENT,
         `contractid` int(11) NOT NULL,
         `name` mediumtext NOT NULL,
         PRIMARY KEY (`id`)
      ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");
    }
}
