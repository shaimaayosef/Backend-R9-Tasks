<?phP
$expire = time() - 60*60*24*30; 
setcookie('u-email', $_COOKIE['u-email'], $expire,"/",secure:true); 
echo "you'r logged out";
?>