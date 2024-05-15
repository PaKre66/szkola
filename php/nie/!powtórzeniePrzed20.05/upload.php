
<?php
echo $_FILES['file']['error'];
$uploads = 'uploads/';
if($_FILES['file']['error'] == 0 && is_uploaded_file($_FILES['file']['tmp_name'])) {
    $upload_dir = '';
    switch($_POST['directory']) {
        case 'photos':
            $upload_dir = $uploads . 'photos/';
            break;
        case 'text':
            $upload_dir = $uploads . 'text/';
            break;
        default:
            header('Location: index.php');
    }
    $file_ext = explode('.', $_FILES['file']['name']);
    $upload_file = $upload_dir . $_POST['name'] . '_' . time() . '.' . $file_ext[count($file_ext) - 1];
    if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }
}
?>