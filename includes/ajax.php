<?php session_start();


if(!empty($_POST['ajax']))
{
    include('config.php');
    $ajax = $_POST['ajax'];
    switch ($ajax) {
        case 'get_prod':

                if(empty($_POST['com']))
                {
                    echo json_encode([
                            'error' => 1,
                            'msg' => 'company required',
                            'data'=> ''
                        ]);
                    exit;
                }

                $comp = $_POST['com'];

                $products = [];
                $sql = "SELECT product_title FROM `products` WHERE `company` LIKE '".$comp."'";
                $sql_result = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_assoc($sql_result))
                {
                    $products[] = $row;
                }
                echo json_encode([
                        'error' => 0,
                        'msg' => 'success',
                        'data'=> $products
                    ]);

            break;
            case 'frm_submit':
                // var_dump($_POST);die;

                $fields = ['company_name_select','product_select','organisation','email','phone','city','state','Description'];
                $val = [];

                foreach ($fields as $field)
                {
                    if( array_key_exists($field, $_POST))
                    {
                        $val[$field] = $_POST[$field];
                    }
                    else
                    {
                        $val[$field] = NULL;
                    }
                }

                $sql = "INSERT INTO `contact_form` (`company`, `product`, `organisation`, `email`, `phone`, `city`, `state`, `message`, `created_at`, `updated_at`) VALUES ( '".$val['company_name_select']."' , '".$val['product_select']."' , '".$val['organisation']."' , '".$val['email']."' , '".$val['phone']."'  , '".$val['city']."'  , '".$val['state']."' , '".$val['Description']."', NOW(),NOW() )";

                $result = mysqli_query($db, $sql);

                if($result)
                {
                echo json_encode([
                        'error' => 0,
                        'msg' => 'Success',
                        'data'=> '']);
                }
                else
                {
                    echo json_encode([
                            'error' => 1,
                            'msg' => 'Something went wrong',
                            'data'=> '']);
                }

                break;

        default:
        echo json_encode([
                'error' => 1,
                'msg' => 'action not defined',
                'data'=> '']);
            break;
    }
}
else
{
    echo json_encode([
            'error' => 1,
            'msg' => 'Only post call allowed',
            'data'=> '']);
}

 ?>
