<?php
require_once "./src/classes/Category.php";

switch ($_GET["url"]) {

   
    case 'view_cat':

        $category = new Category();
        $result = $category->view_categories();
        echo json_encode($result);
        break;
    
     
        
    case 'insert_cat':
        if(isset($_POST['lable']))
        $category = new Category();
        $result = $category->insert_category($_POST['lable']);
        echo json_encode($result);
        break;


        
    case 'edit_cat':

    if(isset($_POST['lable ,id']))
    $category = new Category();
    $result = $category->edit_category($_POST['lable,id']);
    echo json_encode($result);
    break;

    case 'delete_cat':

    if(isset($_POST['id']))
    $category = new Category();
    $result = $category->delete_category($_POST['id']);
    echo json_encode($result);
    break;

    default:
        # code...
        
}