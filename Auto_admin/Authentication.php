<?php
// 33FQZMW
session_start();

if (isset($_POST['signin'])) {
    require 'dbh.php';

    extract($_POST);
    if (empty($email) || empty($password)) {
        header('location:signin?error=Emptyfields');

    }else {
        $sql =" SELECT * from `auto_info` WHERE email = ?";
        $stmt= mysqli_stmt_init($mar);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
             header('Location:signin?error=sqlerror');
            
        }else {
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                   $pwdcheck=password_verify($password, $row['password']);

                   if ($pwdcheck == false) {
                    header('Location:signin?error=wrongpassword');
                       
                   }elseif ($pwdcheck == true) {
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['user'] = $row['Fullname'];
                        $_SESSION['email'] = $row['email'];
                        // $_SESSION['email'] = $row['email'];
                      $_SESSION['admin_name'] = $row['User_type'];
                       
                      if ($_SESSION['admin_name'] == 'admin') {

                        header('Location:signin?Success=Loggedin');
                        header('Location:dashboard');
                          

                      }elseif ( $_SESSION['admin_name']== 'customer') {

                        // header('Location:signin?Success=Loggedin');
                        header('location:user_dashboard');
                        header('Location:signin?Success=Loggedin');
                          

                      }
                   
                }
        }else {
            header('Location:signin?error=InvalidCredentials');
        
            }
    }
    }
    
}

   

function add_prod()
{
   require 'dbh.php';
    
    $errors;
    $images=[];
        if (isset($_POST['add'])) {
            require 'dbh.php';
            print_r($_POST);
            extract($_POST);
            if (!empty($productname) || !empty($productbrand) || !empty($productmileage) || !empty($productyear) || !empty($productprice) || !empty($dateofupload) || !empty($productdescription)) {
                
                            // print_r($_FILES);
            $File  = $_FILES['files'];
            $Filename = $File['name'];
            $Filetmp_name = $File['tmp_name'];
            $Filetype = $File['type'];
            $Fileerror = $File['error'];
            $Filesize = $File['size'];
            $array=array('jpeg', 'jpg', 'png',);

            $error= '';

            // str_word_count(textarea)<50
            if (str_word_count($productdescription) < 50) {

                echo '<div x-show="open" x-data="{ open: true }">
                <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                    <div class="flex oq fg fd">
                        <div class="flex">
                            <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                            </svg>
                            <div class="gk">Words with less than 50 characters are not allowed</div>
                        </div>
                        <button class="bd ke ml-3 if" @click="open = false">
                            <div class="tc">Close</div>
                            <svg class="ue on db">
                                <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>';
        }else {

            for ($i=0; $i <count($Fileerror) ; $i++) { 
            $fileext=explode("/",  $Filetype[$i]);
            if ($Fileerror[$i]==0) {
            if ($fileext[0]=='image') {
                    if ($Filesize[$i] < 50000000) {
                        $filenewname = uniqid('', true). '.'.  $array[1];
                        $destination='images/'.$filenewname;
                        move_uploaded_file($Filetmp_name[$i], $destination);
                        array_push($images, $filenewname);

                    }else {
                        $error='file';
                       
                    }
                }else {
                    $error = 'supported';
                      
                }
            }else {
                $error= 'upload'; 
                
            }
        }
        if ($error=='file') {
                  echo '<div x-show="open" x-data="{ open: true }">
        <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
            <div class="flex oq fg fd">
                <div class="flex">
                    <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                    </svg>
                    <div class="gk">File size is too big</div>
                </div>
                <button class="bd ke ml-3 if" @click="open = false">
                    <div class="tc">Close</div>
                    <svg class="ue on db">
                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>';
        }elseif ($error=='upload') {
            echo '<div x-show="open" x-data="{ open: true }">
            <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                <div class="flex oq fg fd">
                    <div class="flex">
                        <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                        </svg>
                        <div class="gk">There was an error Uploading your file</div>
                    </div>
                    <button class="bd ke ml-3 if" @click="open = false">
                        <div class="tc">Close</div>
                        <svg class="ue on db">
                            <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>';
        }elseif ($error=='supported') {
            echo '<div x-show="open" x-data="{ open: true }">
            <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                <div class="flex oq fg fd">
                    <div class="flex">
                        <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                        </svg>
                        <div class="gk">File type not supported</div>
                    </div>
                    <button class="bd ke ml-3 if" @click="open = false">
                        <div class="tc">Close</div>
                        <svg class="ue on db">
                            <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>';        
        }else{

        
        $ad=json_encode($images);

        $sql="INSERT INTO `add_product`(`Product_name`, `Product_brand`, `Product_Mileage`, `Product_description`, `Product_year`, `Product_price`, `Date_uploaded`, `Product_image`) VALUES ('$productname','$productbrand','$productmileage','$productdescription','$productyear','$productprice','$dateofupload','$ad')";
        // $sql="INSERT INTO `add_product`(`Product_name`, `Product_brand`, `Product_Mileage`, `Product_description`, `Product_year`, `Product_price`, `Date_uploaded`, `Product_image`) VALUES ('$productname', '$productbrand', '$productmileage','$productdescription', '$productyear', '$productprice', '$dateofupload', '$ad')";
      $result = mysqli_query($mar, $sql);
      
        if ($result) {
         
        echo'<div x-show="open" x-data="{ open: true }">
        <div class="inline-flex u_ vd vg rounded-sm text-sm hk yo">
            <div class="flex oq fg fd">
                <div class="flex">
                    <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                    </svg>
                    <div class="gk">Upload Successful</div>
                </div>
                <button class="bd ke ml-3 if" @click="open = false">
                    <div class="tc">Close</div>
                    <svg class="ue on db">
                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                    </svg>
                </button>
            </div>
        </div>
      </div>';
        }else {
                
            echo '<div x-show="open" x-data="{ open: true }">
        <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
            <div class="flex oq fg fd">
                <div class="flex">
                    <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                    </svg>
                    <div class="gk">DB error</div>
                </div>
                <button class="bd ke ml-3 if" @click="open = false">
                    <div class="tc">Close</div>
                    <svg class="ue on db">
                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>';
        }
    }
}
}else {  
        echo '<div x-show="open" x-data="{ open: true }">
        <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
            <div class="flex oq fg fd">
                <div class="flex">
                    <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                    </svg>
                    <div class="gk">All Fields Are Required</div>
                </div>
                <button class="bd ke ml-3 if" @click="open = false">
                    <div class="tc">Close</div>
                    <svg class="ue on db">
                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>';
    }
            
}
    }
    
function pro_list()  
{
    require 'dbh.php';
    
    $sq="SELECT * FROM `add_product`";
    $query=mysqli_query($mar, $sq);

if (mysqli_num_rows($query)>0) {
    while ($row = mysqli_fetch_assoc($query)) {
        
        $id=$row['id'];
        $pro_n=$row['Product_name'];
        $pro_b=$row['Product_brand'];
        $pro_mi=$row['Product_Mileage'];        
        $pro_y=$row['Product_year'];
        $pro_p=$row['Product_price'];
        $date=$row['Date_uploaded'];
        $pro_d=$row['Product_description'];        
        $pro_i=json_decode($row['Product_image']);
        echo '<tr>
        <td class="v_ wk xe vm co ut">
            <div class="flex items-center">
                <label class="inline-flex">
                    <span class="tc">Select</span>
                    <input class="table-item to" type="checkbox" @click.stop="uncheckParent"> </label>
            </div>
        </td>
        <td class="v_ wk xe vm co qw">
            <div class="flex items-center">
                <div class="uo oa ap mr-2 _f">
                    <img class="uo oa rounded-full" src="images/'.@$pro_i[0].'" width="36"
                        height="36" alt="Transaction 03"> </div>
                <div class="gk text-slate-800">'.$pro_n.'</div>
            </div>
        </td>

        <td class="v_ wk xe vm co ut">
        <div class="gd yg gk">'.$pro_b.'</div>
        </td> 
        <td class="v_ wk xe vm co ut">
        <div class="gd yg gk">'.$pro_mi.'</div>
        </td>
        
        <td class="v_ wk xe vm co ut">
            <div class="gd yg gk">'.$pro_y.'</div>
        </td>

        <td class="v_ wk xe vm co ut">
            <div class="gd yg gk">'.number_format($pro_p).'</div>
        </td>
        <td class="v_ wk xe vm co ut">
            <div class="gd yg gk">'.$date.'</div>
        </td> 
        <td class="v_ wk xe vm co ut">
        <div class="gd yg gk">'.substr($pro_d, 0, 50). '...</div>
        </td>
        <td class="v_ wk xe vm co ut">
            <div class="gd bo gk"> 
            <button class="">
            <a href=edit?getid='. $id.'>
            <button class="btn hk xf yo tn oq">
        <svg class="ue on db text-slate-500 ap" viewBox="0 0 16 16">
        <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
        </svg>
        <span class="r_">Edit</span>
    </button></a>
            </div>
        </td>
        <td class="v_ wk xe vm co ut">
            <div class="gd bo gk">
            <button class="btn border-slate-200 hover--border-slate-300 yl">
        <svg class="ue on db ap" viewBox="0 0 16 16">
            <path d="M5 7h2v6H5V7zm4 0h2v6H9V7zm3-6v2h4v2h-1v10c0 .6-.4 1-1 1H2c-.6 0-1-.4-1-1V5H0V3h4V1c0-.6.4-1 1-1h6c.6 0 1 .4 1 1zM6 2v1h4V2H6zm7 3H3v9h10V5z"></path>
        </svg>
        <span class="r_"><a href="?del='.$id.'">Delete</a></span>
    </button>
            </div>
        </td>
    </tr>';
    }
}

}


 function getdata($params)
 {
    require 'dbh.php';   
   if (isset($_GET['getid'])) {
     $uid=$_GET['getid'];
     $sql="SELECT * FROM add_product WHERE id ='$uid'";
     $query= mysqli_query($mar, $sql);
     if (mysqli_num_rows($query)>0) {
      $row = mysqli_fetch_assoc($query);

            echo $row[$params];
        }else{
            echo 'user does not exist';
        }
          
   }    
 } 
 


 function update()
 {  $error='';
     $images=[];
    if (isset($_POST['update'])) {
        require 'dbh.php';
print_r($_POST);
        $uid=$_GET['getid'];
        $pro_n=$_POST['productname'];
        $pro_b=$_POST['productbrand'];
        $pro_mi=$_POST['productmileage'];                
        $pro_y=$_POST['productyear'];
        $pro_p=$_POST['productprice'];
        $pro_date=$_POST['dateofupload'];
        $pro_d=$_POST['productdescription'];        
      

            if (empty($pro_n) || empty($pro_b) || empty($pro_y) ||empty($pro_mi)|| empty($pro_p) ||empty($pro_date) ||empty($pro_d)) {
                        echo '<div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                            <div class="flex oq fg fd">
                                <div class="flex">
                                    <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div class="gk">All Fields Are Required</div>
                                </div>
                                <button class="bd ke ml-3 if" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="ue on db">
                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>';
                    
                }else {
                    if (str_word_count($pro_d) < 50) {

                        echo '<div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                            <div class="flex oq fg fd">
                                <div class="flex">
                                    <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div class="gk">Words with less than 50 characters are not allowed</div>
                                </div>
                                <button class="bd ke ml-3 if" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="ue on db">
                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>';
                }else{ 
                    $files=$_FILES['files'];
            
                    $Filename=$files['name'];
                    $Filetype=$files['type'];
                    $Filetmp_name=$files['tmp_name'];
                    $Fileerror=$files['error'];
                    $Filesize=$files['size'];
                   $allowed=array('jpeg', 'jpg', 'png');
                   
                   
                    for ($i=0; $i <count($Fileerror) ; $i++) { 
                        $fileext=explode('/', $Filetype[$i]);
                        if ($Fileerror[$i]==0) {
                            if ($fileext[0]=='image') {
                            if ($Filesize[$i] < 5000000000) {
                                $filenewname=uniqid('', true).$allowed[0];
                                $destination='images/'.  $filenewname;
                                move_uploaded_file($Filetmp_name[$i], $destination);
                                array_push($images, $filenewname);
                            }else {
                                $error='size';
                            }
                            }
                            else {
                                $error='supported';
                            }
                        }else{
                             if ($Fileerror[$i]==4) {
                            $mysql="SELECT * FROM add_product WHERE id='$uid' ";
                            $re=mysqli_query($mar, $mysql);
                             $res = mysqli_fetch_assoc($re);
                             $image = $res['Product_image'];
                            
                        }
                    }
                    
                    }
               
           
                 if ($error=='size') {
                    echo '<div x-show="open" x-data="{ open: true }">
                    <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                        <div class="flex oq fg fd">
                            <div class="flex">
                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                </svg>
                                <div class="gk">File size is too big</div>
                            </div>
                            <button class="bd ke ml-3 if" @click="open = false">
                                <div class="tc">Close</div>
                                <svg class="ue on db">
                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>';
                }elseif ($error=='supported') {
                    echo '<div x-show="open" x-data="{ open: true }">
                    <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                        <div class="flex oq fg fd">
                            <div class="flex">
                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                </svg>
                                <div class="gk">File type not supported</div>
                            </div>
                            <button class="bd ke ml-3 if" @click="open = false">
                                <div class="tc">Close</div>
                                <svg class="ue on db">
                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>';
                }elseif ($error=='upload') {
                    echo '<div x-show="open" x-data="{ open: true }">
                    <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                        <div class="flex oq fg fd">
                            <div class="flex">
                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                </svg>
                                <div class="gk">There was an error uploading your file</div>
                            </div>
                            <button class="bd ke ml-3 if" @click="open = false">
                                <div class="tc">Close</div>
                                <svg class="ue on db">
                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>';
                }else {
                    $ad=json_encode($images);    
                    $query="UPDATE `add_product` SET `id`='$uid',`Product_name`='$pro_n',`Product_brand`='$pro_b',`Product_Mileage`,=`$pro_mi`,`Product_description`='$pro_d',`Product_year`='$pro_y',`Product_price`='$pro_p',`Date_uploaded`='$pro_date',`Product_image`='$ad' WHERE id='$uid'";
                    $result = mysqli_query($mar, $query);
                

                
                    if ($result) {
                        echo'<div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex u_ vd vg rounded-sm text-sm hk yo">
                            <div class="flex oq fg fd">
                                <div class="flex">
                                    <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                    </svg>
                                    <div class="gk">Updated Successfully</div>
                                </div>
                                <button class="bd ke ml-3 if" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="ue on db">
                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>';
                    }else {
                        echo '<div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                            <div class="flex oq fg fd">
                                <div class="flex">
                                    <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div class="gk">Check your query</div>
                                </div>
                                <button class="bd ke ml-3 if" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="ue on db">
                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>';
                    }
              
                }
        }
     }
     
    }
   
 }

function delete()
{

    require 'dbh.php';

    if (isset($_GET['del'])) {
        
          $id=$_GET['del'];
          $sql="DELETE FROM `add_product` WHERE id='$id'";
          $result= mysqli_query($mar, $sql);
          if ($result) {
            echo'<div x-show="open" x-data="{ open: true }">
            <div class="inline-flex u_ vd vg rounded-sm text-sm hk yo">
                <div class="flex oq fg fd">
                    <div class="flex">
                        <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                        </svg>
                        <div class="gk">Deleted Successfully No.'.$id.'</div>
                    </div>
                    <button class="bd ke ml-3 if" @click="open = false">
                        <div class="tc">Close</div>
                        <svg class="ue on db">
                            <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>';
            
       
            }else {
                echo 'check your querry';
            }
    }
}

function pro_view()
{
    require 'dbh.php';
    
    $sq="SELECT * FROM `add_product`";
    $query=mysqli_query($mar, $sq);

if (mysqli_num_rows($query)>0) {
    while ($row = mysqli_fetch_assoc($query)) {
       
        $pro_i=json_decode($row['Product_image']);
        $pro_p=number_format($row['Product_price']);
        $pro_n=$row['Product_name'];        
        $pro_b= $row['Product_brand']; 
        $pro_p= $row['Product_price'];               
        $pro_y= $row['Product_year'];               
        $pro_M= $row['Product_Mileage'];                             
        echo ' <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
        <div class="ltn__product-item ltn__product-item-3 text-center">
            <div class="product-img">
                <a href="product_details?pro_id='.$row['id'].'"><img src="../auto_admin/images/'.$pro_i[0].'" alt="#"></a>
                <div class="product-hover-action">
                    <ul>
                        <li>
                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                <i class="far fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                <i class="far fa-heart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-info">
                <h2 class="product-title"><a href="product_details?pro_id='.$row['id'].'">'.$pro_n.'</a></h2>
                <div class="product-price">
                    <span>NGN'.number_format($pro_p).'</span>
                    <del>$62,000</del>
                </div>
                <div class="product-info-brief">
                    <ul>
                        <li>
                            <i class="fas fa-car"></i>'.$pro_y.'
                        </li>
                        <li>
                            <i class="fas fa-cog"></i>'.$pro_M.'
                        </li>
                        <li>
                            <i class="fas fa-road"></i>95kph
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>';
    
    }  
}
}


function signup()
{
    if (isset($_POST['signup'])) {
      
    require 'dbh.php';    
    extract($_POST);
    if (empty($email) || empty($name) || empty($password) || empty($cpassword)) {
        header('Location:signup?error=all fields are required');
    //     echo '<div x-show="open" x-data="{ open: true }">
    //     <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
    //         <div class="flex oq fg fd">
    //             <div class="flex">
    //                 <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
    //                     <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
    //                 </svg>
    //                 <div class="gk">All fields are required</div>
    //             </div>
    //             <button class="bd ke ml-3 if" @click="open = false">
    //                 <div class="tc">Close</div>
    //                 <svg class="ue on db">
    //                     <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
    //                 </svg>
    //             </button>
    //         </div>
    //     </div>
    // </div>';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location:signup?error=invalid Email');
    //     echo '<div x-show="open" x-data="{ open: true }">
    //     <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
    //         <div class="flex oq fg fd">
    //             <div class="flex">
    //                 <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
    //                     <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
    //                 </svg>
    //                 <div class="gk">Invalid email</div>
    //             </div>
    //             <button class="bd ke ml-3 if" @click="open = false">
    //                 <div class="tc">Close</div>
    //                 <svg class="ue on db">
    //                     <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
    //                 </svg>
    //             </button>
    //         </div>
    //     </div>
    // </div>';
    }elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        header('Location:signup?error=only characters are allowed');
    //     echo '<div x-show="open" x-data="{ open: true }">
    //     <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
    //         <div class="flex oq fg fd">
    //             <div class="flex">
    //                 <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
    //                     <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
    //                 </svg>
    //                 <div class="gk">Only characters are allowed</div>
    //             </div>
    //             <button class="bd ke ml-3 if" @click="open = false">
    //                 <div class="tc">Close</div>
    //                 <svg class="ue on db">
    //                     <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
    //                 </svg>
    //             </button>
    //         </div>
    //     </div>
    // </div>';
    
    }elseif ($password !==$cpassword) {
        header('Location:signup?error=password mixmatched');
    //     echo '<div x-show="open" x-data="{ open: true }">
    //     <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
    //         <div class="flex oq fg fd">
    //             <div class="flex">
    //                 <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
    //                     <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
    //                 </svg>
    //                 <div class="gk">Password mixmatched</div>
    //             </div>
    //             <button class="bd ke ml-3 if" @click="open = false">
    //                 <div class="tc">Close</div>
    //                 <svg class="ue on db">
    //                     <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
    //                 </svg>
    //             </button>
    //         </div>
    //     </div>
    // </div>';
    }else {
        $sq="SELECT * FROM `auto_info` WHERE email =? ";
        $qu=mysqli_stmt_init($mar);
        if (!mysqli_stmt_prepare($qu, $sq)) {
            header('Location:signup?error=sql error');
        //     echo '<div x-show="open" x-data="{ open: true }">
        //     <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
        //         <div class="flex oq fg fd">
        //             <div class="flex">
        //                 <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
        //                     <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
        //                 </svg>
        //                 <div class="gk">sql error</div>
        //             </div>
        //             <button class="bd ke ml-3 if" @click="open = false">
        //                 <div class="tc">Close</div>
        //                 <svg class="ue on db">
        //                     <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
        //                 </svg>
        //             </button>
        //         </div>
        //     </div>
        // </div>';
        }else {
            mysqli_stmt_bind_param($qu, 's', $email);
            mysqli_stmt_execute($qu);
            mysqli_stmt_store_result($qu);
            $result=mysqli_stmt_num_rows($qu);
                if ($result > 0) {
                    header('Location:signup?error=Email already exist');
                //     echo '<div x-show="open" x-data="{ open: true }">
                //     <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                //         <div class="flex oq fg fd">
                //             <div class="flex">
                //                 <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                //                     <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                //                 </svg>
                //                 <div class="gk">Email already exist/div>
                //             </div>
                //             <button class="bd ke ml-3 if" @click="open = false">
                //                 <div class="tc">Close</div>
                //                 <svg class="ue on db">
                //                     <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                //                 </svg>
                //             </button>
                //         </div>
                //     </div>
                // </div>';
                }else {
                    $u='customer';                                            
                    // $sq = "INSERT INTO `auto_info`(`Fullname`, `email`, `User_type`, `password`, `Business name`, `House Address`, `State`, `Phone number`, `Country`, `Company Adress`) VALUES (?,?,?,?,?,?,?,?,?,?)";
                    $sq="INSERT INTO `auto_info`(`Fullname`,  `email`, `User_type`, `password`) VALUES (?, ?, ?, ?)";
                    $qu=mysqli_stmt_init($mar);
                    if (!mysqli_stmt_prepare($qu, $sq)) {
                        header('Location:signup?error=Sql error');
                    //     echo '<div x-show="open" x-data="{ open: true }">
                    //     <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                    //         <div class="flex oq fg fd">
                    //             <div class="flex">
                    //                 <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                    //                     <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                    //                 </svg>
                    //                 <div class="gk">Sql error/div>
                    //             </div>
                    //             <button class="bd ke ml-3 if" @click="open = false">
                    //                 <div class="tc">Close</div>
                    //                 <svg class="ue on db">
                    //                     <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                    //                 </svg>
                    //             </button>
                    //         </div>
                    //     </div>
                    // </div>';
                    }else {
                    $u='customer';                        
                        $hswpwd=password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($qu, 'ssss', $name, $email, $u, $hswpwd);
                        mysqli_stmt_execute($qu);
                        if ($qu) {
                                header('Location:signin?success=Congratulations');
                        //     echo'<div x-show="open" x-data="{ open: true }">
                        //     <div class="inline-flex u_ vd vg rounded-sm text-sm hk yo">
                        //         <div class="flex oq fg fd">
                        //             <div class="flex">
                        //                 <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                        //                     <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                        //                 </svg>
                        //                 <div class="gk">Congratulations</div>
                        //             </div>
                        //             <button class="bd ke ml-3 if" @click="open = false">
                        //                 <div class="tc">Close</div>
                        //                 <svg class="ue on db">
                        //                     <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                        //                 </svg>
                        //             </button>
                        //         </div>
                        //     </div>
                        // </div>';
                        }else {
                            header('Location:signup?error= sqlerror');
                        //     echo '<div x-show="open" x-data="{ open: true }">
                        //     <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                        //         <div class="flex oq fg fd">
                        //             <div class="flex">
                        //                 <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                        //                     <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                        //                 </svg>
                        //                 <div class="gk">Sql error/div>
                        //             </div>
                        //             <button class="bd ke ml-3 if" @click="open = false">
                        //                 <div class="tc">Close</div>
                        //                 <svg class="ue on db">
                        //                     <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                        //                 </svg>
                        //             </button>
                        //         </div>
                        //     </div>
                        // </div>';
                        }
                    }
                }
        }
    }

}



}


function signout()
{
    if (isset($_POST['signout'])) {
   session_unset();
    session_destroy();
  "  window.location='../Auto_admin/signin'";
    // header('location:signin');
}
    
}



function add_cart()
 {
    if (isset($_POST['add_to_cart'])) {
                
      
      if (!isset($_SESSION['id'])) {
    
          echo "<script>alert('You are not logged in')
          window.location='../Auto_admin/signin'
          </script>";
    
            } else{  
                $id = @$_SESSION['id'];
    
                  if (isset($_GET['pro_id'])) {
    
                      $pro_id = $_GET['pro_id'];
    
    
                      require 'dbh.php';
    
                      extract($_POST);

                        if ($pro_quantity < 1 ) {

                            echo "<script>alert('Quantity less than 1')
      
                            </script>";

                        }else {
                            


                           
                            $sql = "SELECT * FROM `cart_product` where `Product_id` = '$pro_id' && `User_id`='$id'";
                       
                            $query = mysqli_query($mar, $sql);
      
                                    if (mysqli_num_rows($query) > 0 ) {
      
                                        echo "<script>alert('Already in Cart')
      
                                        </script>";
      
                                        
                                    }else {
      
                                    $sql = "INSERT INTO `cart_product`(`User_id`, `Product_quantity`, `Product_id`) VALUES ('$id', '$pro_quantity', '$pro_id')";
                                    
                                    $result = mysqli_query($mar, $sql); 
                                        
                                        if ($result) {
                                    
                                            echo'
                                                        <div class="gk">Added</div>
                                                    </div>';
                                               
                                        }else {
                                            
                                            echo '<div x-show="open" x-data="{ open: true }">
                                            <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                                                <div class="flex oq fg fd">
                                                    <div class="flex">
                                                        <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                                        </svg>
                                                        <div class="gk">Sql error/div>
                                                    </div>
                                                    <button class="bd ke ml-3 if" @click="open = false">
                                                        <div class="tc">Close</div>
                                                        <svg class="ue on db">
                                                            <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                    }
      
                                    

                        }
                                  
    
                              }  
    
                              }
                                  }
    
    }
    




function preview($data)
{
    require 'dbh.php';
    
   
   if (isset($_GET['pro_id'])) {
       $pro_id =$_GET['pro_id'];
       $sql="SELECT * FROM add_product WHERE id ='$pro_id'";
       $query=mysqli_query($mar, $sql);

    //    $pro_i=json_decode($row['Product_image']);
       
          $row=mysqli_fetch_assoc($query);
          return $row[$data];  

          echo $row[$data];
     
   }

    
}


function relatedcars()
{

    require 'dbh.php';

   $Pro_id = $_GET['pro_id'];
    $qu = mysqli_query($mar, "SELECT * FROM `add_product` WHERE id = $Pro_id ");
    $result = mysqli_fetch_assoc($qu);
    $brand = $result['Product_brand'];
    $sq="SELECT * FROM `add_product` where Product_brand = '$brand' && id!='$Pro_id'";

    $query=mysqli_query($mar, $sq);

    if (mysqli_num_rows($query)>0) {

        while ($row = mysqli_fetch_assoc($query)) {

        $pro_i=json_decode($row['Product_image']);
        $pro_n  = $row['Product_name'];
        $pro_b  = $row['Product_brand'];
        $pro_p  = $row['Product_price'];

        if ($pro_b === $row['Product_brand']) {

         echo '<div class="col-lg-12 slick-slide slick-current slick-active" style="width: 173px;" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide20">
         <div class="ltn__product-item ltn__product-item-3 text-center">
             <div class="product-img">
                 <a href="product_details?pro_id='.$row['id'].'" tabindex="0"><img src="../auto_admin/images/'.$pro_i[0].'" alt="#"></a>
                 <div class="product-badge">
                     <ul>
                         <li class="sale-badge">New</li>
                     </ul>
                 </div>
                 <div class="product-hover-action">
 
                 </div>
             </div>
             <div class="product-info">
                 <div class="product-ratting">
                     <ul>
                         <li><a href="#" tabindex="0"><i class="fas fa-star"></i></a></li>
                         <li><a href="#" tabindex="0"><i class="fas fa-star"></i></a></li>
                         <li><a href="#" tabindex="0"><i class="fas fa-star"></i></a></li>
                         <li><a href="#" tabindex="0"><i class="fas fa-star-half-alt"></i></a></li>
                         <li><a href="#" tabindex="0"><i class="far fa-star"></i></a></li>
                     </ul>
                 </div>
                 <h2 class="product-title"><a href="product_details?pro_id='.$row['id'].'" tabindex="0">'.$pro_b.'</a></h2>
                 <div class="product-price">
                     <span>NGN'.number_format($pro_p).'</span>
                     <del>$162.00</del>
                 </div>
             </div>
         </div>
     </div>';
        }
    }


}
}


// function wishlist($views)
// {
//     require 'dbh.php';
    
   
//    if (isset($_GET['pro_id'])) {
//        $pro_id =$_GET['pro_id'];
//        $sql="SELECT * FROM add_product WHERE id ='$pro_id'";
//        $query=mysqli_query($mar, $sql);

       
        //   $row=mysqli_fetch_assoc($query);
          
        //   return $row[$views];  

        //   echo $row[$views];
     
//    }

    
// }
function wishlist()
{
    if (isset($_POST['add_wishlist'])) {

        require 'dbh.php';

    if (!isset($_SESSION['id'])) {

        echo "<script>alert('You are not logged in')
        window.location='../Auto_admin/signin'
        </script>";
    }else {
    $id = $_SESSION['id'];

        if (isset($_GET['pro_id'])) {

           $pro_id = $_GET['pro_id'];


           $sql = "SELECT * FROM `wish_list` where `Product_id` = '$pro_id' && `User_id`='$id'";           
            $query = mysqli_query($mar, $sql);
            
            if (mysqli_num_rows($query) > 0) {
                
                echo "<script>alert('Already added to wishlist')
      
                </script>";

            }else {
                
                $sql = "INSERT INTO `wish_list`(`User_id`, `Product_id`) VALUES ('$id', '$pro_id')";
                $query = mysqli_query($mar, $sql);
                if ($query) {

                   echo " alert('Added to wishlist ')";

                } else {
                    echo 'db error';
                }
                
            }

        } 
        
   
    }

    }
}



// function quickview()
// {
//     require 'dbh.php';

    
   
// }





function cart()
{
    // Ordered_pro();

    require 'dbh.php';
    
if (isset($_SESSION['id'])) {
    # code...
    $id = $_SESSION['id'];

    $sql = "SELECT * FROM `cart_product` WHERE User_id = '$id'";

    $query = mysqli_query($mar, $sql);
    
    echo mysqli_num_rows($query);
}


}



function cart_pic()
{
    if (isset ($_SESSION['id'])) {
        require 'dbh.php';
        // Ordered_pro();
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM `cart_product` WHERE User_id ='$id'";
         $query = mysqli_query($mar, $sql);
        if (mysqli_num_rows($query)>0) {
         while ($pro_cat = mysqli_fetch_assoc($query)) {
             $pro_id = $pro_cat['Product_id'];
             $idProduct = $pro_cat['id'];

            $main = mysqli_query($mar, "SELECT * FROM `add_product` WHERE id='$pro_id'");
            while ($row = mysqli_fetch_assoc($main)) {
                    $img = json_decode($row['Product_image']);

                    $pro_p = $row['Product_price'];
                    //   $price_plus = array_sum($pro_p);
                echo '<div class="mini-cart-product-area ltn__scrollbar">
                       <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="../auto_admin/images/'.$img[0].'"></a>
                        <span class="mini-cart-item-delete"><a href="?del='.$idProduct.'"><i class="">X</i></span></a>
                    </div>
                    <div class="mini-cart-info">
    
                        <h6><a href="#"</a>'.$row['Product_name'].'</h6>
                        <span class="mini-cart-quantity"><del>N</del>'.number_format($pro_p).'</span>
                    </div>
                </div>
            </div>';
            

            }

            }
            echo ' <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span><del>N</del>'.number_format($pro_p).'</span></h5>
            </div>';


        }
    }
           
            
}

function cart_page()
{
    if (isset ($_SESSION['id'])) {
        require 'dbh.php';

        $arrayCart=[];
        // Ordered_pro();
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM `cart_product` WHERE User_id ='$id'";
         $query = mysqli_query($mar, $sql);
         $main_sub=0;
        if (mysqli_num_rows($query)>0) {
         while ($pro_cat = mysqli_fetch_assoc($query)) {
             $product_id = $pro_cat['Product_id'];
             $pro_id = $pro_cat['id'];
             $pro_user = $pro_cat['User_id'];
             
             $pro_qty = $pro_cat['Product_quantity'];

             $arr=array_push($arrayCart, $product_id);


            $main = mysqli_query($mar, "SELECT * FROM `add_product` WHERE id='$product_id'");
            while ($row = mysqli_fetch_assoc($main)) {
        $pro_i=json_decode($row['Product_image']);                
        $subTotal = $pro_qty * $row['Product_price'];
        $main_sub += $pro_qty * $row['Product_price'];
        $pro_n = $row['Product_name'];

        
       
               
            echo '
                <tbody>
                    <tr>
                        <td class="cart-product-remove"><a href="?del='.$pro_id.'">x</a></td>
                           <td class="cart-product-image">
                               <a href="product_details"><img src="../auto_admin/images/'.$pro_i[0].'" alt="#"></a>
                           </td>
                           <td class="cart-product-info">
                               <h4><a href="product_details">'. $pro_n.'</a></h4>
                           </td>
                           <td class="cart-product-price">'.number_format ($row['Product_price']).'</td>
                           <td class="cart-product-quantity">
                               <div class="">
                                   <input type="text" value="'.$pro_qty.'" name="qtybutton" class="cart-plus-minus-box">
                               </div>
                           </td>
                           <td class="cart-product-subtotal">NGN'.number_format($subTotal).'</td>
                       </tr>
                ';
            }
         }

           }
echo ' <tr class="cart-coupon-row">
<td colspan="6">
    <div class="cart-coupon">
        <input type="text" name="cart-coupon" placeholder="Coupon code">
        <button type="submit" class="btn theme-btn-2 btn-effect-2">Apply Coupon</button>
    </div>
</td>
<td>
    <button type="submit" class="btn theme-btn-2 btn-effect-2-- disabled">Update Cart</button>
</td>
</tr>
</tbody>
</table>
</div>
                 
<div class="shoping-cart-total mt-50">
 <h4>Cart Totals</h4>
 <table class="table">
     <tbody>
         <tr>
             <td>Cart Subtotal</td>
             <td>NGN'.number_format($main_sub).'</td>
         </tr>
         <tr>
             <td>Shipping and Handing</td>
             <td>NGN 0</td>
         </tr>
         <tr>
             <td>Vat</td>
             <td>NGN 0</td>
         </tr>
         <tr>
             <td><strong>Order Total</strong></td>
             <td><strong>NGN'.number_format($main_sub).'</strong></td>
         </tr>
     </tbody>
 </table>
 <div class="btn-wrapper text-right">
     <a href="checkout?user='.$id.'&products='.@$arr.'" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
 </div>
</div>
</div>';
        
    }else {
        echo "<script>alert('You are not logged in')
        window.location='../Auto_admin/signin'
        </script>";
  
    }
}

function cart_del()
{

    if (isset($_GET['del'])) {
       
        require 'dbh.php';
        
        $id=$_GET['del'];
        $sql="DELETE FROM `cart_product` WHERE id='$id'";

        $result= mysqli_query($mar, $sql);

        if ($result) {
          echo'<div x-show="open" x-data="{ open: true }">
          <div class="inline-flex u_ vd vg rounded-sm text-sm hk yo">
              <div class="flex oq fg fd">
                  <div class="flex">
                      
                      <div class="gk">Deleted from your cart Successfully</div>
                  </div>
                  
              </div>
          </div>';
      
          
     
          }else {
              echo 'check your querry';
          }
  }
   
}


function wish_page()
{
    if (isset($_SESSION['id'])) {

       require 'dbh.php';

       $id = $_SESSION['id'];
    //    print_r($id);

       $sql = "SELECT * FROM `wish_list` WHERE User_id = $id";

       $query = mysqli_query($mar, $sql);

        if (mysqli_num_rows($query) > 0) {

            while ($wish = mysqli_fetch_assoc($query)) {

                $wishProduct_id = $wish['Product_id'];
                $wish_id = $wish['id'];
                // $proid = $wish['id'];

                $dmain_tin = mysqli_query($mar, "SELECT * FROM `add_product` WHERE id = $wishProduct_id");

                    while ($row_wish = mysqli_fetch_assoc($dmain_tin)) {

                              $wish_qty = $wish['Product_quantity'];
                            
                        $wish_pro_name = $row_wish['Product_name'];

                        $wish_pro_img = json_decode($row_wish['Product_image']);

                        $wish_pro_price = $row_wish['Product_price'];

                        echo '<div class="liton__wishlist-area mb-105">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="shoping-cart-inner">
                                        <div class="shoping-cart-table table-responsive">
                                            <table class="table">
                                           
                                                <tbody>
                                                    <tr>
                                                        <td class="cart-product-remove"><a href="?del='.$wish_id.'">x</a></td>
                                                        <td class="cart-product-image">
                                                            <a href="product_details"><img src=".   ./auto_admin/images/'.$wish_pro_img[0].'alt="#"></a>
                                                        </td>
                                                        <td class="cart-product-info">
                                                            <h4><a href="product_details">'.$wish_pro_name.'</a></h4>
                                                        </td>
                                                        <td class="cart-product-price">'.number_format($wish_pro_price).'</td>
                                                        <td class="cart-product-stock">'.$wish_qty.'</td>
                                                        <td class="cart-product-add-cart">
                                                        <form action="" method="post">
                                                                <a class="submit-button-1" href=product_details?pro_id='.$wishProduct_id.'>Add to Cart</a>  
                                                           </form>
                                                                
                                                        </td>
                                                    </tr>
                                               
                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';

                    }
            }

            
            
        }





    }else {
        
        echo "<script>alert('You are not logged in')
        window.location='../Auto_admin/signin'
        </script>";
  
    }
}



function del_wish()
{
    if (isset($_GET['del'])){

        require 'dbh.php';

        $wish_id = $_GET['del'];
        
        $sql = "DELETE FROM `wish_list` WHERE id = $wish_id";

        $query = mysqli_query($mar, $sql);

        if ($query) {

            echo'<div x-show="open" x-data="{ open: true }">
            <div class="inline-flex u_ vd vg rounded-sm text-sm hk yo">
                <div class="flex oq fg fd">
                    <div class="flex">
                        
                        <div class="gk">Deleted from your WishList Successfully</div>
                    </div>
                    
                </div>
            </div>';
        

        } else {
            echo 'Check your Query';
        }
    }
        
    }


function ordered_products()
{

  if (isset($_GET['user'])) {

     $user_id  = $_GET['user'];

     require 'dbh.php';
     $main_sub = 0;
     $query = mysqli_query($mar, "SELECT * FROM `cart_product` WHERE User_id = $user_id");

     if (mysqli_num_rows($query) > 0) {

         while ($result = mysqli_fetch_assoc($query)) {

            $crt_id = $result['Product_id'];
            $crt_qty = $result['Product_quantity'];

            $addPro = mysqli_query($mar, "SELECT * FROM `add_product` WHERE id=$crt_id");

            while ($row = mysqli_fetch_assoc($addPro)) {

               $pro_b = $row['Product_brand'];
               $pro_p = $row['Product_price'];

             $ttp = $pro_p * $crt_qty;
        $main_sub += $crt_qty * $pro_p;
             
                        echo ' <table class="table">
                        <tbody>
                            <tr>
                                <td>'.$pro_b.'<strong>×'.$crt_qty.'</strong></td>
                                <td>NGN'.number_format($ttp).'</td>
                            </tr>
                       
                        </tbody>';
                    }
                }
                echo'<td><strong>Total Products</strong></td>
                <td><strong>NGN'.number_format($main_sub).'</strong></td>';

               
  }
}
}


function orderProductsMainPage()
{
    if (isset($_SESSION['id'])) {

        require 'dbh.php';
        
        $user = $_SESSION['id'];

        $ttP = 0;
        $sql = mysqli_query($mar, "SELECT * FROM `ordered_product` WHERE User_id=$user");

        while ($row = mysqli_fetch_assoc($sql)) {

            $row_id = $row['Product_id'];
            $row_date = $row['Date'];
            $row_status = $row['Status'];
            $row_qty = $row['Quantity'];

            $addPro = mysqli_query($mar, "SELECT * FROM `add_product` WHERE id =$row_id");

            while ($result = mysqli_fetch_assoc($addPro)) {

               $result_price = $result['Product_price'];
           $mainPrice= $row_qty * $result_price;
        }

             $ttP+=$mainPrice;

            echo '
            <ol><div class="tab-pane fade" id="liton_tab_1_2">
              <div class="ltn__myaccount-tab-content-inner">
             <div class="table-responsive">
             <table class="table">
             <thead>
             <td>1</td>
            <td>'.$row_date.'</td>
            <td>'.$row_status.'</td>
            <td>'.number_format($ttP).'</td></ol>';

}

        
    } else {
        echo "<script>alert('You are not logged in')
        window.location='../Auto_admin/signin'
        </script>";
  
    }
    
}


// function ordered_cart()
// {
//     if (isset($_SESSION['id'])) {

//         $user = $_SESSION['id'];

//         if (isset($_GET['pro'])) {

//             $main_sub = 0;

//             require 'dbh.php';

//             $pro = $_GET['pro'];

//             $sql = mysqli_query($mar, "SELECT * FROM `ordered_product` WHERE User_id=$user");
//             while ($row = mysqli_fetch_assoc($sql)) {

//                 $row_id = $row['Product_id'];
//                 $row_qty = $row['Quantity'];

//                 $addPro = mysqli_query($mar, "SELECT * FROM `add_product` WHERE id = $pro");

//                 while ($result = mysqli_fetch_assoc($addPro)) {

//                     $result_name = $result['Product_name'];
//                     $result_brand = $result['Product_brand'];
//                     $result_img =json_decode ($result['Product_image']);
//                     // $result_qty =json_decode ($result['Product_quantity']);

//                     $subTotal = $row_qty * $result['Product_price'];
//         $main_sub += $row_qty * $result['Product_price'];
//         // $pro_n = $row['Product_name'];


//                     echo '
//                 <tbody>
//                     <tr>
//                         <td class="cart-product-remove"><a href="?del='.$pro.'">x</a></td>
//                            <td class="cart-product-image">
//                                <a href="product_details"><img src="../auto_admin/images/'.$result_img[0].'" alt="#"></a>
//                            </td>
//                            <td class="cart-product-info">
//                                <h4><a href="product_details">'. $result_name.'</a></h4>
//                            </td>
//                            <td class="cart-product-price">'.number_format ($result['Product_price']).'</td>
//                            <td class="cart-product-quantity">
//                                <div class="">
//                                    <input type="text" value="'.$row_qty.'" name="qtybutton" class="cart-plus-minus-box">
//                                </div>
//                            </td>
//                            <td class="cart-product-subtotal">NGN'.number_format($subTotal).'</td>
//                        </tr>
//                 ';
//                 }
//             }




//         }
//     }else {
//         echo "<script>alert('You are not logged in')
//         window.location='../Auto_admin/signin'
//         </script>";
  
//     }
// }


// if (isset($_GET['user'])) {

//     $user = $_GET['user'];

//     require 'dbh.php';

//     $sql = mysqli_query($mar, "SELECT * FROM `cart_product` WHERE User_id = $user");

//     while ($row = mysqli_fetch_assoc($sql)) {

//         $row_id = $row['Product_id'];

//         $row_qty = $row['qty'];

//         $add = mysqli_query($mar, "SELECT * FROM `add_product` WHERE id=$user_id")
//     }
// }



    function Address()
    {
        if (isset($_POST['save'])) {

            if (isset($_SESSION['id'])) {

                $id = $_SESSION['id'];

             $user =   $_SESSION['admin_name'];
                
            require 'dbh.php';

        //     $sq= mysqli_query($mar, "SELECT * FROM `auto_info`" );

        //    if ($use = mysqli_fetch_assoc($sq)){;

        //     $customer = $use['User_type'];

            extract($_POST);

            if (empty($bussnme) || empty($house) ||empty($state) || empty($fone) || empty($email) ||  empty($city) || empty($country)) {

                if ($user == 'customer') {
                header('Location:user_settings?error=allfieldsarerequired');
                    
                }else {
                // header('Location:settings?error=allfieldsarerequired');
                 "window.location='setting?error=sallfieldsarerequired'</script>";

                
                }

                
            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                if ($user  == 'customer') {
                header('Location:User_settings?error=invalidemail');
                   
                }else {
                header('Location:settings?error=invalidemail');
                    
                }
                // header('Location:settings?error=invalidemail');
            

            }elseif (!preg_match("/^[0-9 ]*$/",$fone)) {
               
                if ($user  == 'customer') {
                    
                    header('Location:user_settings?error=onlynumbersareallowed');

                }else {
                    header('Location:settings?error=onlynumbersareallowed');
                  
                }
                 

            } else {
                $sq = mysqli_query($mar, "SELECT * from `auto_info` WHERE id = $id");
                while ($row = mysqli_fetch_assoc($sq)) {

                    $NewPwd = $row['password'];
                    $fullname = $row['Fullname'];
                    $usertype = $row['User_type'];
                }
                $sql = mysqli_query($mar, "UPDATE `auto_info` SET `id`='$id',`Fullname`='$fullname',`email`='$email',`User_type`='$usertype',`password`='$NewPwd',`Business name`='$bussnme',`House Address`='$house',`State`='$state',`Phone number`='$fone',`Country`='$country',`Company Adress`='$cmpnme',`City`='$city' WHERE id=$id");

                if ($sql) {

                    if ($user  == 'customer') {
                        
                        echo "<script>alert('Saved')
                    window.location='user_settings'</script>";
                        // header('Location:user_settings?success=saved');
                        // window.location='../Auto_admin/user_settings'</script>";

                    }else {
                        // header('Location:settings?success=saved');
                        echo "<script>alert('Saved')
                        window.location='settings'</script>";
                       
                    }
                
              
                }else {
                    if ($user  == 'customer') {
                // header('Location:user_settings?error=sqlerror');
                echo "<script>alert('sql error')
                window.location='user_settings'</script>";
                        
                    } else {
                // header('Location:settings?error=sqlerror');
                echo "<script>alert('sql error')
                window.location='settings'</script>";
                        
                    }
                    
                    
                // }
            }      
                
            }
            
        }
            
        } 
        
    }

    function sec_Address()
    {

        if (isset($_POST['save'])) {

            // print_r($_POST);
            
            if ($_SESSION['id']) {
                
                $user = $_SESSION['id'];

                // print_r($user);
            require 'dbh.php';

            extract($_POST);


            if (empty($bussnme) || empty($house)  || empty($state) || empty($fone) || empty($Email) || !isset($country) || empty($cmpnme)) {
                
                // header('Location:settings?error=allfieldsarerequired');
                "window.location='settings?error=allfieldsarerequired'</script>";
                

            }elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {

                // header('Location:settings?error=invalidemail');
                "window.location='setting?error=invalidemail'</script>";
                
               
            }elseif (!preg_match("/^[0-9+ ]*$/",$fone)) {

                // header('Location:settings?error=onlynumbersareallowed');
                "window.location='setting?error=invalidphonenumber'</script>";
                
       
            }else {
                $sq = mysqli_query($mar, "SELECT * FROM `auto_info` WHERE id =$user ");

                if ($sq) {

                // header('Location:settings?success=saved');
                "window.location='setting?success=saved'</script>";
                
                    
                    
                } else {
                // header('Location:settings?error=sqlerror');
                "window.location='setting?error=sqlerror'</script>";
                
                  
                }
                
            }
            
        }
    }
        
    }




    function countries()
    {
        $countries = Array(
            'Afghanistan',
            'Albania',
            'Algeria',
             'American Samoa',
             'Andorra',
             'Angola',
             'Anguilla',
             'Antigua And Barbuda',
             'Argentina',
             'Armenia',
             'Aruba',
             'Australia',
             'Austria',
             'Azerbaijan',
             'Bahamas',
             'Bahrain',
             'Bangladesh',
             'Barbados',
             'Belarus',
             'Belgium',
             'Belize',
             'Benin',
            'Bermuda',
            'Bhutan',
            'Bolivia',
            'Bosnia And Herzegovina',
            'Botswana',
            'Brazil',
            'British Indian Ocean Territory',
            'Brunei',
            'Bulgaria',
            'Burkina Faso',
            'Burundi',
            'Cambodia',
            'Cameroon',
            'Canada',
            'Cape Verde',
            'Cayman Islands',
            'Central African Republic',
            'Chad',
            'Chile',
            'China',
            'Colombia',
            'Congo',
            'Cook Islands',
            'Costa Rica',
            'Cote D\'ivoire',
            'Croatia',
            'Cuba',
            'Cyprus',
            'Czech Republic',
            'Democratic Republic of the Congo',
            'Denmark',
            'Djibouti',
            'Dominica',
            'Dominican Republic',
            'Ecuador',
            'Egypt',
            'El Salvador',
            'Equatorial Guinea',
            'Eritrea',
            'Estonia',
            'Ethiopia',
            'Faroe Islands',
            'Federated States Of Micronesia',
            'Fiji',
            'Finland',
            'France',
            'French Guiana',
            'French Polynesia',
            'Gabon',
            'Gambia',
            'Georgia',
            'Germany',
            'Ghana',
            'Gibraltar',
            'Greece',
            'Greenland',
            'Grenada',
            'Guadeloupe',
            'Guam',
            'Guatemala',
            'Guinea',
            'Guinea Bissau',
            'Guyana',
            'Haiti',
            'Honduras',
            'Hong Kong',
            'Hungary',
            'Iceland',
            'India',
            'Indonesia',
            'Iran',
            'Ireland',
            'Israel',
            'Italy',
            'Jamaica',
            'Japan',
            'Jordan',
            'Kazakhstan',
            'Kenya',
            'Kuwait',
            'Kyrgyzstan',
            'Laos',
            'Latvia',
            'Lebanon',
            'Lesotho',
            'Libyan Arab Jamahiriya',
            'Liechtenstein',
            'Lithuania',
            'Luxembourg',
            'Macedonia',
            'Madagascar',
            'Malawi',
            'Malaysia',
            'Maldives',
            'Mali',
            'Malta',
            'Martinique',
            'Mauritania',
            'Mauritius',
            'Mexico',
            'Monaco',
            'Mongolia',
            'Montenegro',
            'Morocco',
            'Mozambique',
            'Myanmar',
            'Namibia',
            'Nepal',
            'Netherlands',
            'Netherlands Antilles',
            'New Caledonia',
            'New Zealand',
            'Nicaragua',
            'Niger',
            'Nigeria',
            'Norfolk Island',
            'Northern Mariana Islands',
            'Norway',
            'Oman',
            'Pakistan',
            'Palau',
            'Panama',
            'Papua New Guinea',
            'Paraguay',
            'Peru',
            'Philippines',
            'Poland',
            'Portugal',
            'Puerto Rico',
            'Qatar',
            'Republic Of Moldova',
            'Reunion',
            'Romania',
            'Russia',
            'Rwanda',
            'Saint Kitts And Nevis',
            'Saint Lucia',
            'Saint Vincent And The Grenadines',
            'Samoa',
            'San Marino',
            'Sao Tome And Principe',
            'Saudi Arabia',
            'Senegal',
            'Serbia',
            'Seychelles',
            'Singapore',
            'Slovakia',
            'Slovenia',
            'Solomon Islands',
            'South Africa',
            'South Korea',
            'Spain',
            'Sri Lanka',
            'Sudan',
            'Suriname',
            'Swaziland',
            'Sweden',
            'Switzerland',
            'Syrian Arab Republic',
            'Taiwan',
            'Tajikistan',
            'Tanzania',
            'Thailand',
            'Togo',
            'Tonga',
            'Trinidad And Tobago',
            'Tunisia',
            'Turkey',
            'Turkmenistan',
            'Uganda',
            'Ukraine',
            'United Arab Emirates',
            'United Kingdom',
            'United States',
            'Uruguay',
            'Uzbekistan',
            'Vanuatu',
            'Venezuela',
            'Vietnam',
            'Virgin Islands British',
            'Virgin Islands U.S.',
            'Yemen',
            'Zambia',
            'Zimbabwe'
        );
        for ($i=0; $i <count($countries) ; $i++) { 
            echo "<option value='$countries[$i]'> $countries[$i]</option>";
        }
    }  


    function Order_table()
    {
        if (isset($_SESSION['id'])) {

            require 'dbh.php';
            $id = $_SESSION['id'];

            $sql = "SELECT * FROM `ordered_product` WHERE User_id=$id";

            $query = mysqli_query($mar, $sql);

            // if (mysqli_num_rows($query)) {

                $orderTotal = 0;

                $ttQty = 0;


                while ($row = mysqli_fetch_assoc($query)) {

                    $row_proid = $row['Product_id'];

                    $row_st = $row['Status'];
                    $row_time = $row['Time'];
                    $row_date = $row['Date'];
                    $row_qty = $row['Quantity'];

                    // $cart = mysqli_query($mar, "SELECT * FROM `cart_product` WHERE User_id=$id");

                    // while ($result = mysqli_fetch_assoc($cart)) {

                    //     $crt_id = $result['Product_id'];
                    //     $crt_qty = $result['Product_quantity'];

                        $add = mysqli_query($mar, "SELECT * FROM `add_product` WHERE id=$row_proid");

                        while ($res = mysqli_fetch_assoc($add)) {

                            $add_nm = $res['Product_name'];
                            $add_brnd  = $res['Product_brand'];
                            $add_p  = $res['Product_price'];
                            $add_img  = json_decode( $res['Product_image']);

                            $totalPqty = $add_p * $row_qty;

                            $orderTotal+=$totalPqty;

                            $ttQty+=$row_qty;

                            $orderTotalNumFormat = number_format($orderTotal);

                            echo ' <tbody class="text-sm" x-data="{ open: false }">
                            <tr>
                                <td class="v_ wk xe vm co ut">
                                    <div class="flex items-center">
                                        <label class="inline-flex">
                                            <span class="tc">Select</span>
                                            <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                    </div>
                                </td>

                                <td  class="v_ wk xe vm co">
                                <div class="flex items-center">
                                <div class="uo oa ap mr-2 _f">
                                
                                    <img class="uo oa rounded-full" src="../auto_admin/images/'.@$add_img[0].'" width="36"
                                        height="36" alt="Transaction 03"> </div>
                                    </td>
                            </div>
                                <td class="v_ wk xe vm co">
                                   
                                        <div class="gk yj">'.$add_brnd.'</div>
                                    </div>
                                </td>
                                <td class="v_ wk xe vm co">
                                   
                                <div class="gk yj">'.$row_qty.'</div>
                            </div>
                        </td>
                                <td class="v_ wk xe vm co">
                                    <div>'.$add_nm.'</div>
                                </td>
                                <td class="v_ wk xe vm co">
                                    <div class="gh gk yg"z">'.$row_st.'</div>
                                </td>
                                <td class="v_ wk xe vm co">
                                    <div class="gh gk yg"z">'.number_format($add_p).'</div>
                                </td>
                                <td class="v_ wk xe vm co">
                                    <div class="gk text-slate-800">NGN'.number_format($totalPqty).'</div>
                                </td>
                                <td class="v_ wk xe vm co">
                                    <div class="inline-flex gk pe yh rounded-full gp vk vy">'.$row_time.'</div>
                                </td><td class="v_ wk xe vm co">
                                <div class="inline-flex gk pe yh rounded-full gp vk vy">'.$row_date.'</div>
                            </td>
                            ';
                        }


                       
                    }
                }
            // }

            echo '
            <header class="mn mr">
                <h2 class="g_ text-slate-800">Ordered Products
                    <span class="yu gk">'.$ttQty.'</span>
                </h2>
            </header>';
            
            echo '<p style=color:green;><b>Total Price of Products = NGN'. @$orderTotalNumFormat.'</b></p>';
            
        
    }


    function place_order()

    {
        if (isset($_SESSION['id'])) {

            $user_id = $_SESSION['id'];
        
        if (isset($_GET['user'])) {

            if (isset($_GET['products'])) {
               
                // $user =   $_SESSION['admin_name'];

           require 'dbh.php';

           $newProducts = $_GET['products'];
           $id = $_GET['user'];

           $trck_id = 'Theo'. bin2hex(random_bytes('5'));

           $status = "Pending";
        //    $status = $retVal = (condition) ? a : b ;
           

           $time = date("h:i:sa");

           $date = date('y:m:d');

           if (isset($_POST['order'])) {

            // print_r($_POST);

            extract($_POST);

            if (empty($fone)) {

                if ($user_id == 'customer') {

                    echo "<script>alert('fill in your billing Details')
                    window.location='../Auto_admin/user_settings'</script>";

                }elseif ($user_id == 'admin') {

                    echo "<script>alert('fill in your billing Details')
                    window.location='../Auto_admin/settings'</script>";
                }

            }else {
                

               $sql = "SELECT * FROM `cart_product` WHERE User_id=$id";

               $query = mysqli_query($mar, $sql);

               if (mysqli_num_rows($query) > 0) {

                   while ($row = mysqli_fetch_assoc($query)) {

                       $row_id = $row['Product_id'];

                       $row_qty = $row['Product_quantity'];
                       $main = mysqli_query($mar, "SELECT * FROM `add_product` WHERE id=$row_id");
                       while ($result = mysqli_fetch_assoc($main)) {

                           $main_pro_b = $result['Product_brand'];
                           $main_pro_id = $result['id'];
                           $main_pro_pr = $result['Product_price'];
                           $main_pro_img =$result['Product_image'];
                           $main_pro_name = $result['Product_name'];
                       }
                           
                           $order = mysqli_query($mar, "SELECT * FROM `ordered_product` WHERE User_id=$user_id");
                        
                        
                               $sq = mysqli_query($mar, "INSERT INTO `ordered_product`(`Product_id`, `Product_brand`, `Product_name`, `Product_image`, `User_id`, `Quantity`, `Status`, `Time`, `Date`, `Tracking id`, `Price`) VALUES ('$row_id','$main_pro_b','$main_pro_name','$main_pro_img','$id','$row_qty','$status','$time','$date','$trck_id','$main_pro_pr')");
                   }
                               
                               if ($sq) {

                            $del = mysqli_query($mar, "DELETE FROM `cart_product` WHERE User_id = $user_id");

                            if ($del) {

                               echo "<script>alert('Your order has been placed')</script>";
                                
                            }else {
                                echo "<script>alert('query')</script>";
                               
                            }
                                   
                               }else {
                                   echo 'check your query';
                               }
            }
}
}
}

    }
      
}
  

        else {
            echo "<script>alert('You are not logged in')
            window.location='../Auto_admin/signin'
            </script>";
        }
    }


    function bill_address()
    {
        if (isset($_SESSION['id'])) {
require 'dbh.php';
            $user_id = $_SESSION['id'];

            $sql = mysqli_query($mar, "SELECT * FROM `auto_info` WHERE id=$user_id");

            while ($row = mysqli_fetch_assoc($sql)) {

                $result_nm = $row['Fullname'];
                $result_email = $row['email'];
                $result_email = $row['email'];
                $result_fone = $row['Phone number'];
                $result_busnme = $row['Business name'];
                $result_cmpnme= $row['Company Adress'];
                $result_house = $row['House Address'];
                $result_country = $row['Country'];
                $result_state = $row['State'];
                $result_city = $row['City'];
                
                echo '<div class="ltn__checkout-single-content-info">
                    <h6>Personal Information</h6>
                     
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-item input-item-name ltn__custom-icon">
                                <input type="text" name="ltn__name" placeholder="First name" value="'.$result_nm.'">
                            </div>
                        </div>
                      
                        <div class="col-md-6">
                            <div class="input-item input-item-email ltn__custom-icon">
                                <input type="email" name="ltn__email" value="'.$result_email.'">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-phone ltn__custom-icon">
                            <input type="text" name="fone" value="'.$result_fone.'">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-website ltn__custom-icon">
                                <input type="text" name="ltn__company" value="'.$result_busnme.'">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-item input-item-website ltn__custom-icon">
                                <input type="text" name="ltn__phone" placeholder="Company address (optional)" value="'.$result_cmpnme.'">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <h6>Country</h6>
                            <div class="input-item">
                                <select class="nice-select" style="display: none;">
                                    <option>'.$result_country.'</option>
                                    
                                </select><div class="nice-select" tabindex="0"><span class="current">'.$result_country.'</span></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <h6>Address</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item">
                                        <input type="text" placeholder="House number and street name" value="'.$result_house.'">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <h6>Town / City</h6>
                            <div class="input-item">
                                <input type="text" value="'.$result_city.'" placeholder="City">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <h6>State </h6>
                            <div class="input-item">
                                <input type="text" placeholder="State" value="'.$result_state.'">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <h6>Zip</h6>
                            <div class="input-item">
                                <input type="text" placeholder="Zip">
                            </div>
                        </div>
                    </div>
                    <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Create an account?</label></p>
                    <h6>Order Notes (optional)</h6>
                    <div class="input-item input-item-textarea ltn__custom-icon">
                        <textarea name="ltn__message" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                    </div> 

            </div>';
            }
        }
    }


    function settings($params)
    {
        if (isset($_SESSION['id'])) {

            require 'dbh.php';

            $user_id = $_SESSION['id'];

            $query = mysqli_query($mar, "SELECT * FROM `auto_info` WHERE id=$user_id");

            $result = mysqli_fetch_assoc($query);

                return $result[$params];

                
        }

        echo '

// <div class="flex fh vw vx ck border-slate-200">
// <div class="flex lk">
//     <button type="submit" name="cancel" class="btn border-slate-200 hover--border-slate-300 ys">Cancel</button>
//     <button type="submit" name="save" class="btn hb xs yo ml-3">Save Changes</button>
// </div>';
    }

    function setPwd()
    {
        if (isset($_SESSION['id'])) {

            require 'dbh.php';

            $id = $_SESSION['id'];

            if (isset($_POST['pwd'])) {

                extract($_POST);

                if (empty($new_pwd) || empty($recent_pwd) || empty($c_new_pwd)) {

                    echo '<div x-show="open" x-data="{ open: true }">
                    <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                        <div class="flex oq fg fd">
                            <div class="flex">
                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                </svg>
                                <div class="gk">Fill in the blanks</div>
                            </div>
                            <button class="bd ke ml-3 if" @click="open = false">
                                <div class="tc">Close</div>
                                <svg class="ue on db">
                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>';

                } else {

                    $query = mysqli_query($mar, "SELECT `password` FROM `auto_info` WHERE id=$id");

                    if ($row = mysqli_fetch_assoc($query)) {

                        $F_pwd = $row['password'];

                        // $hash_F = password_hash($F_pwd, PASSWORD_DEFAULT);

                        $verifyPwd = password_verify($recent_pwd, $F_pwd );
                    if ($verifyPwd == false) {

                        echo '<div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                            <div class="flex oq fg fd">
                                <div class="flex">
                                    <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div class="gk">Wrong Password</div>
                                </div>
                                <button class="bd ke ml-3 if" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="ue on db">
                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>';
                        
                    }elseif ($new_pwd !==$c_new_pwd) {

                        echo '<div x-show="open" x-data="{ open: true }">
                        <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                            <div class="flex oq fg fd">
                                <div class="flex">
                                    <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                        <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                    </svg>
                                    <div class="gk">Password Mixmatched</div>
                                </div>
                                <button class="bd ke ml-3 if" @click="open = false">
                                    <div class="tc">Close</div>
                                    <svg class="ue on db">
                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>';
                    }else {
                       
                    $hsw_newpwd = password_hash($new_pwd, PASSWORD_DEFAULT);

                   $sql = mysqli_query($mar, "UPDATE `auto_info` SET `id`='$id',`password`='$hsw_newpwd'WHERE id=$id");
                   if ($sql) {

                    echo'<div x-show="open" x-data="{ open: true }">
                    <div class="inline-flex u_ vd vg rounded-sm text-sm hk yo">
                        <div class="flex oq fg fd">
                            <div class="flex">
                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                </svg>
                                <div class="gk">Updated</div>
                            </div>
                            <button class="bd ke ml-3 if" @click="open = false">
                                <div class="tc">Close</div>
                                <svg class="ue on db">
                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                  </div>';

                   } else {
                    echo '<div x-show="open" x-data="{ open: true }">
                    <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                        <div class="flex oq fg fd">
                            <div class="flex">
                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                </svg>
                                <div class="gk">Sql error</div>
                            </div>
                            <button class="bd ke ml-3 if" @click="open = false">
                                <div class="tc">Close</div>
                                <svg class="ue on db">
                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>';
                       
                   }
                }
                   
            }
                   
                }
                
            }
        }
    }


    function order_admin()

    {

        require 'dbh.php';
        
        if (isset($_SESSION['id'])) {

           $id = $_SESSION['id'];

$ttQty=0;

$pro=[];
           $TotalSum = 0;
           $sql = mysqli_query($mar, "SELECT * FROM `ordered_product`");

           while ($row = mysqli_fetch_assoc($sql)) {

               $rowuser = $row['User_id'];
               $qty = $row['Quantity'];
               $status = $row['Status'];
               $time = $row['Time'];
               $date = $row['Date'];
               $trck = $row['Tracking id'];
               $image = json_decode($row['Product_image']);
               $brnd = $row['Product_brand'];
               $name = $row['Product_name'];
               $price = $row['Price'];
               $pro_id = $row['Product_id'];
               $proid = $row['id'];
               
            //    $realProduct = array_push($pro, $pro_id);
        //    } 
                //  $ttP = $qty * $price;
                $ttQty+=$qty;
                $ttP = $qty * $price;

                
                //    $TotalSum+=$price;
            
                   echo ' <tbody class="text-sm" x-data="{ open: false }">
                   <tr>
                       <td class="v_ wk xe vm co ut">
                           <div class="flex items-center">
                               <label class="inline-flex">
                                   <span class="tc">Select</span>
                                   <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                           </div>
                       </td>

                       <td  class="v_ wk xe vm co">
                       <div class="flex items-center">
                       <div class="uo oa ap mr-2 _f">
                       
                           <img class="uo oa rounded-full" src="../auto_admin/images/'.$image[0].'" width="36"
                               height="36" alt="Transaction 03"> </div>
                           </td>
                   </div>
                       <td class="v_ wk xe vm co">
                          
                               <div class="gk yj">'.$brnd.'</div>
                           </div>
                       </td>
                       <td class="v_ wk xe vm co">
                          
                       <div class="gk yj">'.$qty.'</div>
                   </div>
               </td>
                       <td class="v_ wk xe vm co">
                           <div>'.$name.'</div>
                       </td>
                       <td class="v_ wk xe vm co">
                           <div>'.$trck.'</div>
                       </td>
                       <td class="v_ wk xe vm co">
                          <a href="?product='.$proid.'" <div class="gh gk yg"z"><p style='.($status=='Pending'?'color:red':'color:green').';><b>'.$status.'</b></p></div></a>
                       </td>
                       <td class="v_ wk xe vm co">
                           <div class="gh gk yg"z">'.number_format($price).'</div>
                       </td>
                       <td class="v_ wk xe vm co">
                           <div class="gk text-slate-800">NGN'.number_format($ttP).'</div>
                       </td>
                       <td class="v_ wk xe vm co">
                           <div class="inline-flex gk pe yh rounded-full gp vk vy">'.$time.'</div>
                       </td><td class="v_ wk xe vm co">
                       <div class="inline-flex gk pe yh rounded-full gp vk vy">'.$date.'</div>
                   </td>
                   ';
               }
               echo ' <header class="mn mr">
<h2 class="g_ text-slate-800">All Orders
    <span class="yu gk">'.$ttQty.' Products</span>
</h2>
</header>';
        //    }
        }
    }

    function delivered()
    {

       if (isset($_SESSION['id'])) {

          require 'dbh.php';

          $id = $_SESSION['id'];

          if (isset($_GET['product'])) {

            $pro = $_GET['product'];

             $sql = mysqli_query($mar, "SELECT * FROM `ordered_product` WHERE 'id' ='$pro'");

             if ($sql) {
                print_r($_GET);

                $newStatus = "<span><strongstyle='color:Green;'>Delivered</strong></span>";

                 $query = mysqli_query($mar, "UPDATE `ordered_product` SET  `Status`='Delivered' WHERE `id`='$pro'");

             }else {
                 echo ' Check Your db';
             }
          }

       } else {
        echo "<script>alert('You are not logged in')
        window.location='../Auto_admin/signin'
        </script>";
  
       }
       
    }


    function Billing($details)
    {
        if (isset($_SESSION['id'])) {

            require 'dbh.php';

            $id = $_SESSION['id'];

            $sql =mysqli_query($mar, "SELECT * FROM `auto_info` WHERE id=$id");

            $result = mysqli_fetch_assoc($sql);

            return $result[$details];


            
        }else {
            echo "<script>alert('You are not logged in) window.location='../Auto_admin/signin'</script>";
        }
    }



    function myMail()
    {
        if (isset($_SESSION['id'])) {

           if (isset($_POST['send'])) {

               require 'dbh.php';

               extract($_POST);
               
               if (empty($name) ||empty($email) || empty($subject) || empty($phone)) {

                     echo "<script>alert('All fields are required')</script>";
                  
               }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                echo "<script>alert('Email is not correct')</script>";
                  
               }elseif (!preg_match("/^[0-9 ]*$/",$phone)) {

                echo "<script>alert('Phone number is not correct')</script>";
                   
               }else {
                   
                $to = 'TheophilusWilson@gmail.com';
                $header = header('From: '. $email);
                $text = 'You have a Message from '.$name. '\n\n '. $subject;

                mail($to, $header, $text. $subject);
               }
           }

        } else {
            echo "<script>alert('You are not logged in) window.location='../Auto_admin/signin'</script>";
           
        }
        
    }
    // function reDirect()
    // {
        require 'dbh.php';

        if (!isset($_SESSION['id'])) {

            echo "<script>alert('You are not logged in) window.location='../Auto_admin/signin'</script>";
            
        }
    // }
    function myAccount()
    
    {
        // require 'dbh.php';
        if (isset($_GET['accountid'])) {
        //     $id = $_GET['accountid'];


            if (!isset($_SESSION['id'])) {
    
                echo "<script>alert('You are not logged in')
                window.location='../Auto_admin/signin'
                </script>";
          
                  } else{  
                      $id = @$_SESSION['id'];
                        $user=  $_SESSION['admin_name'];

                        if ($user=='customer') {
                            header('location:../auto_admin/User_dashboard');
                        }elseif ($user=='admin') {
                            header('location:../Auto_admin/dashboard');
                            
                        }
                    }
                        // if (isset($_GET['accountid'])) {
                            
          
                        //     require 'dbh.php';

                        //     $hid="SELECT * FROM `auto_info` WHERE id=$id";
                            
                        //     $query = mysqli_query($mar, $hid);

                            
                            // if ($result = mysqli_fetch_assoc($query)) {
                            //     $row=$result['User_type'];
                                // if ($id=='customer') {
                                //     header('location:User_dashboad');
                                // }elseif ($id=='admin') {
                                //     header('location:dashboad');
                                    
                                // }
                            // }
                // $sql ="SELECT * FROM `auto_info` WHERE id='.$id.'";
                // $result= mysqli_query($mar, $sql);

                // if ($row=mysqli_fetch_assoc($result)) {

                //    $rows=$row['User_type'];

                //    if ($id==$rows['customer']) {
                      
                //     header('Location:user_dashboard');
                    
                //    }elseif ($id==$rows['admin']) {
                      
                // header('Location:dashboard');
                    
                //    }
                // }

            // $user =   $_SESSION['admin_name'];
            
            // if ($result) {
            //     # code...
            // }
            
        //    if (isset($_POST['acct'])) {

        //        if ($user = 'customer') {

        //           header('Location:user_dashboard');

        //        }elseif ($user == 'admin') {

        //         header('Location:dashboard');
                  
        //        }
        //    }

        } 
        
    }





    // function Billing_update()
    // {
    //     if (isset($_POST['btn'])) {

    //        require 'dbh.php';

    //        if (isset($_SESSION['id'])) {

    //         $user = $_SESSION['id'];

    //         $query = mysqli_query($mar, "UPDATE `auto_info` SET `id`='$user',`Fullname`='[value-2]',`email`='[value-3]',`User_type`='[value-4]',`password`='[value-5]',`Business name`='[value-6]',`House Address`='[value-7]',`State`='[value-8]',`Phone number`='[value-9]',`Country`='[value-10]',`Company Adress`='[value-11]',`City`='[value-12]' WHERE 1")
              
    //        }else {
    //         echo "<script>alert('You are not logged in) window.location='../Auto_admin/signin'</script>";
               
    //        }
    //     }
    // }

    function search()

    {
        if (isset($_GET['search'])) {
           $nm=$_GET['search'];
        //    print_r($_GET);
           extract($_GET);
        require 'dbh.php';
        $arrCart=[];
           
            if (empty($cars)) {
               echo "<script>alert('Fields are required')</script>";
               
            }else {
                $sq="SELECT * FROM `add_product` WHERE `Product_name`LIKE '%{$cars}%' OR `Product_brand`LIKE '%{$cars}%' OR `Product_brand` LIKE '%{$cars}%'";
                $query=mysqli_query($mar, $sq);
                if (mysqli_num_rows($query)>0) {
                    while ($a = mysqli_fetch_assoc($query)) {
                       $rowN=$a['Product_name'];
                       $rowB=$a['Product_brand'];
                       $rowP=$a['Product_price'];
                       $rowD=$a['Product_description'];
                       $rowM=$a['Product_Mileage'];
                       $rowY=$a['Product_year'];
                       $rowI=json_decode( $a['Product_image']);
                       $rowId=$a['id'];

                       echo '      <div class="ltn__product-area ltn__product-gutter mb-100">
                       <div class="container">
                           <div class="row">
                               <div class="col-lg-12">
                                   <div class="ltn__shop-options">
                                       <ul>
                                           <li>
                                               <div class="ltn__grid-list-tab-menu ">
                                                   <div class="nav">
                                                       <a class="active show" data-bs-toggle ="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                                       <a data-bs-toggle ="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                              <div class="short-by text-center">
                                                   <select class="nice-select">
                                                       <option>Default sorting</option>
                                                       <option>Sort by popularity</option>
                                                       <option>Sort by new arrivals</option>
                                                       <option>Sort by price: low to high</option>
                                                       <option>Sort by price: high to low</option>
                                                   </select>
                                               </div> 
                                           </li>
                                           <li>
                                              <div class="showing-product-number text-right">
                                                   <span>Showing 9 of 20 results</span>
                                               </div> 
                                           </li>
                                       </ul>
                                   </div>
                                   <div class="tab-content">
                                       <div class="tab-pane fade active show" id="liton_product_grid">
                                           <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                               <div class="row">
                                                   <!-- ltn__product-item -->
                                                   <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
                                                       <div class="ltn__product-item ltn__product-item-3  text-center">
                                                           <div class="product-img">
                                                               <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                                               <div class="product-badge">
                                                                   <ul>
                                                                       <li class="sale-badge">New</li>
                                                                   </ul>
                                                               </div>
                                                               <div class="product-hover-action">
                                                                   <ul>
                                                                       <li>
                                                                           <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                               <i class="far fa-eye"></i>
                                                                           </a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                               <i class="fas fa-shopping-cart"></i>
                                                                           </a>
                                                                       </li>
                                                                       <li>
                                                                           <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                               <i class="far fa-heart"></i></a>
                                                                       </li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                           <div class="product-info">
                                                               <div class="product-ratting">
                                                                   <ul>
                                                                       <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                       <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                       <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                       <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                       <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                   </ul>
                                                               </div>
                                                               <h2 class="product-title"><a href="product-details.html">Wheel Bearing Retainer</a></h2>
                                                               <div class="product-price">
                                                                   <span>$149.00</span>
                                                                   <del>$162.00</del>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                       ';


                    }
                    // header("location:shop-car-right-sidebar?newId=$arr");
                    echo ' <div class="ltn__pagination-area text-center">
                    <div class="ltn__pagination">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>';
                } else {
               echo "<script>alert('Products Not Found')</script>"; 
                }
                
  
                          }              // print_r($_GET);
                
            }
        
        
    }



    function SearchModels($mods){
        require 'dbh.php';
    
    $sq="SELECT * FROM `add_product`";
    $query=mysqli_query($mar, $sq);

 while (mysqli_num_rows($query)>0) {
    while ($row = mysqli_fetch_assoc($query)) {
        // $pro_n=$row['Product_name'];        
        // $pro_b= $row['Product_brand'];              
        // $pro_y= $row['Product_year'];     
    
    return  $row[$mods];
     

    }
    
}
    }


    function SearchedProducts()
    {
        // if (!isset($_SESSION['id'])) {
        //     echo "<script>alert('You are not logged in')
        //     window.location='../Auto_admin/signin'
        //     </script>";
        // }else {
            if (isset($_GET['newId'])) {
                require 'dbh.php';

                $NewId=$_GET['newId'];

// $newArr=[];
         // print_r($NewId);
                $NewId=$_GET['newId'];
                // print_r($NewId);
                
            // $ar=array_push($newArr, $NewId);
            // foreach ($NewId as $key=>$value) {
            //     print_r($NewId);
            // }
                   
                $sql ="SELECT * FROM `add_product` WHERE id='$NewId'";
                print_r($sql);
                
                $que=mysqli_query($mar, $sql);
                if ($que) {
                   while ($a =mysqli_fetch_assoc($que)) {
                    $rowN=$a['Product_name'];
                    $rowB=$a['Product_brand'];
                    $rowP=$a['Product_price'];
                    $rowM=$a['Product_Mileage'];
                    $rowY=$a['Product_year'];
                    $rowI=json_decode($a['Product_image']);
                    $rowId=$a['id'];
                    // <a href="product_details?pro_id='.$rowId.'"><img src="img/product-2/1.png" alt="#"></a>
                    // ="../auto_admin/images/'.$pro_i[0].
                    echo '
                    <div class="col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                            <a href="product_details?pro_id='.$a['id'].'"><img src="../auto_admin/images/'. $rowI[0].'" alt="a"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">New</li>rowI
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product_details?pro_id='.$rowId.'">'.$rowN.'</a></h2>
                                                <div class="product-price">
                                                    <span><del>N</del>'.$rowP.'</span>
                                                    <del>$68,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>'.$rowY.'
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>'.$rowM.'
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>90kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    ';
                   }
                }else {
                    echo 'Check your query';
                }
            }
        // }
    }


    function pro_view2()
{
    require 'dbh.php';
    
    $sq="SELECT * FROM `add_product`";
    $query=mysqli_query($mar, $sq);

if (mysqli_num_rows($query)>0) {
    while ($row = mysqli_fetch_assoc($query)) {
       
        $pro_i=json_decode($row['Product_image']);
        $pro_p=number_format($row['Product_price']);
        $pro_n=$row['Product_name'];        
        $pro_b= $row['Product_brand']; 
        $pro_p= $row['Product_price'];               
        $pro_y= $row['Product_year'];               
        $pro_M= $row['Product_Mileage'];                             
        echo ' <div class="col-lg-12">
        <div class="ltn__img-slide-item-4">
            <a href="img/img-slide/21.jpg" data-rel="lightcase:myCollection">
            <img src="../auto_admin/images/'.$pro_i[0].'" alt="Image">
            </a>
            <div class="ltn__img-slide-info">
                <div class="ltn__img-slide-info-brief">
                    <h6>'.$pro_n.'</h6>
                    <h1><a href="product_details?pro_id='.$row['id'].'">'.$pro_b.'</a></h1>
                    ">
                </div>
                <div class="btn-wrapper">
                    <a href="product_details?pro_id='.$row['id'].'" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                </div>
            </div>
        </div>
    </div>';
    
    }  
}
}

?>