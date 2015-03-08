<?php
	App::uses('AppModel','Model');
	class Tbl_book extends AppModel{
		public $name = 'Tbl_book';

        public $belongsTo = array(
                'Tbl_receive' => array(
                    'className' => 'Tbl_receive',
                    'foreignKey' => 'id'
                )
                );
	}
	

