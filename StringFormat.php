$search = "dogs";//$_POST['searchbar'];
$prereq = "https://www.google.com/search?q=";
$final = $prereq;
for($i = (-1 * strlen($search)); i < 0; i++) {
    if(substr($search, i, 1) == " ") {
        $final .= +;
    }
    else {
        $final .= substr($search, i, 1);
    }
}
header("Location:" + $final);