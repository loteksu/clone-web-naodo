<?PHP

class Controller
{
    const Url = 'Views';

    public function view($path)
    {
        $path = self::Url . '/' . str_replace('.', '/', $path) . '.php';
        return require($path);

    }


}