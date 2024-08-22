<?php

namespace App\Controllers;

use App\Libraries\Crud;

class Projects extends BaseController
{
  protected $crud;

  function __construct()
  {
    $params = [
      'table' => 'projects',
      'dev' => false,
      'fields' => $this->fields_option(),
      'form_title_add' => 'Add Project',
      'form_title_update' => 'Edit Project',
      'form_submit' => 'Add',
      'table_title' => 'Projects',
      'form_submit_update' => 'Update',
      'base' => base_url(),
    ];

    $this->crud = new Crud($params, service('request'));
  }

  public function index()
  {
    $page = 1;
    if (isset($_GET['page'])) {
      $page = (int) $_GET['page'];
      $page = max(1, $page);
    }

    $data['title'] = $this->crud->getTableTitle();

    $per_page = 10;
    $columns = [];
    $where = [];
    $order = [
      ['p_id', 'ASC']
    ];

    $data['table'] = $this->crud->view($page, $per_page, $columns, $where, $order);
    return view('admin/projects/table', $data);
  }

  public function add()
  {
    $data['form'] = $form = $this->crud->form();
    $data['title'] = $this->crud->getAddTitle();

    if (is_array($form) && isset($form['redirect'])) {
      return redirect()->to($form['redirect']);
    }

    return view('admin/projects/form', $data);
  }

  public function edit($id)
  {
    if (!$this->crud->current_values($id)) {
      return redirect()->to($this->crud->getBase().'/'.$this->crud->getTable());
    }

    $data['item_id'] = $id;
    $data['form'] = $form = $this->crud->form();
    $data['title'] = $this->crud->getEditTitle();

    if (is_array($form) && isset($form['redirect'])) {
      return redirect()->to($form['redirect']);
    }

    return view('admin/projects/form', $data);
  }

  protected function fields_option()
  {
    $fields = [];

    $fields['p_id'] = ['label' => 'ID'];
    $fields['p_uid'] = ['label' => 'User ID'];
    $fields['p_title'] = ['label' => 'Title', 'required' => true, 'helper' => 'Type project`s title'];
    $fields['p_description'] = ['label' => 'Description', 'required' => true, 'helper' => 'Type project`s description'];
    $fields['p_start_date'] = ['label' => 'Start Date', 'required' => true, 'class' => 'col-12 col-sm-6'];
    $fields['p_end_date'] = ['label' => 'End Date', 'required' => true, 'class' => 'col-12 col-sm-6'];
    $fields['p_price'] = ['label' => 'Price', 'required' => true];
    $fields['p_status'] = ['label' => 'Status', 'required' => true];
    $fields['p_created_at'] = ['label' => 'Created At', 'only_edit' => true];
    $fields['p_updated_at'] = ['label' => 'Updated At'];

    return $fields;
  }
}
