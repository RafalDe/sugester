<?php
namespace Sugester;

class Client
{
    protected $data = [
        'id' => '',
        'name' => '',
        'tax_no' => '',
        'post_code' => '',
        'city' => '',
        'street' => '',
        'first_name' => '',
        'country' => '',
        'email' => '',
        'phone' => '',
        'www' => '',
        'fax' => '',
        'created_at' => '',
        'updated_at' => '',
        'street_no' => '',
        'kind' => '',
        'bank' => '',
        'bank_account' => '',
        'bank_account_id' => '',
        'shortcut' => '',
        'note' => '',
        'last_name' => '',
        'discount' => '',
        'payment_to_kind' => '',
        'use_delivery_address' => '',
        'delivery_address' => '',
        'mobile_phone' => '',
        'company' => '',
        'register_number' => '',
        'description' => '',
        'project_id' => '',
        'contact_id' => '',
        'appendixes_count' => '',
        'posts_count' => '',
        'contacts_count' => '',
        'last_activity' => '',
        'string1..10' => '',
        'integer1..10' => '',
        'decimal1..10' => '',
        'checkbox1..10' => '',
        'date1..10' => '',
        'text1..10' => '',
        'datetime1..10' => '',
        'avatar_file_name' => '',
        'avatar_content_type',
        'avatar_file_size',
        'avatar_updated_at',
        'status_id' => '',
        'category_id' => '',
        'department_id' => '',
        'position' => '',
        'creator_id' => '',
        'updater_id' => '',
        'responsible_id' => '',
        'province' => '',
        'sensitive_data' => '',
        'external_id' => '',
        'token' => '',
        'paid_from' => '',
        'paid_to' => '',
        'paid_total' => ''
    ];

    public function setFirstName($value)
    {
        $this->data['first_name'] = $value;

        return $this;
    }

    public function setLastName($value)
    {
        $this->data['last_name'] = $value;

        return $this;
    }

    public function setPhone($value)
    {
        $this->data['phone'] = $value;

        return $this;
    }

    public function setEmail($value)
    {
        $this->data['email'] = $value;

        return $this;
    }

    public function setNote($value)
    {
        $this->data['note'] = $value;

        return $this;
    }

    public function setCity($value)
    {
        $this->data['city'] = $value;

        return $this;
    }

    public function setStreet($value)
    {
        $this->data['street'] = $value;

        return $this;
    }

    public function setPostCode($value)
    {
        $this->data['post_code'] = $value;

        return $this;
    }

    public function setCountry($value)
    {
        $this->data['country'] = $value;

        return $this;
    }

    public function setStreetNo($value)
    {
        $this->data['street_no'] = $value;

        return $this;
    }

    public function setCreatorId($value)
    {
        $this->data['creator_id'] = $value;

        return $this;
    }

    public function setDescription($value)
    {
        $this->data['description'] = $value;

        return $this;
    }

    public function setProjectId($value)
    {
        $this->data['project_id'] = $value;

        return $this;
    }

    public function get()
    {
        $this->data['name'] = $this->data['first_name'].' '.$this->data['last_name'];
        $this->data['string1'] = 'lol?';
        $this->data['additional_fields'] = new \stdClass;
        $this->data['additional_fields']->test1 = 'test2';
        return $this->data;
    }
}
