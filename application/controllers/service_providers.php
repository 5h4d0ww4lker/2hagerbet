<!--

/* ========================================================================
 * Authors: Melaku Minas And Nebil Fikru
 * www.2hagerbet.com
 * ========================================================================
  */-->
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class service_providers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('service_providers_model');
        $this->load->model('hotels_model');
        $this->load->helper(array('url'));
        $this->load->helper('form');
        $this->load->database();
        $this->load->library('session');
    }

    public function tour_guides() {
        $data['title'] = 'service_providers';
        $this->get_list_of_tour_guides();
    }

    
    public function load_tour_guide_details($tg_id) {


        $result = $this->service_providers_model->load_tour_guide_details($tg_id);
        // print($result);
        // die();

        if ($result) {
            $this->load->view('commons/header');
            $this->load->view('service_providers/tour_guides/toper', array('tour_guide_location' => $result));
            $this->load->view('service_providers/tour_guides/single_tour_guide', array('tour_guide_detail' => $result));
            $this->load->view('hotels/advertisement_view');
            $this->load->view('commons/footer');
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );


            $this->load->view('service_providers/tour_guides/no_results', $data);
        }
    }


    public function get_list_of_tour_guides($offset = 0) {

        $this->load->library('pagination');
        $limit = 4;
        $total = $this->service_providers_model->count_tour_guides('h');
        $config['base_url'] = site_url('service_provders/tour_guides');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
         $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->service_providers_model->get_list_of_tour_guides($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('service_providers/tour_guides/discriptor', $data);

            $this->load->view('service_providers/tour_guides/thumbnail', array('tour_guide_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('service_providers/tour_guides/discriptor', $data);
            $this->load->view('service_providers/tour_guides/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }



    public function search_tour_guides($offset = 0) {
        $tour_guide_location = $this->input->post('search_term');
        $data['tour_guide_location'] = $this->service_providers_model->search_tour_guides($tour_guide_location);
        $this->load->library('pagination');
        $limit = 8;
        $total = 20;
        $config['base_url'] = site_url('service_providers/search_tour_guides');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
         $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->service_providers_model->search_tour_guides($tour_guide_location, $limit, $offset);
        // print($result);
        // die();
        if ($result && $tour_guide_location) {
            $this->load->view('commons/header', $data);
            $this->load->view('service_providers/tour_guides/discriptor', $data);

            $this->load->view('service_providers/tour_guides/search_view', array('tour_guide_location' => $result));

            $this->load->view('hotels/advertisement_view', $data);
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('service_providers/tour_guides/discriptor', $data);
            $this->load->view('service_providers/tour_guides/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }









// CAR RENTALS


    public function car_rentals() {
        $data['title'] = 'service_providers';
        $this->get_list_of_car_rentals();
    }

    
    public function load_car_rental_details($cr_id) {


        $result = $this->service_providers_model->load_car_rental_details($cr_id);
        // print($result);
        // die();

        if ($result) {
            $this->load->view('commons/header');
            $this->load->view('service_providers/car_rentals/toper', array('car_rental_detail' => $result));
            $this->load->view('service_providers/car_rentals/single_car_rental', array('car_rental_detail' => $result));
            $this->load->view('hotels/advertisement_view');
            $this->load->view('commons/footer');
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );


            $this->load->view('service_providers/car_rentals/no_results', $data);
        }
    }


    public function get_list_of_car_rentals($offset = 0) {

        $this->load->library('pagination');
        $limit = 4;
        $total = $this->service_providers_model->count_tour_guides('h');
        $config['base_url'] = site_url('service_provders/car_rentals');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
         $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->service_providers_model->get_list_of_car_rentals($limit, $offset);
        $result2 = $this->hotels_model->get_list_of_advert();
        if ($result) {
            $this->session->set_userdata('logged_in', $result);
            $this->load->view('commons/header', $data);
            $this->load->view('service_providers/car_rentals/discriptor', $data);

            $this->load->view('service_providers/car_rentals/thumbnail', array('car_rental_location' => $result));

            $this->load->view('hotels/advertisement_view', array('advert' => $result2));
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('service_providers/car_rentals/discriptor', $data);
            $this->load->view('service_providers/car_rentals/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }



    public function search_car_rentals($offset = 0) {
        $car_rental_location = $this->input->post('search_term');
        $data['tour_guide_location'] = $this->service_providers_model->search_car_rentals($car_rental_location);
        $this->load->library('pagination');
        $limit = 8;
        $total = 20;
        $config['base_url'] = site_url('service_providers/search_car_rentals');
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
         $config['num_links'] = 5;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        $data['page_links'] = $this->pagination->create_links();
        $result = $this->service_providers_model->search_car_rentals($car_rental_location, $limit, $offset);
        // print($result);
        // die();
        if ($result && $car_rental_location) {
            $this->load->view('commons/header', $data);
            $this->load->view('service_providers/car_rentals/discriptor', $data);

            $this->load->view('service_providers/car_rentals/search_view', array('car_rental_location' => $result));

            $this->load->view('hotels/advertisement_view', $data);
            $this->load->view('commons/footer', $data);
        } else {
            $data = array(
                'error_message' => 'List Empity'
            );
            $this->load->view('commons/header', $data);
            $this->load->view('service_providers/car_rentals/discriptor', $data);
            $this->load->view('service_providers/car_rentals/no_results', $data);

            $this->load->view('commons/footer', $data);
        }
    }











}
?>.




