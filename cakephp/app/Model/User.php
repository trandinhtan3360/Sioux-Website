<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {



	var $name = "User";
	public function validate_passwords() {
    return $this->data[$this->alias]['confirm_password'] === $this->data[$this->alias]['confirm_password'];
}

		public $actsAs = array(
				'Upload.Upload' => array(
					'image' => array(
					   'thumbnailSizes' => array(
							'thumb' => '200x200'
						)
					)
				 )
				);

	
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array

 */

//Kiểm tra người dùng có phải là admin hay không? //
	   function checkLoginAdmin($email,$password){

	   	//select từ database 
	     $sql = "select * from users where email='$email' AND password ='$password' and role ='0'";

	      $admin_data = $this->query($sql);

	     if($this->getNumRows()==0){

	       return false;

	     }else{

	       return $admin_data[0]['users'];
	  }
	   }

   //Kiểm tra người dùng có phải là user thường hay không? //
   function checkLoginUser($email,$password){

   	//select từ database
     $sql2 = "select * from users where email='$email' AND password ='$password' and role !='0'";

     $user_data = $this->query($sql2);

     if($this->getNumRows()==0){

       return false;

     }else{

       return $user_data[0]['users'];
     }
   }
   




	public $validate = array(
		'id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Không được để rỗng',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'full_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		),
		'username' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notBlank' => array(
				'rule' => array('lengthBetween',6,20),
				'message' => 'Mật khẩu phhải lớn hơn 6 và nhỏ hơn 20 kí tự',
				//'allowEmpty' => false,
				//'required' => false,
				'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'matchPasswords' => array(
            'rule' => array('matchPasswords'),
            'message' => 'Mật khẩu của bạn không trùng khớp!'
         ),
			
			
			// 
		),
		'email' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'rule-2' => array( 
            'rule' => 'email',   
            'message' => 'Email không hợp lệ' 
            ), 
            'isUnique' => array( 
            'rule' => 'isUnique', 
            'required' => true, 
            'message' => 'Email của bạn đã được đăng ký' 
            ),
		),
		'address' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dob' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'description' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'role' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	public function matchPasswords($data){
      	if ($data['password']==$this->data['User']['confirm_password']){
            return true;
       }
       $this->invalidate('confirm_password','Mật khẩu của bạn không trùng khớp!');
        return false;
}

/**
 * belongsTo associations
 *
 * @var array
 */
	
}