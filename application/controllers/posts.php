<?php


class posts extends CI_Controller{

    public function index(){

        $data['title'] = 'Latest Posts';

        $data['posts'] = $this->Post_model->get_posts();

        //print_r($data['posts']);

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slag = NULL){

        $data['post'] = $this->Post_model->get_posts($slag);

        if(empty($data['post'])){

            show_404();
        }

        $data['title'] = $data['post']['title'];

        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }

}
