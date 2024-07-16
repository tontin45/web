<?php

class Dashboard extends Admin_Controller 
{
    public function __construct()
    {
        parent::__construct();

        $this->not_logged_in();

        $this->data['page_title'] = 'Dashboard';
        
        $this->load->model('model_products');
        // Cargar otros modelos según sea necesario
    }

    public function index()
    {
        // Obtener los datos para el nuevo diseño del dashboard
        $this->data['total_products'] = $this->model_products->countTotalProducts();

        $user_id = $this->session->userdata('id');
        $is_admin = ($user_id == 1) ? true : false;

        $this->data['is_admin'] = $is_admin;

        // Obtener todos los productos
        $this->data['products'] = $this->model_products->getProductData();

        $this->render_template('dashboard', $this->data);
    }
}
?>
