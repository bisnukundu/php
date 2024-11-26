<?php 
    function index(){
        $config = require "./config.php";

        $db = new Database($config['database']);

        $contacts = $db->query("select * from contacts")->all();    
        view('contacts.template',[
            'contacts'=>$contacts
        ]);
    }

    function create(){
        $config = require "./config.php";

        $db = new Database($config['database']);
        
        $contact = $db->query("insert into contacts(name, location, number) values (:name,:location,:number)",[
            'name'=> $_POST['name'],
            'location'=>$_POST['location'],
            'number'=>$_POST['number']
     ]);

     $contacts = $db->query("select * from contacts")->all();
     view('contacts.template',[
        'contacts'=>$contacts
    ]);
    }