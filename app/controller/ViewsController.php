namespace App\Controllers;

class ViewsController
{
    public function view($view)
    {
        $file = "../app/views/{$view}.php";
        
        if (file_exists($file)) {
            require_once '../app/views/header.php';
            require_once $file;
            require_once '../app/views/footer.php';
        } else {
            echo "Error 404: Vista no encontrada.";
        }
    }
}
