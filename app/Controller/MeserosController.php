<?php

class MeserosController extends AppController{
    public $helpers = array('Html','Form');
    public $componets = array('Session');
    
    public function index(){
        $this->set('meseros',$this->Mesero->find('all'));
    }

    public function ver($id = null) {
        if(!$id)
        {
            throw new Exception("datos invalidos");
            
        }
        $mesero = $this->Mesero->findById($id);
        print_r( $mesero);
        if(!$mesero)
        {
            throw new Exception("El mesero no existe");
        }

        $this->set('mesero',$mesero);
	}

    
    public function nuevo(){
        if ($this->request->is('post')) 
        {
            $this->Mesero->create();
            if ($this->Mesero->save($this->request->data)) 
            {
                $this->Session->setFlash('El mesero se a creado', 'default',array('class' => 'success'));
                return $this->redirect(array('action'=>'index'));
            }

            $this->Session->setFlash('No se pudo crear el mesero');
        }
    }


    public function editar($id = null){
        if(!$id){
            throw new Exception("datos invalidos");
        }

        $mesero = $this->Mesero->findById($id);
        if(!$mesero){
            throw new Exception("Mesero no encontrado");
        }

        if ($this->request->is(array('post','put'))) {
           $this->Mesero->id = $id;

           if($this->Mesero->save($this->request->data)){
               $this->Session->setFlash('El mesero a sido modificado',$element='default',$params = array('class' => 'success'));
               return $this->redirect(array('action' => 'index'));
           }
           $this->Session->setFlash('El registro no pudo ser modificado.');
        }

        if(!$this->request->data){
            $this->request->data = $mesero;
        }

    }
}