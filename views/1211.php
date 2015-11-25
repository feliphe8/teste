pegar o login e senha digitados e compara com os registros do banco

public function getUser($nome,$pass){
    $this->db->where('nome',$nome);
    $this->db->where('pass',$pass);
    $a = $this->db->get('User');
    if($a->num_rows()>0){
        if($a->row()->nome === "root"){
            return "admin";
        }else{
            return "comum";
        }    
    }else{
        return false;
    }
}


No controller

public function auth(){
    $nome = $_POST["nome"];
    $pass = $_POST["senha"];
    $this->load->model("model");
    $usr = $this->model->getUser($nome,$pass);
    if($usr !== false){
        if($usr === "admin"){
            $this->session->set_userdata("_ID","admin");
            redirect("/login/admin");
        }else{
            $this->session->set_userdata("_ID","comum");
            $this->session->set_userdata("_NOME",$nome);
            redirect("/login/comum")
        }
    }else{
        redirect("/login/entrar")
    }
}




