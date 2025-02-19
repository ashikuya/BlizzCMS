<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online_model extends CI_Model
{
    /**
     * Online_model constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param object $multirealm
     * @return mixed
     */
    public function getOnlinePlayers($multirealm)
    {
        $this->multirealm = $multirealm;

        return $this->multirealm->select('name, race, class, level, zone')
            ->where('online', '1')
            ->order_by('name', 'DESC')
            ->get('characters');
    }
}
