<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class directories extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('directories_model');
        $this->load->model('hotels_model');
        $this->load->model('restaurants_model');
        $this->load->model('guest_houses_model');
        $this->load->model('hotels_model');
         $this->load->model('service_providers_model');
        $this->load->helper(array('url'));
        $this->load->helper('form');
        $this->load->database();
        $this->load->library('session');
    }

// MAIN LINKERS


 public function car_rentals($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_car_rentals('h');

        $config['base_url'] = site_url('directories/car_rentals');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_car_rentals($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();

        if ($result) {
            $this->load->view('commons/header', $data);
            $this->load->view('directories/cdiscriptor', $data);
            // $this->load->view('directories/check', $data);

            $this->load->view('directories/cthumbnail', array('car_rental_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);
            $this->load->view('commons/footer', $data);
        }
    }





public function tour_guides($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_tour_guides('h');

        $config['base_url'] = site_url('directories/count_tour_guides');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_tour_guides($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();

        if ($result) {
            $this->load->view('commons/header', $data);
            $this->load->view('directories/tdiscriptor', $data);
            // $this->load->view('directories/check', $data);

            $this->load->view('directories/tthumbnail', array('tour_guide_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);
            $this->load->view('commons/footer', $data);
        }
    }



 public function service_providers() {
        $data['title'] = 'Hotels';
        $this->car_rentals();
    }




    public function accommodations($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_accommodations('h');

        $config['base_url'] = site_url('directories/accommodations');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();

        if ($result) {
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            // $this->load->view('directories/check', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);
            $this->load->view('commons/footer', $data);
        }
    }




    public function restaurants_and_clubs($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_restaurants_and_clubs('h');

        $config['base_url'] = site_url('directories/restaurants_and_clubs');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_and_clubs($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();

        if ($result) {
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));
            $this->load->view('hotels/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);
            $this->load->view('commons/footer', $data);
        }
    }




    public function get_list_of_accommodations_cazanches($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_cazanches_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_cazanches');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_cazanches($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }



    public function get_list_of_accommodations_bole($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_bole_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_cazanches');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_cazanches($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_4_kilo($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_4_kilo_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_4_kilo');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_4_kilo($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_piassa($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_piassa_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_piassa');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_piassa($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_22_mazoria($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_22_mazoria_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_22_mazoria');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_22_mazoria($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_megenagna($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_megenagna_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_megenagna');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_megenagna($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_paster($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_paster_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_paster');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_paster($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_saris($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_saris_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_saris');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_saris($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_sar_bet($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_sar_bet_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_sar_bet');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_sar_bet($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_asko($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_asko_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_asko');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_asko($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }





    public function get_list_of_accommodations_5_star($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_5_star_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_5_star');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_5_star_accommodations($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_4_star($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_4_star_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_4_star');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_4_star_accommodations($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_3_star($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_3_star_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_3_star');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_3_star_accommodations($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_2_star($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_2_star_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_2_star');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_2_star_accommodations($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_accommodations_1_star($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_1_star_accommodations('h');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_1_star');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_1_star_accommodations($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }





    // RESTAURANT




    public function get_list_of_restaurants_bole($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_bole_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_bole');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_bole($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_cazanches($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_cazanches_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_cazanches');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_cazanches($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_4_kilo($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_4_kilo_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_4_kilo');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_4_kilo($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_restaurants_piassa($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_piassa_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_piassa');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_piassa($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_22_mazoria($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_22_mazoria_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_22_mazoria');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_22_mazoria($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_megenagna($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_megenagna_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_megenagna');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_megenagna($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_paster($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_paster_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_paster');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_paster($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_saris($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_saris_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_saris');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_saris($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_restaurants_sar_bet($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_sar_bet_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_sar_bet');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_sar_bet($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_restaurants_asko($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_asko_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_asko');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_asko($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    
    
    // By CLASS

    public function get_list_of_restaurants_luxury($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_luxury_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_luxury');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_luxury($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_restaurants_medium($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_medium_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_medium');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_medium($limit, $offset);
        $result2 = $this->directories_model->get_list_of_advert($limit, $offset);
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_restaurants_low($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_low_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_low');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_low($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_restaurants_standard($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_standard_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_standard');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_standard($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_ordinary($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_ordinary_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_ordinary');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_ordinary($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }




    public function get_list_of_restaurants_inside_adiss($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_adiss_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_inside_adiss');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_inside_adiss($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));


            $this->load->view('restaurants/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_inside_debre_zeit($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_debre_zeit_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_inside_debre_zeit');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_inside_debre_zeit($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('restaurants/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_inside_adama($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_adama_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_inside_adama');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_inside_adama($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));
            $this->load->view('restaurants/adv_header', $data);
            $this->load->view('restaurants/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_inside_bahir_dar($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_bahir_dar_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_inside_bahir_dar');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_inside_bahir_dar($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('restaurants/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_restaurants_inside_dire_dawa($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_dire_dawa_restaurants('r');
        $config['base_url'] = site_url('directories/get_list_of_restaurants_inside_dire_dawa');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_restaurants_inside_dire_dawa($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);

            $this->load->view('directories/thumbrest', array('restaurant_location' => $result));

            $this->load->view('restaurants/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }
















    public function get_list_of_guest_houses_inside_adiss($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_adiss_guest_houses('r');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_inside_adiss');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_inside_adiss($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));


            $this->load->view('guest_houses/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('guest_houses/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_guest_houses_inside_debre_zeit($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_debre_zeit_guest_houses('r');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_inside_debre_zeit');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_inside_debre_zeit($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));

            $this->load->view('guest_houses/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('guest_houses/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_guest_houses_inside_adama($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_adama_guest_houses('r');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_inside_adama');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_inside_adama($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));
            $this->load->view('guest_houses/adv_header', $data);
            $this->load->view('guest_houses/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('guest_houses/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_guest_houses_inside_bahir_dar($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_bahir_dar_guest_houses('r');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_inside_bahir_dar');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_inside_bahir_dar($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));

            $this->load->view('guest_houses/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('guest_houses/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_guest_houses_inside_dire_dawa($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_dire_dawa_guest_houses('r');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_inside_dire_dawa');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_inside_dire_dawa($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));

            $this->load->view('guest_houses/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('guest_houses/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }



















    public function get_list_of_accommodations_inside_adiss($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_adiss_accommodations('r');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_inside_adiss');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_inside_adiss($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('hotelsno_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_accommodations_inside_debre_zeit($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_debre_zeit_accommodations('r');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_inside_debre_zeit');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_inside_debre_zeit($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('hotelsno_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_accommodations_inside_adama($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_adama_accommodations('r');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_inside_adama');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_inside_adama($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));
            $this->load->view('hotels/adv_header', $data);
            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('hotelsno_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_accommodations_inside_bahir_dar($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_bahir_dar_accommodations('r');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_inside_bahir_dar');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_inside_bahir_dar($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('hotelsno_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function get_list_of_accommodations_inside_dire_dawa($offset = 0)
    {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_dire_dawa_accommodations('r');
        $config['base_url'] = site_url('directories/get_list_of_accommodations_inside_dire_dawa');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_accommodations_inside_dire_dawa($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);

            $this->load->view('directories/thumbnail', array('hotel_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2)); $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('hotelsno_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }














    public function guest_houses($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_guest_houses('h');

        $config['base_url'] = site_url('directories/guest_houses');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();

        if ($result) {
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            // $this->load->view('directories/check', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);
            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_cazanches($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_cazanches_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_cazanches');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_cazanches($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }



    public function get_list_of_guest_houses_bole($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_bole_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_cazanches');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_cazanches($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_4_kilo($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_4_kilo_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_4_kilo');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_4_kilo($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_piassa($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_piassa_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_piassa');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_piassa($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_22_mazoria($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_22_mazoria_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_22_mazoria');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_22_mazoria($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_megenagna($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_megenagna_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_megenagna');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_megenagna($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_paster($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_paster_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_paster');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_paster($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_saris($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_saris_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_saris');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_saris($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_sar_bet($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_sar_bet_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_sar_bet');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_sar_bet($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_asko($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_asko_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_asko');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_list_of_guest_houses_asko($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }





    public function get_list_of_guest_houses_5_star($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_5_star_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_5_star');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_5_star_guest_houses($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_4_star($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_4_star_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_4_star');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_4_star_guest_houses($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_3_star($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_3_star_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_3_star');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_3_star_guest_houses($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_2_star($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_2_star_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_2_star');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_2_star_guest_houses($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

    public function get_list_of_guest_houses_1_star($offset = 0) {

        $this->load->library('pagination');
        $limit = 6;
        $total = $this->directories_model->count_1_star_guest_houses('h');
        $config['base_url'] = site_url('directories/get_list_of_guest_houses_1_star');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->directories_model->get_1_star_guest_houses($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);

            $this->load->view('directories/gthumbnail', array('guest_house_location' => $result));


            $this->load->view('hotels/advertisement_view', array('advert' => $result2));

            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }


    public function search_restaurants($offset = 0)
    {
        $restaurant_location = $this->input->post('search_term');
        $data['restaurant_location'] = $this->restaurants_model->search_restaurants($restaurant_location);
        $this->load->library('pagination');
        $limit = 8;
        $total = 20;
        $config['base_url'] = site_url('directories/search_restaurants');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->restaurants_model->search_restaurants($restaurant_location, $limit, $offset);
        $result2 = $this->restaurants_model->get_list_of_advert();
        if ($result && $restaurant_location) {
            $this->load->view('commons/header', $data);
            $this->load->view('directories/rdiscriptor', $data);
            $this->load->view('directories/rsearch_view', array('restaurant_location' => $result));
            $this->load->view('hotels/advertisement_view', $data);
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('restaurants/discriptor', $data);
            $this->load->view('restaurants/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }











    public function search_hotels($offset = 0) {
        $hotel_location = $this->input->post('search_term');
        $data['hotel_location'] = $this->hotels_model->search_hotels($hotel_location);
        $this->load->library('pagination');
        $limit = 8;
        $total = 20;
        $config['base_url'] = site_url('hotels/search_hotels');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->hotels_model->search_hotels($hotel_location, $limit, $offset);
        if ($result && $hotel_location) {
            $this->load->view('commons/header', $data);
            $this->load->view('directories/discriptor', $data);
            $this->load->view('directories/hsearch_view', array('hotel_location' => $result));
            $this->load->view('hotels/advertisement_view', $data);
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('hotels/discriptor', $data);
            $this->load->view('hotels/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }







    public function search_guest_houses($offset = 0)
    {
        $guest_house_location = $this->input->post('search_term');
        $data['guest_house_location'] = $this->guest_houses_model->search_guest_houses($guest_house_location);
        $this->load->library('pagination');
        $limit = 8;
        $total = 20;
        $config['base_url'] = site_url('directories/search_guest_houses');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->guest_houses_model->search_guest_houses($guest_house_location, $limit, $offset);
        $result2 = $this->guest_houses_model->get_list_of_advert();
        if ($result && $guest_house_location) {
            $this->load->view('commons/header', $data);
            $this->load->view('directories/gdiscriptor', $data);
            $this->load->view('directories/gsearch_view', array('guest_house_location' => $result));
            $this->load->view('hotels/advertisement_view', $data);
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('guest_houses/discriptor', $data);
            $this->load->view('guest_houses/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }

}
?>.