<?php

class Pinjam extends Controller {

    public function index()
    {
        $data['page'] = 'Data Pinjam';
        $data['pinjam'] = $this->model('PinjamModel')->getAllPinjam();
        $this->view('templates/header', $data);
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['page'] = 'Tambah Pinjam';
        $this->view('templates/header', $data);
        $this->view('pinjam/create');
        $this->view('templates/footer');
    }

    public function simpanPinjam(){
        if( $this->model("PinjamModel")->tambahPinjam($_POST) > 0 ) {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function edit($id){

        $data['page'] = 'Edit Pinjam';
        $data['pinjam'] = $this->model('PinjamModel')->getPinjamById($id);
        $this->view('templates/header', $data);
        $this->view('pinjam/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePinjam(){
        if( $this->model('PinjamModel')->updateDataPinjam($_POST) > 0) {
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/pinjam/index');
            exit;
        }
    }

    public function hapus($id){
            if ( $this->model('PinjamModel')->deletePinjam($id) > 0) {
                header('location: '. BASE_URL . '/pinjam/index');
                exit;
            }else{
                header('location: '. BASE_URL . '/pinjam/index');
                exit;
            }
    }
   
}
?>