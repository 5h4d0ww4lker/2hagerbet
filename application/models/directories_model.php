<!--

/* ========================================================================
 * Authors: Melaku Minas And Nebil Fikru
 * www.2hagerbet.com
 * ========================================================================
  */-->

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class directories_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function get_list_of_accommodations( $limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
//        $this->db->from('guest_houses');
        $this->db->where('hotel_city', 'Addis Ababa');
//        $this->db->where('guest_house_city', 'addis_ababa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

      public function get_list_of_car_rentals( $limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('car_rentals');
//        $this->db->from('guest_houses');
       
//        $this->db->where('guest_house_city', 'addis_ababa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }




 public function search_tour_guides($tour_guide_locaton, $limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('tour_guides');
        if ($hotel_location) {
            $this->db->like('tg_name', $tour_guide_location);
            $this->db->like('tg_location', $tour_guide_location);
            $this->db->like('tg_city', $tour_guide_location);
        }
        $this->db->limit($limit);
        $this->db->offset($offset);
        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

      public function get_list_of_tour_guides( $limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('tour_guides');
//        $this->db->from('guest_houses');
       
//        $this->db->where('guest_house_city', 'addis_ababa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



    public function get_list_of_restaurants_and_clubs( $limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
//        $this->db->from('guest_houses');
        $this->db->where('restaurant_city', 'Addis Ababa');
//        $this->db->where('guest_house_city', 'addis_ababa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



    public function count_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_city', 'Addis Ababa');
        }
        return $this->db->count_all_results('hotels');
    }

public function count_car_rentals($car_rental_locaton = null)
    {

       
        return $this->db->count_all_results('car_rentals');
    }

public function count_tour_guides($tour_guide_locaton = null)
    {

       
        return $this->db->count_all_results('tour_guides');
    }



    public function count_restaurants_and_clubs($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_city', 'Addis Ababa');
        }
        return $this->db->count_all_results('restaurants');
    }

// COUNT BY LOCATION

    public function count_bole_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_location', 'bole');
        }
        return $this->db->count_all_results('hotels');
    }


    public function count_cazanches_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_location', 'cazanches');
        }
        return $this->db->count_all_results('hotels');
    }

    public function count_4_kilo_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_location', '4_kilo');
        }
        return $this->db->count_all_results('hotels');
    }

    public function count_piassa_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_location', 'piassa');
        }
        return $this->db->count_all_results('hotels');
    }

    public function count_22_mazoria_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_location', '22 mazoria');
        }
        return $this->db->count_all_results('hotels');
    }


    public function count_megenagna_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_location', 'megenagna');
        }
        return $this->db->count_all_results('hotels');
    }


    public function count_paster_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_location', 'paster');
        }
        return $this->db->count_all_results('hotels');
    }


    public function count_saris_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_location', 'saris');
        }
        return $this->db->count_all_results('hotels');
    }

    public function count_sar_bet_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_location', 'sar bet');
        }
        return $this->db->count_all_results('hotels');
    }

    public function count_asko_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_location', 'asko');
        }
        return $this->db->count_all_results('hotels');
    }

    // END COUNT BY LOCATION

//GET BY LOCATIONS

    public function get_list_of_accommodations_bole($limit = 5, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_location', 'bole');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
          return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_accommodations_cazanches($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_location', 'cazanchis');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_accommodations_4_kilo($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_location', '4 kilo');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_accommodations_piassa($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_location', 'piassa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_accommodations_22_mazoria( $limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_location', '22 mazoria');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_accommodations_megenagna($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_location', 'megenagna');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_accommodations_paster($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_location', 'paster');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_accommodations_saris($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_location', 'saris');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_accommodations_sar_bet($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_location', 'sar bet');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_accommodations_asko($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_location', 'asko');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



    // GET BY STAR LEVEL



    public function get_5_star_accommodations($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('star_level', '5 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_4_star_accommodations($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('star_level', '4 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



    public function get_3_star_accommodations($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('star_level', '3 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_2_star_accommodations($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('star_level', '2 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



    public function get_1_star_accommodations($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('star_level', '1 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



// COUNT BY CITY

    public function count_debre_Zeit_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_city', 'Debre Zeit');

        }
        return $this->db->count_all_results('hotels');

    }


    public function count_adama_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_city', 'Adama');
        }
        return $this->db->count_all_results('hotels');
    }

    public function count_bahir_dar_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_city', 'Bahir Dar');
        }
        return $this->db->count_all_results('hotels');
    }

    public function count_dire_dawa_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('hotel_city', 'Dire Dawa');
        }
        return $this->db->count_all_results('hotels');
    }

    // COUNT BY SATR LEVEL

    // COUNT BY SATR LEVEL

    public function count_5_star_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('star_level', '5 Star');
        }
        return $this->db->count_all_results('hotels');
    }
    public function count_4_star_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('star_level', '4 Star');
        }
        return $this->db->count_all_results('hotels');
    }

    public function count_3_star_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('star_level', '3 Star');
        }
        return $this->db->count_all_results('hotels');
    }

    public function count_2_star_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('star_level', '2 Star');
        }
        return $this->db->count_all_results('hotels');
    }




    public function count_1_star_accommodations($hotel_location = null)
    {

        if ($hotel_location) {
            $this->db->where('star_level', '1 Star');
        }
        return $this->db->count_all_results('hotels');
    }











    //REST AREA



// COUNT BY CITY

    public function count_debre_Zeit_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_city', 'Debre Zeit');

        }
        return $this->db->count_all_results('restaurants');
    }


    public function count_adama_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_city', 'Adama');
        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_bahir_dar_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_city', 'Bahir Dar');
        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_dire_dawa_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_city', 'Dire Dawa');
        }
        return $this->db->count_all_results('restaurants');
    }

    // COUNT BY SATR LEVEL

    public function count_luxury_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_class', 'Luxury');
        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_standard_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_class', 'Standard');
        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_medium_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_class', 'Medium');
        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_low_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_class', 'Low');
        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_ordinary_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_class', 'Ordinary');
        }
        return $this->db->count_all_results('restaurants');
    }


// GET restaurantS BY STAR LEVEL

    public function get_luxury_restaurants($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_class', 'Luxury');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_standard_restaurants($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_class', 'Standard');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_ordinary_restaurants($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_class', 'Ordinary');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_medium_restaurants($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_class', 'Medium');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_low_restaurants($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_class', 'Low');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_4_star_restaurants($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('star_level', '4 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_3_star_restaurants($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('star_level', '3 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_2_star_restaurants($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('star_level', '2 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_1_star_restaurants($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('star_level', '1 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function count_adiss_restaurants($link_adiss = null)
    {

        if ($link_adiss) {
            $this->db->where('restaurant_city', 'Addis Ababa');

        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_restaurants_inside_adiss($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_city', 'Addiss Ababa');
        }
        return $this->db->count_all_results('restaurants');
    }


    public function count_bole_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_location', 'bole');
        }
        return $this->db->count_all_results('restaurants');
    }


    public function count_cazanches_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_location', 'cazanchis');
        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_4_kilo_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_location', '4 kilo');
        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_piassa_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_location', 'piassa');
        }
        return $this->db->count_all_results('restaurants');
    }


    public function count_22_mazoria_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_location', '22 mazoria');
        }
        return $this->db->count_all_results('restaurants');
    }


    public function count_megenagna_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_location', 'megenagna');
        }
        return $this->db->count_all_results('restaurants');
    }


    public function count_paster_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_location', 'paster');
        }
        return $this->db->count_all_results('restaurants');
    }


    public function count_saris_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_location', 'saris');
        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_sar_bet_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_location', 'sar bet');
        }
        return $this->db->count_all_results('restaurants');
    }

    public function count_asko_restaurants($restaurant_location = null)
    {

        if ($restaurant_location) {
            $this->db->where('restaurant_location', 'asko');
        }
        return $this->db->count_all_results('restaurants');
    }

    //END OF COUNT


    //                               //GET restaurantS
    // public function get_list_of_restaurants_inside_adiss($link_adiss, $limit = 200, $offset = 0) {

    //     $this->db->select('*');
    //     $this->db->from('restaurants');
    //     $this->db->where('star_level','5 star');
    //     $this->db->limit($limit);
    //     $this->db->offset($offset);

    //     $query = $this->db->get();
    //     if ($query->num_rows > 0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }


    public function get_list_of_restaurants_inside_adiss($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_city', 'Addis Ababa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_restaurants_inside_adama($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_city', 'Adama');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_restaurants_inside_debre_zeit($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_city', 'Debre Zeit');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_restaurants_inside_dire_dawa($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_city', 'Dire Dawa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_restaurants_inside_bahir_dar($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_city', 'Bahir Dar');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    // public function get_list_of_restaurants_inside_adama($link_adiss, $limit = 200, $offset = 0) {
    //     $this->db->select('*');
    //     $this->db->from('restaurants');

    //     if ($link_adiss) {
    //         $this->db->or_like('restaurant_name', $link_adiss);
    //         $this->db->or_like('restaurant_location', $link_adiss);
    //         $this->db->or_like('star_level', $link_adiss);
    //     }

    //     $this->db->limit($limit);
    //     $this->db->offset($offset);
    //     $query = $this->db->get();
    //     if ($query->num_rows > 0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }






    public function get_list_of_accommodations_inside_adiss($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_city', 'Addis Ababa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_accommodations_inside_adama($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_city', 'Adama');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_accommodations_inside_debre_zeit($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_city', 'Debre Zeit');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_accommodations_inside_dire_dawa($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_city', 'Dire Dawa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_accommodations_inside_bahir_dar($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('hotels');
        $this->db->where('hotel_city', 'Bahir Dar');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    // public function get_list_of_accommodations_inside_adama($link_adiss, $limit = 200, $offset = 0) {
    //     $this->db->select('*');
    //     $this->db->from('hotels');

    //     if ($link_adiss) {
    //         $this->db->or_like('hotel_name', $link_adiss);
    //         $this->db->or_like('hotel_location', $link_adiss);
    //         $this->db->or_like('star_level', $link_adiss);
    //     }

    //     $this->db->limit($limit);
    //     $this->db->offset($offset);
    //     $query = $this->db->get();
    //     if ($query->num_rows > 0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }

























    public function get_list_of_guest_houses_inside_adiss($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_city', 'Addis Ababa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_guest_houses_inside_adama($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_city', 'Adama');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_guest_houses_inside_debre_zeit($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_city', 'Debre Zeit');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_guest_houses_inside_dire_dawa($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_city', 'Dire Dawa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_guest_houses_inside_bahir_dar($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_city', 'Bahir Dar');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    // public function get_list_of_guest_houses_inside_adama($link_adiss, $limit = 200, $offset = 0) {
    //     $this->db->select('*');
    //     $this->db->from('guest_houses');

    //     if ($link_adiss) {
    //         $this->db->or_like('guest_house_name', $link_adiss);
    //         $this->db->or_like('guest_house_location', $link_adiss);
    //         $this->db->or_like('star_level', $link_adiss);
    //     }

    //     $this->db->limit($limit);
    //     $this->db->offset($offset);
    //     $query = $this->db->get();
    //     if ($query->num_rows > 0) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }


















// public function get_list_of_restaurants_inside_debre_zeit($link_adiss, $limit = 200, $offset = 0) {
//         $this->db->select('*');
//         $this->db->from('restaurants');

//         if ($link_adiss) {
//             $this->db->or_like('restaurant_name', $link_adiss);
//             $this->db->or_like('restaurant_location', $link_adiss);
//             $this->db->or_like('star_level', $link_adiss);
//         }

//         $this->db->limit($limit);
//         $this->db->offset($offset);
//         $query = $this->db->get();
//         if ($query->num_rows > 0) {
//             return $query->result();
//         } else {
//             return false;
//         }
//     }


// public function get_list_of_restaurants_inside_bahir_dar($link_adiss, $limit = 200, $offset = 0) {
//         $this->db->select('*');
//         $this->db->from('restaurants_bahir_dar');

//         if ($link_adiss) {
//             $this->db->or_like('restaurant_name', $link_adiss);
//             $this->db->or_like('restaurant_location', $link_adiss);
//             $this->db->or_like('star_level', $link_adiss);
//         }

//         $this->db->limit($limit);
//         $this->db->offset($offset);
//         $query = $this->db->get();
//         if ($query->num_rows > 0) {
//             return $query->result();
//         } else {
//             return false;
//         }
//     }


// public function get_list_of_restaurants_inside_dire_dawa($link_adiss, $limit = 200, $offset = 0) {
//         $this->db->select('*');
//         $this->db->from('restaurants');

//         if ($link_adiss) {
//             $this->db->or_like('restaurant_name', $link_adiss);
//             $this->db->or_like('restaurant_location', $link_adiss);
//             $this->db->or_like('star_level', $link_adiss);
//         }

//         $this->db->limit($limit);
//         $this->db->offset($offset);
//         $query = $this->db->get();
//         if ($query->num_rows > 0) {
//             return $query->result();
//         } else {
//             return false;
//         }
//     }


    public function get_list_of_restaurants_bole($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_location', 'bole');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_restaurants_cazanches($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_location', 'cazanchis');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_restaurants_4_kilo($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_location', '4 kilo');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_restaurants_piassa($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_location', 'piassa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_restaurants_22_mazoria($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_location', '22 mazoria');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_restaurants_megenagna($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_location', 'megenagna');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_restaurants_paster($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_location', 'paster');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_restaurants_saris($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_location', 'saris');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_restaurants_sar_bet($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_location', 'sar bet');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_restaurants_asko($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_location', 'asko');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }




    public function get_list_of_restaurants_luxury($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_class', 'luxury');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_restaurants_standard($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_class', 'standard');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_restaurants_medium($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_class', 'medium');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_restaurants_ordinary($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_class', 'ordinary');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_restaurants_low($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('restaurants');
        $this->db->where('restaurant_class', 'low');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



    public function get_list_of_guest_houses( $limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
//        $this->db->from('guest_houses');
        $this->db->where('guest_house_city', 'Addis Ababa');
//        $this->db->where('guest_house_city', 'addis_ababa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



    public function count_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_city', 'Addis Ababa');
        }
        return $this->db->count_all_results('guest_houses');
    }




// COUNT BY LOCATION

    public function count_bole_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_location', 'bole');
        }
        return $this->db->count_all_results('guest_houses');
    }


    public function count_cazanches_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_location', 'cazanches');
        }
        return $this->db->count_all_results('guest_houses');
    }

    public function count_4_kilo_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_location', '4_kilo');
        }
        return $this->db->count_all_results('guest_houses');
    }

    public function count_piassa_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_location', 'piassa');
        }
        return $this->db->count_all_results('guest_houses');
    }

    public function count_22_mazoria_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_location', '22 mazoria');
        }
        return $this->db->count_all_results('guest_houses');
    }


    public function count_megenagna_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_location', 'megenagna');
        }
        return $this->db->count_all_results('guest_houses');
    }


    public function count_paster_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_location', 'paster');
        }
        return $this->db->count_all_results('guest_houses');
    }


    public function count_saris_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_location', 'saris');
        }
        return $this->db->count_all_results('guest_houses');
    }

    public function count_sar_bet_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_location', 'sar bet');
        }
        return $this->db->count_all_results('guest_houses');
    }

    public function count_asko_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_location', 'asko');
        }
        return $this->db->count_all_results('guest_houses');
    }

    // END COUNT BY LOCATION

//GET BY LOCATIONS

    public function get_list_of_guest_houses_bole($limit = 5, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_location', 'bole');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_guest_houses_cazanches($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_location', 'cazanchis');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_guest_houses_4_kilo($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_location', '4 kilo');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_guest_houses_piassa($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_location', 'piassa');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_guest_houses_22_mazoria( $limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_location', '22 mazoria');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_guest_houses_megenagna($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_location', 'megenagna');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_guest_houses_paster($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_location', 'paster');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_list_of_guest_houses_saris($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_location', 'saris');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_guest_houses_sar_bet($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_location', 'sar bet');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_list_of_guest_houses_asko($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('guest_house_location', 'asko');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



    // GET BY STAR LEVEL



    public function get_5_star_guest_houses($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('star_level', '5 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_4_star_guest_houses($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('star_level', '4 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



    public function get_3_star_guest_houses($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('star_level', '3 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_2_star_guest_houses($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('star_level', '2 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



    public function get_1_star_guest_houses($limit = 200, $offset = 0)
    {

        $this->db->select('*');
        $this->db->from('guest_houses');
        $this->db->where('star_level', '1 star');
        $this->db->limit($limit);
        $this->db->offset($offset);

        $query = $this->db->get();
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



// COUNT BY CITY

    public function count_debre_Zeit_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_city', 'Debre Zeit');

        }
        return $this->db->count_all_results('guest_houses');

    }

    public function count_adama_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_city', 'Adama');
        }
        return $this->db->count_all_results('guest_houses');
    }

    public function count_bahir_dar_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_city', 'Bahir Dar');
        }
        return $this->db->count_all_results('guest_houses');
    }

    public function count_dire_dawa_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_city', 'Dire Dawa');
        }
        return $this->db->count_all_results('guest_houses');
    }

    public function count_adiss_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('guest_house_city', 'Addis Ababa');
        }
        return $this->db->count_all_results('guest_houses');
    }





    // COUNT BY SATR LEVEL

    // COUNT BY SATR LEVEL

    public function count_5_star_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('star_level', '5 Star');
        }
        return $this->db->count_all_results('guest_houses');
    }
    public function count_4_star_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('star_level', '4 Star');
        }
        return $this->db->count_all_results('guest_houses');
    }

    public function count_3_star_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('star_level', '3 Star');
        }
        return $this->db->count_all_results('guest_houses');
    }

    public function count_2_star_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('star_level', '2 Star');
        }
        return $this->db->count_all_results('guest_houses');
    }




    public function count_1_star_guest_houses($guest_house_location = null)
    {

        if ($guest_house_location) {
            $this->db->where('star_level', '1 Star');
        }
        return $this->db->count_all_results('guest_houses');
    }






}

?>