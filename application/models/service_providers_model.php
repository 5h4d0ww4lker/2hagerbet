<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class service_providers_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function load_tour_guide_details($tg_id)
    {
        $this->db->select('*');
        $this->db->from('tour_guides');
        $this->db->where('tg_id', $tg_id);


        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function load_car_rental_details($cr_id)
    {
        $this->db->select('*');
        $this->db->from('car_rentals');
        $this->db->where('cr_id', $cr_id);


        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

   public function count_tour_guides()
    {

        return $this->db->count_all_results('tour_guides');
    }


     public function count_car_rentals()
    {

        return $this->db->count_all_results('car_rentals');
    }


    public function get_list_of_tour_guides($limit = 200, $offset = 0)
    {
        $this->db->select('*');
        $this->db->from('tour_guides');
        $this->db->limit($limit);
        $this->db->offset($offset);
        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


     public function get_list_of_car_rentals($limit = 200, $offset = 0)
    {
        $this->db->select('*');
        $this->db->from('car_rentals');
        $this->db->limit($limit);
        $this->db->offset($offset);
        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


public function search_car_rentals($car_rental_location)
    {

        $this->db->select('*');
        $this->db->from('car_rentals');
        if ($car_rental_location) {
            $this->db->or_like('cr_name', $car_rental_location);
            $this->db->or_like('cr_location', $car_rental_location);
            $this->db->or_like('cr_city', $car_rental_location);
           
          
        }
        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
      

    public function search_tour_guides($tour_guide_location)
    {

        $this->db->select('*');
        $this->db->from('tour_guides');
        if ($tour_guide_location) {
            $this->db->or_like('tg_name', $tour_guide_location);
            $this->db->or_like('tg_location', $tour_guide_location);
            $this->db->or_like('tg_city', $tour_guide_location);
            $this->db->or_like('tg_direction', $tour_guide_location);
          
        }
        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }









    }
}

?>