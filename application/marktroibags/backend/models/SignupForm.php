<?php
namespace backend\models;

use common\models\Admin;
use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
	public $fname;
	public $lname;
	public $contact_no;	
    public $username;
    public $email;
    public $password;
	public $company_name;
	public $company_description;
	public $shipping_address;
	public $captcha;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
		
			['fname', 'required'],
			['lname', 'required'],
			['contact_no', 'required'],

            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\Admin', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\Admin', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
			
			['company_name', 'required'],
			['shipping_address', 'required'],
			
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new Admin();
			$user->fname = $this->fname;
			$user->lname = $this->lname;
			$user->contact_no = $this->contact_no;
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
			$user->company_name = $this->company_name;
			$user->company_description = $this->company_description;
			$user->shipping_address = $this->shipping_address;
            $user->generateAuthKey();
			$user1 = new User();
			$user1->fname = $this->fname;
			$user1->lname = $this->lname;
			$user1->contact_no = $this->contact_no;
            $user1->username = $this->username;
            $user1->email = $this->email;
            $user1->setPassword($this->password);
			$user1->company_name = $this->company_name;
			$user1->company_description = $this->company_description;
			$user1->shipping_address = $this->shipping_address;
            $user1->generateAuthKey();

            if ($user->save() && $user1->save()) {
                return $user;
				return user1;
            }
        }

        return null;
    }
}